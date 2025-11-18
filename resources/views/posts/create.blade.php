@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2>Buat Post Baru</h2>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Foto (Bisa pilih banyak)</label>
            <input type="file" name="images[]" class="form-control" multiple required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
