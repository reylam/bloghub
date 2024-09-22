<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BlogController extends Controller
{
    public function dashboard()
    {
        $blogs = Blog::get();
        $categories = Category::all();

        return view('dashboard', compact('blogs','categories'));
    }


    public function store(Request $request){
        
    }
    
}
