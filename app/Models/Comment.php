<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function blog()
    {
        return $this->belongsTo(blog::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
