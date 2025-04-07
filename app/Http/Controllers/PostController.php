<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = 'Danh sách bài viết';

        $posts = Post::with('categories', 'upload_files', 'users')->get();

        return view('admin.layouts.posts.list')->with([
            'title' => $title,
            'posts' => $posts
        ]);
    }

    public function create(){
        $title = 'Thêm mới bài viết';

        return view('admin.layouts.posts.create')->with([
            'title' => $title
        ]);
    }
}
