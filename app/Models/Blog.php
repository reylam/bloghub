<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

<<<<<<< HEAD
    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
=======

    public function category()
    {
        return $this->belongsTo(Category::class);
>>>>>>> origin/main
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

<<<<<<< HEAD
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
=======
    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
>>>>>>> origin/main
    }
}
