@extends('layouts.main')

@section('title', 'Edit Galeri')

@section('content')
<div class="container mt-4">
    <h2>Edit Galeri</h2>

    {{-- Tampilkan error validasi jika ada --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Edit Galeri --}}
    <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Judul --}}
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $galeri->judul) }}" required>
        </div>

        {{-- Deskripsi --}}
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
        </div>

        {{-- Kategori --}}
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-select" required>
                <option value="">Pilih Kategori</option>
                <option value="Flora" {{ old('kategori', $galeri->kategori) == 'Flora' ? 'selected' : '' }}>Flora</option>
                <option value="Fauna" {{ old('kategori', $galeri->kategori) == 'Fauna' ? 'selected' : '' }}>Fauna</option>
                <option value="Kegiatan" {{ old('kategori', $galeri->kategori) == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
            </select>
        </div>

        {{-- Gambar lama --}}
        <div class="mb-3">
            <label class="form-label">Gambar Lama</label><br>
            <img src="{{ asset('images/galeri/' . $galeri->gambar) }}" alt="Gambar Lama" class="img-thumbnail" style="max-height: 200px;">
        </div>

        {{-- Gambar baru --}}
        <div class="mb-3">
            <label for="gambar" class="form-label">Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>

        {{-- Tombol Simpan --}}
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
