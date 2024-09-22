<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function store(Request $request)
    {
        Bookmark::create([
            'user_id' => $request->user_id,
            'blog_id' => $request->blog_id
        ]);

        return redirect()->back()->with('status', 'Successfully add to bookmarks');
    }
}
