<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
<<<<<<< HEAD
use Illuminate\Support\Facades\Redis;
=======
>>>>>>> origin/main

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
<<<<<<< HEAD
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
=======
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
>>>>>>> origin/main

        $blog->update([
            'views' => $blog->views + 1
        ]);

<<<<<<< HEAD
        return view('blog.readBlog', compact('blog', 'blogs'));
=======
        if ($blog->views >= 1_000_000_000) {
            return number_format($blog->views / 1_000_000_000, 1) . 'B';
        } elseif ($blog->views >= 1_000_000) {
            return number_format($blog->views / 1_000_000, 1) . 'M';
        } elseif ($blog->views >= 1_000) {
            return number_format($blog->views / 1_000, 1) . 'K';
        }

        return view('blog.showBlog', compact('blog'));
>>>>>>> origin/main
    }
}
