@extends('layouts.main')

@section('title', 'Tambah Berita')

@section('content')
<div class="bg-white rounded shadow p-6">
    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-3 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold">Judul</label>
            <input type="text" name="judul" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Konten</label>
            <textarea name="konten" id="editor" class="w-full border rounded px-3 py-2 h-40"></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Tanggal Publikasi</label>
            <input type="date" name="tanggal_publish" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Gambar (opsional)</label>
            <input type="file" name="gambar" class="w-full">
        </div>

        <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Simpan</button>
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

