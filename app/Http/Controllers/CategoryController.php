<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Danh sách danh mục';
        return view('admin.layouts.categories.list')->with('title', $title);
    }
}
