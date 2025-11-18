<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['judul', 'deskripsi'];

    public function images()
    {
        return $this->hasMany(PostImage::class);
    }
}
