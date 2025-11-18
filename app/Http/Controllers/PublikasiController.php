<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\GalleryItem;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        $pengumuman = Announcement::latest()->get(); // Ambil semua pengumuman, terbaru di atas
        $galeri = GalleryItem::latest()->get(); // Ambil semua item galeri, terbaru di atas

        return view('faq.partials.publikasi', compact('pengumuman', 'galeri'));
    }
}