<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = 'Danh sách bài viết';
        return view('admin.layouts.posts.list')->with('title', $title);
    }
}
