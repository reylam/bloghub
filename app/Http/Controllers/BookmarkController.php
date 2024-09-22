<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $bookmarks = Bookmark::where('user_id', Auth::user()->id)->get();

        return view('profile.bookmark', compact('bookmarks'));
    }

    public function store(Request $request)
    {
        Bookmark::create($request->all());

        return redirect()->back()->with('success', 'Berhasil menambahkan Blog Ke bookmark');
=======
    public function store(Request $request)
    {
        Bookmark::create([
            'user_id' => $request->user_id,
            'blog_id' => $request->blog_id
        ]);

        return redirect()->back()->with('status', 'Successfully add to bookmarks');
>>>>>>> origin/main
    }
}
