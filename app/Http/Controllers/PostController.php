<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category', 'uploadedBy'])->get();
        return view('admin.layouts.posts.list', compact('posts'));
    }
    public function edit($id){
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.layouts.posts.edit', compact('post', 'categories'));
    }
}
