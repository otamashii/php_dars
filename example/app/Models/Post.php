<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function comments()
    {
        // Post -> Comment (one-to-many)
        return $this->hasMany(Comment::class, 'post_id');
    }
}
