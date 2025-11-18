<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('berita.index', compact('beritas'));
    }

    public function listberita()
    {
        $beritas = Berita::orderBy('tanggal_publish', 'desc')->paginate(7);
        $tahun = null;
        return view('berita.listberita', compact('beritas', 'tahun'));
    }

    public function arsip($tahun)
    {
        $beritas = Berita::whereYear('tanggal_publish', $tahun)
            ->orderBy('tanggal_publish', 'desc')
            ->paginate(7);

        return view('berita.listberita', compact('beritas', 'tahun'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal_publish' => 'required|date',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['judul', 'konten', 'tanggal_publish']);

        // Hapus baris strip_tags agar tag HTML CKEditor tidak hilang
        // $data['konten'] = strip_tags($data['konten']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil disimpan!');
    }


    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'tanggal_publish' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $berita->judul = $validated['judul'];
        $berita->konten = $validated['konten']; // tanpa strip_tags
        $berita->tanggal_publish = $validated['tanggal_publish'];

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('uploads', 'public');
            $berita->gambar = $path;
        }

        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar && file_exists(storage_path("app/public/{$berita->gambar}"))) {
            unlink(storage_path("app/public/{$berita->gambar}"));
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        // $rekomendasiBerita = Berita::where('id', '!=', $berita->id)
        //                       ->orderBy('tanggal_publish', 'desc')
        //                       ->limit(4) // Ambil 4 berita terbaru
        //                       ->get();
        return view('berita.show', compact('berita'));
    }
}
