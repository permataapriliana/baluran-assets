{{-- resources/views/arsip/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4 text-center text-primary fw-bold">📚 Arsip Taman Nasional Baluran</h2>

    {{-- Filter dan Search --}}
    <form method="GET" class="d-flex mb-4 justify-content-center gap-2">
        <select name="kategori" class="form-select w-auto">
            <option value="">Semua Kategori</option>
            @foreach($kategori as $k)
                <option value="{{ $k }}" {{ request('kategori')==$k?'selected':'' }}>{{ $k }}</option>
            @endforeach
        </select>
        <input type="text" name="search" class="form-control w-25" placeholder="Cari judul arsip..."
               value="{{ request('search') }}">
        <button class="btn btn-primary">Filter</button>
    </form>

    {{-- Grid Arsip --}}
    <div class="row g-4">
        @forelse($arsip as $item)
        <div class="col-md-4">
            <div class="card shadow-lg border-0 h-100">
                <img src="{{ $item->cover ?? 'https://via.placeholder.com/300x200' }}" class="card-img-top" alt="cover">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="text-muted">{{ $item->kategori }}</p>
                    <p class="small">{{ Str::limit($item->deskripsi, 80) }}</p>
                    <a href="{{ asset('storage/'.$item->file) }}" target="_blank" 
                       class="btn btn-outline-primary mt-auto">📖 Baca</a>
                </div>
            </div>
        </div>
        @empty
            <p class="text-center">Tidak ada arsip ditemukan.</p>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $arsip->links() }}
    </div>
</div>
@endsection
