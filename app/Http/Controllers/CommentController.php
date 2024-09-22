<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create($request->all());

        return redirect()->back()->with('success', 'Berhasil menambahkan Comment Ke bookmark');
    }
}
