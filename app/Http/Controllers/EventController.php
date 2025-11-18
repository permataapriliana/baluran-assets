<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Bersihkan deskripsi sebelum simpan
        $cleanDeskripsi = str_replace(
            "\xc2\xa0", ' ', // hilangkan non-breaking space (UTF-8)
            str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($validated['deskripsi'])))
        );

        $event = Event::create([
            'judul' => $validated['judul'],
            'deskripsi' => trim($cleanDeskripsi),
            'tanggal' => $validated['tanggal']
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('events', 'public');
                $event->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('event.index')->with('success', 'Event berhasil ditambahkan');
    }

    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Bersihkan deskripsi sebelum update
        $cleanDeskripsi = str_replace(
            "\xc2\xa0", ' ',
            str_replace('&nbsp;', ' ', html_entity_decode(strip_tags($validated['deskripsi'])))
        );

        $event->update([
            'judul' => $validated['judul'],
            'deskripsi' => trim($cleanDeskripsi),
            'tanggal' => $validated['tanggal']
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('events', 'public');
                $event->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('event.index')->with('success', 'Event berhasil diperbarui');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with('success', 'Event berhasil dihapus');
    }

    public function show(Event $event)
    {
        $event->load('images');
        return view('admin.event.show', compact('event'));
    }

    public function listeven()
    {
        $events = Event::latest()->paginate(5);
        return view('listevent', compact('events'));
    }

    public function arsipListeven($tahun)
    {
        $events = Event::whereYear('tanggal', $tahun)->latest()->paginate(5);
        return view('listevent', compact('events', 'tahun'));
    }
}
