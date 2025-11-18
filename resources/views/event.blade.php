@extends('layouts.admin')

@section('title', 'Tambah Event')

@section('content')
<div class="bg-white p-6 rounded shadow-md w-full max-w-xl">
    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="judul" class="block font-semibold text-gray-700">Judul Event</label>
            <input type="text" id="judul" name="judul" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block font-semibold text-gray-700">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="5" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600" required></textarea>
        </div>

        <div class="mb-4">
            <label for="tanggal" class="block font-semibold text-gray-700">Tanggal Event</label>
            <input type="date" id="tanggal" name="tanggal" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600" required>
        </div>

        <div class="mb-4">
            <label for="gambar" class="block font-semibold text-gray-700">Gambar (opsional)</label>
            <input type="file" id="gambar" name="gambar" class="mt-1 block w-full">
        </div>

        <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800">Simpan</button>
    </form>
</div>
@endsection
