<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'images.*' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $post = Post::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('posts', 'public');
                $post->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('posts.show', $post->id);
    }

    public function show($id)
    {
        $post = Post::with('images')->findOrFail($id);
        return view('posts.show', compact('post'));
    }
}

