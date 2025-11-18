<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    // Menampilkan daftar pengumuman
    public function index()
    {
        // Ganti get() dengan paginate() agar tidak terlalu banyak data
        $announcements = Announcement::latest()->paginate(9); 
        return view('admin.announcements.index', compact('announcements'));
    }

    // Menampilkan form tambah pengumuman
    public function create()
    {
        return view('admin.announcements.create');
    }

    /**
     * Menyimpan pengumuman baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi Data, termasuk gambar
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required',
            'file' => 'nullable|mimes:pdf|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahan: Validasi gambar
        ]);

        // 2. Unggah File (Jika Ada)
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('announcements/files', 'public');
        }

        // Tambahan: Unggah Gambar (Jika Ada)
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('announcements/images', 'public');
        }

        // 3. Simpan Data ke Database
        Announcement::create([
            'title' => $request->title,
            'date' => $request->date,
            'content' => $request->content,
            'file_path' => $filePath,
            'image_path' => $imagePath, // Tambahan: Simpan path gambar
        ]);

        // 4. Redirect dengan Pesan Sukses
        return redirect()->route('announcements.index')->with('success', 'Pengumuman berhasil ditambahkan!');
    }

    public function edit(Announcement $announcement)
    {
        return view('admin.announcements.edit', compact('announcement'));
    }

    /**
     * Memperbarui data pengumuman di database.
     */
    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required',
            'file' => 'nullable|mimes:pdf|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahan: Validasi gambar
        ]);

        $filePath = $announcement->file_path;
        if ($request->hasFile('file')) {
            if ($announcement->file_path) {
                Storage::disk('public')->delete($announcement->file_path);
            }
            $filePath = $request->file('file')->store('announcements/files', 'public');
        }
        
        // Tambahan: Update Gambar
        $imagePath = $announcement->image_path;
        if ($request->hasFile('image')) {
            if ($announcement->image_path) {
                Storage::disk('public')->delete($announcement->image_path);
            }
            $imagePath = $request->file('image')->store('announcements/images', 'public');
        }

        $announcement->update([
            'title' => $request->title,
            'date' => $request->date,
            'content' => $request->content,
            'file_path' => $filePath,
            'image_path' => $imagePath, // Tambahan: Update path gambar
        ]);

        return redirect()->route('announcements.index')->with('success', 'Pengumuman berhasil diperbarui!');
    }

    /**
     * Menghapus pengumuman dari database.
     */
    public function destroy(Announcement $announcement)
    {
        // Hapus file dan gambar terkait dari storage
        if ($announcement->file_path) {
            Storage::disk('public')->delete($announcement->file_path);
        }
        if ($announcement->image_path) {
            Storage::disk('public')->delete($announcement->image_path); // Tambahan: Hapus gambar
        }
        
        $announcement->delete();

        return redirect()->route('announcements.index')->with('success', 'Pengumuman berhasil dihapus!');
    }

    public function publicIndex()
    {
        // Ambil data pengumuman
        $announcements = Announcement::latest()->paginate(9);

        // Kirim data pengumuman ke view dengan path yang baru
        return view('faq.partials.publikasi', compact('announcements'));
    }

    public function publicIndexHome()
    {
        // Ambil data pengumuman
        $announcements = Announcement::latest()->paginate(9);

        // Kirim data pengumuman ke view dengan path yang baru
        return view('publikasi', compact('announcements'));
    }

    public function showImage(Announcement $announcement)
    {
        // Langsung kirim objek pengumuman ke view
        return view('admin.announcements.show-image', compact('announcement'));
    }
    public function show(Announcement $announcement)
    {
        return view('publikasi.show', compact('announcement'));
    }
}