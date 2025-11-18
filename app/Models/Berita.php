<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'konten', 
        'gambar', 
        'tanggal_publish'
    ];

    protected $casts = [
    'tanggal_publish' => 'date',
];

}
