@extends('layouts.main')

@section('title', 'Edit Berita')

@section('content')
<div class="bg-white rounded shadow p-6">
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold">Judul</label>
            <input type="text" name="judul" value="{{ $berita->judul }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Konten</label>
            <textarea name="konten" id="editor" class="w-full border rounded px-3 py-2 h-40" required>{{ $berita->konten }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Tanggal Publikasi</label>
            <input type="date" name="tanggal_publish" value="{{ $berita->tanggal_publish->format('Y-m-d') }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Gambar (opsional)</label>
            @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" class="w-40 mb-2 rounded">
            @endif
            <input type="file" name="gambar" class="w-full">
        </div>

        <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Perbarui</button>
    </form>
</div>
@endsection

@section('scripts')
{{-- CKEditor CDN --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    const ckUploadUrl = "{{ route('ckeditor.upload') . '?_token=' . csrf_token() }}";

    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: ckUploadUrl
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>

@endsection
