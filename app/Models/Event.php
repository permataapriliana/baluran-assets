<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['judul', 'deskripsi', 'tanggal', 'gambar'];

    // Relasi ke tabel event_images
    public function images()
    {
        return $this->hasMany(EventImage::class);
    }

}

