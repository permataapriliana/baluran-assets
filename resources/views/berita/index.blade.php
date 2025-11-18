@extends('layouts.main')

@section('title', 'Daftar Berita')

@section('content')
<div class="mb-4">
    <a href="{{ route('berita.create') }}" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">+ Tambah Berita</a>
</div>

@if(session('success'))
<div class="bg-green-100 text-green-800 p-4 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach($beritas as $berita)
        <div class="bg-white p-4 rounded shadow relative">
            <h3 class="font-bold text-lg">{{ $berita->judul }}</h3>

            <p class="text-sm text-gray-600 mb-1">
                <span class="font-semibold">Tanggal:</span> {{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('d M Y') }}
            </p>

            <p class="text-sm text-gray-700 mb-2">
                {{ Str::limit(strip_tags($berita->konten), 100) }}
            </p>

            @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" class="mt-2 w-full h-48 object-cover rounded">
            @endif

            <div class="flex gap-2 mt-4">
                <a href="{{ route('berita.edit', $berita->id) }}" class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Edit</a>

                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

{{-- Tambahkan kode paginasi di sini --}}
<div class="d-flex justify-content-center mt-4">
    {{ $beritas->links() }}
</div>
@endsection

