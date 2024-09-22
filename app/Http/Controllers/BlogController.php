<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        $categories = Category::all();

        return view('dashboard', compact('blogs','categories'));
    }

    
}
