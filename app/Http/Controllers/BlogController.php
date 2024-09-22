<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redis;

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
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');


        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'thumbnail' => $thumbnailPath,
            'slug' => Str::uuid()->toString(),
            'user_id' => $request->user_id
        ]);

        return redirect()->route('profile.edit')->with('success', 'Blog berhasil ditambahkan!');
    }



    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $currentBlogId = $blog->id;
        $blogs = Blog::where('id', '!=', $currentBlogId)->inRandomOrder()->take(5)->get();

        $blog->update([
            'views' => $blog->views + 1
        ]);

        return view('blog.readBlog', compact('blog', 'blogs'));
    }
}
