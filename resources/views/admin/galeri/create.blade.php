@extends('layouts.main')

@section('title', 'Tambah Galeri')

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

    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Judul --}}
        <div class="mb-4">
            <label class="block font-semibold">Judul</label>
            <input type="text" name="judul" class="w-full border rounded px-3 py-2" required>
        </div>

        {{-- Gambar --}}
        <div class="mb-4">
            <label class="block font-semibold">Gambar</label>
            <input type="file" name="gambar" class="w-full" required>
            <p class="text-sm text-gray-500 mt-1">Rekomendasi ukuran: maksimal 1920 x 1080</p>
        </div>

        {{-- Deskripsi --}}
        <div class="mb-4">
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi" id="editor" class="w-full border rounded px-3 py-2 h-40"></textarea>
        </div>

        {{-- Kategori --}}
        <div class="mb-4">
            <label class="block font-semibold">Kategori</label>
            <select name="kategori" class="w-full border rounded px-3 py-2" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="Flora">Flora</option>
                <option value="Fauna">Fauna</option>
                <option value="Kegiatan">Kegiatan</option>
            </select>
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
