<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    // Har bir postning ko‘p kommenti bo‘ladi
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
