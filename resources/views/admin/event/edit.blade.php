@extends('layouts.main')

@section('title', 'Edit Event')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
<div class="max-w-2xl mx-auto mt-8 p-6 bg-white rounded shadow">
    <h2 class="text-2xl font-semibold mb-6">Edit Event</h2>

    <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Judul --}}
        <div class="mb-4">
            <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
            <input type="text" name="judul" id="judul"
                   class="form-control w-full mt-1 px-3 py-2 border rounded shadow-sm"
                   value="{{ old('judul', $event->judul) }}" required>
        </div>

        <!-- Deskripsi -->
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $event->deskripsi ?? '') }}">
        <trix-editor input="deskripsi"></trix-editor>
        @error('deskripsi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror

        {{-- Tanggal --}}
        <div class="mb-4">
            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal"
                   class="form-control w-full mt-1 px-3 py-2 border rounded shadow-sm"
                   value="{{ old('tanggal', \Carbon\Carbon::parse($event->tanggal)->format('Y-m-d')) }}" required>
        </div>

        {{-- Gambar --}}
        <div class="mb-4">
            <label for="images" class="block text-sm font-medium text-gray-700">Tambah Gambar (bisa pilih lebih dari 1)</label>
            <input type="file" name="images[]" id="images" class="form-control w-full mt-1 px-3 py-2 border rounded shadow-sm" multiple>

            @if($event->images->count())
                <div class="grid grid-cols-3 gap-3 mt-3">
                    @foreach($event->images as $img)
                        <img src="{{ asset('storage/' . $img->image_path) }}" class="w-full h-32 object-cover rounded">
                    @endforeach
                </div>
            @endif
        </div>


        {{-- Tombol --}}
        <div class="flex justify-between items-center">
            <a href="{{ route('event.index') }}" class="text-sm text-gray-600 hover:underline">← Kembali</a>
            <button type="submit" class="bg-green-700 text-white px-5 py-2 rounded hover:bg-green-800">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
