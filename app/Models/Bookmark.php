<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $guarded = [];

<<<<<<< HEAD
    public function user()
    {
        return $this->belongsTo(User::class);
    }

=======
>>>>>>> origin/main
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
<<<<<<< HEAD
=======

    public function user()
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> origin/main
}
