@extends('layouts.main')

@section('title', 'Tambah Event')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
<div class="bg-white p-6 rounded shadow-md w-full max-w-xl">
    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="judul" class="block font-semibold text-gray-700">Judul Event</label>
            <input type="text" id="judul" name="judul" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600" required>
        </div>

        <!-- Deskripsi -->
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $event->deskripsi ?? '') }}">
        <trix-editor input="deskripsi"></trix-editor>
        @error('deskripsi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror

        <div class="mb-4">
            <label for="tanggal" class="block font-semibold text-gray-700">Tanggal Event</label>
            <input type="date" id="tanggal" name="tanggal" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600" required>
        </div>

        <div class="mb-4">
            <label for="images" class="block font-semibold text-gray-700">Gambar (bisa pilih lebih dari 1)</label>
            <input type="file" id="images" name="images[]" class="mt-1 block w-full" multiple>
        </div>

        <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800">Simpan</button>
    </form>
</div>
@endsection