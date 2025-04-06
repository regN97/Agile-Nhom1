<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('client.layouts.posts.main')->with('title', $title);
    }
}
