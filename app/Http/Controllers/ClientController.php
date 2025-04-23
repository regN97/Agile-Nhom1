<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $posts = Post::with('categories', 'upload_files')->get();
        $categories = Category::get();
        return view('client.layouts.posts.main')->with([
            'title' => 'Home',
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function show(Request $request)
    {
        $post = Post::with('categories', 'upload_files')->find($request->id);
        $categories = Category::get();
        $user = User::find($post->uploaded_by);
        return view('client.layouts.posts.show')->with([
            'title' => 'Post',
            'post' => $post,
            'categories' => $categories,
            'user' => $user,
        ]);
    }

    public function search(Request $req)
    {
        $message = '';
        $categories = Category::get();
        $posts = Post::with('categories', 'upload_files')->where('title', 'like', '%' . $req->search . '%')->get();
        if ($posts->isEmpty()) {
            $message = 'Không tìm thấy bài viết nào!';
            return view('client.layouts.posts.search')->with([
                'message' => $message,
                'categories' => $categories,
                'title' => 'Search',
            ]);
        }

        if ($req->search == '' || $req->search == null) {
            $message = 'Vui lòng nhập từ khóa tìm kiếm!';
            return view('client.layouts.posts.search')->with([
                'message' => $message,
                'categories' => $categories,
                'title' => 'Search',
            ]);
        }

        return view('client.layouts.posts.search')->with([
            'title' => 'Search',
            'posts' => $posts,
            'categories' => $categories,
            'message' => $message,
        ]);
    }

    public function categoryShow(Request $req)
    {
        $postList = Post::with('categories', 'upload_files')->where('category_id', '=', $req->id)->get();
        $categories = Category::get();
        $categoryName = Category::where('id', '=', $req->id)->first();
        return view('client.layouts.categories.show')->with([
            'categories' => $categories,
            'title' => $categoryName->name,
            'posts' => $postList
        ]);
    }
}
