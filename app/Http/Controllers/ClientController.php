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

    
}
