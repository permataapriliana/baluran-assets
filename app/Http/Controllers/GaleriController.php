<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // Untuk halaman publik
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('galeri', compact('galeris'));
    }

    // Untuk halaman admin
    public function adminIndex()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|in:Flora,Fauna,Kegiatan',
        ]);

        $fileName = time() . '_' . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/galeri'), $fileName);

        Galeri::create([
            'judul' => $request->judul,
            'gambar' => $fileName,
            // bersihkan HTML sebelum simpan
            'deskripsi' => strip_tags($request->deskripsi),
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|in:Flora,Fauna,Kegiatan',
        ]);

        $galeri = Galeri::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $filename = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/galeri'), $filename);
            $galeri->gambar = $filename;
        }

        $galeri->update([
            'judul' => $request->judul,
            // bersihkan HTML sebelum update
            'deskripsi' => strip_tags($request->deskripsi),
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus.');
    }
}
