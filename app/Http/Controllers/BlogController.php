<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function dashboard()
    {
        $blogs = Blog::get();
        $categories = Category::all();

        return view('dashboard', compact('blogs', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('blog.addBlog', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blogData = $request->all();
        $blog = new Blog();
        $blog->fill($blogData);

        $blog->slug =  Str::uuid()->toString();

        $imagePath = $request->file('thumbnail')->store('images', 'public');
        $blog->thumbnail = $imagePath;

        $blog->save();

        return redirect()->route('profile.edit')->with('success', 'Blog post created successfully!');
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        $blog->update([
            'views' => $blog->views + 1
        ]);

        if ($blog->views >= 1_000_000_000) {
            return number_format($blog->views / 1_000_000_000, 1) . 'B';
        } elseif ($blog->views >= 1_000_000) {
            return number_format($blog->views / 1_000_000, 1) . 'M';
        } elseif ($blog->views >= 1_000) {
            return number_format($blog->views / 1_000, 1) . 'K';
        }

        return view('blog.showBlog', compact('blog'));
    }
}
