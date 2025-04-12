<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Danh sách bài viết';

        $posts = Post::with('categories', 'upload_files', 'users')->get();

        return view('admin.layouts.posts.list')->with([
            'title' => $title,
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $title = 'Thêm mới bài viết';
        $categories = Category::get();
        return view('admin.layouts.posts.create')->with([
            'categories' => $categories,
            'title' => $title
        ]);
    }
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'title' => 'required|string|max:255', // Tiêu đề
            'content' => 'required|string', // Nội dung
            'category_id' => 'required|exists:categories,id', // Danh mục
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg,webp', // Hình ảnh
            'uploaded_by' => 'nullable|exists:users,id', // Người đăng
            'status' => 'required|in:draft,published', // Trạng thái
        ], [
            'required' => ':attribute không được để trống',
            'string' => ':attribute phải là chuỗi',
            'max' => ':attribute không được vượt quá :max ký tự',
            'exists.inputs' => ':attribute không hợp lệ',
            'image' => ':attribute phải là hình ảnh',
            'mimes' => ':attribute phải là định dạng: :values',
            'in' => ':attribute phải là một trong các giá trị: :values',
        ], [
            'title' => 'Tiêu đề',
            'content' => 'Nội dung',
            'category_id' => 'Danh mục',
            'image' => 'Hình ảnh',
            'uploaded_by' => 'Người đăng',
            'status' => 'Trạng thái',
        ]);
    
        $userId = Auth::user()->id;
    
        // Dữ liệu cơ bản cho bài viết
        $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'uploaded_by' => $userId,
            'status' => $request->status,
        ];
    
        // Kiểm tra nếu có hình ảnh được tải lên
        if ($request->hasFile('image')) {
            // Lưu ảnh vào thư mục và lưu thông tin ảnh vào bảng upload_files
            $imagePath = $request->file('image')->store('image/posts', 'public');
            $uploadFile = UploadFile::create([
                'file_name' => $request->file('image')->getClientOriginalName(),
                'file_path' => $imagePath,
                'file_type' => $request->file('image')->getClientMimeType(),
                'uploaded_by' => $userId,
            ]);
    
            // Gán ID ảnh vào dữ liệu bài viết
            $data['image'] = $uploadFile->id;
        }
    
        // Tạo bài viết
        Post::create($data);
    
        return redirect()->route('admin.posts.index')->with('success', 'Thêm bài viết thành công.');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $title = 'Trang sửa bài viết';
        $categories = Category::all();
        return view('admin.layouts.posts.edit', compact('categories', 'post', 'title'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // Validate input data
        $request->validate([
            'title' => 'required|string|max:255', // Tiêu đề
            'content' => 'required|string', // Nội dung
            'category_id' => 'required|exists:categories,id', // Danh mục
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg', // Hình ảnh
            'uploaded_by' => 'nullable|exists:users,id', // Người đăng
            'status' => 'required|in:draft,published', // Trạng thái
        ], [
            'required' => ':attribute không được để trống',
            'string' => ':attribute phải là chuỗi',
            'max' => ':attribute không được vượt quá :max ký tự',
            'exists' => ':attribute không hợp lệ',
            'image' => ':attribute phải là hình ảnh',
            'mimes' => ':attribute phải là định dạng: :values',
            'in' => ':attribute phải là một trong các giá trị: :values',
        ], [
            'title' => 'Tiêu đề',
            'content' => 'Nội dung',
            'category_id' => 'Danh mục',
            'image' => 'Hình ảnh',
            'uploaded_by' => 'Người đăng',
            'status' => 'Trạng thái',
        ]);

        $userId = Auth::user()->id;

        $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'uploaded_by' => $userId,
            'status' => $request->status,
        ];

        $data['image'] = $post->image;

        // Kiểm tra nếu có hình ảnh mới
        if ($request->hasFile('image')) {
            // Lưu ảnh mới vào thư mục và lưu thông tin ảnh vào bảng upload_files
            $imagePath = $request->file('image')->store('image/posts', 'public');
            $uploadFile = UploadFile::create([
                'file_name' => $request->file('image')->getClientOriginalName(),
                'file_path' => $imagePath,
                'file_type' => $request->file('image')->getClientMimeType(),
                'uploaded_by' => $userId,
            ]);

            // Gán ID ảnh mới vào dữ liệu bài viết
            $data['image'] = $uploadFile->id;

            // Xóa ảnh cũ nếu có
            if ($post->image) {
                $oldImage = UploadFile::find($post->image);
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage->file_path);
                    $oldImage->delete();  // Xóa bản ghi ảnh cũ trong bảng upload_files nếu cần
                }
            }
        }

        // Cập nhật bài viết
        $post->update($data);

        // Quay lại danh sách bài viết với thông báo thành công
        return redirect()->route('admin.posts.index')->with('success', 'Cập nhật bài viết thành công.');
    }
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        if ($post->image) {
            $uploadFile = UploadFile::find($post->image);
            if ($uploadFile) {
                Storage::disk('public')->delete($uploadFile->file_path);
                $uploadFile->delete();
            }
        }
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Xóa bài viết thành công.');
    }
}
