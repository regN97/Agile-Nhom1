<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Danh sách danh mục';
        $categories = Category::all();
        return view('admin.layouts.categories.list')->with([
            'title' => $title,
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        $title = 'Thêm danh mục';

        return view('admin.layouts.categories.create')->with([
            'title' => $title,
        ]);
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|max:50',
            'description' => 'nullable|max:255',
        ],[
            'name.required' => 'Tên danh mục không được để trống',
            'name.max' => 'Tên danh mục quá dài',
            'description.required' => 'Mô tả danh mục không được để trống',
            'description.string' => 'Mô tả sản phẩm không phải là chuỗi'
        ]);

        $data = [
            'name' => $req->name,
            'description' => $req->description,
        ];

        // Check if the category already exists
        $existingCategory = Category::where('name', $req->name)->first();
        if ($existingCategory) {
            return redirect()->back()->with('error', 'Danh mục đã tồn tại');
        }
        // Create a new category
        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Thêm danh mục thành công');
    }
    public function edit($id) {
        $category = Category::where('id', $id)->first();
        $title = 'Chỉnh sửa danh mục';
        return view('admin.layouts.categories.edit')->with(['category' => $category, 'title' => $title]);
    }
    public function update($id, Request $req) {
        $req->validate([
            'name' => 'required|max:50',
            'description' => 'nullable|max:255',
        ],[
            'name.required' => 'Tên danh mục không được để trống',
            'name.max' => 'Tên danh mục quá dài',
            'description.required' => 'Mô tả danh mục không được để trống',
            'description.string' => 'Mô tả sản phẩm không phải là chuỗi'
        ]);

        $data = [
            'name' => $req->name,
            'description' => $req->description,
        ];
        Category::where('id', $id)->update($data);
        return redirect()->route('admin.categories.index')->with('success', 'Chỉnh sửa danh mục thành công');
    }

    public function delete(Request $request) {

        $category = Category::where('id', $request->id)->first();
        $category->delete(); 
        return redirect()->route('admin.categories.index');
    }
}
