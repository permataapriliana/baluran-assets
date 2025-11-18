<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryItemController extends Controller
{
    // Menampilkan daftar item galeri
    public function index()
    {
        $galleryItems = GalleryItem::latest()->get();
        return view('admin.gallery-items.index', compact('galleryItems'));
    }

    // Menampilkan form tambah item galeri
    public function create()
    {
        return view('admin.gallery-items.create');
    }

    // Menyimpan item galeri baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Wajib, max 2MB
        ]);

        $imagePath = $request->file('image')->store('public/gallery');

        GalleryItem::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('gallery-items.index')->with('success', 'Item galeri berhasil ditambahkan!');
    }

    // Anda bisa tambahkan method edit, update, dan destroy
    // ...
}