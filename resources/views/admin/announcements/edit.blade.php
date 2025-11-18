@extends('layouts.main')

@section('title', 'Edit Pengumuman')

@section('content')
<div class="space-y-6">
    <h1 class="text-3xl font-bold text-gray-800">Edit Pengumuman</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative" role="alert">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <strong class="font-bold">Terjadi kesalahan!</strong>
            </div>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-700">Formulir Pengumuman</h2>
        </div>
        <div class="p-6">
            <form action="{{ route('announcements.update', $announcement->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Pengumuman</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $announcement->title) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                </div>
                
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                    <input type="date" id="date" name="date" value="{{ old('date', \Carbon\Carbon::parse($announcement->date)->format('Y-m-d')) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
                </div>
                
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Isi Pengumuman</label>
                    <textarea id="content" name="content" rows="5" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">{{ old('content', $announcement->content) }}</textarea>
                </div>

                <div>
                    <label for="file" class="block text-sm font-medium text-gray-700 mb-1">File Dokumen (PDF, opsional)</label>
                    @if ($announcement->file_path)
                        <p class="mb-2 text-sm text-gray-500">
                            File saat ini: 
                            <a href="{{ Storage::url($announcement->file_path) }}" target="_blank" class="text-green-600 hover:underline">
                                Lihat Dokumen
                            </a>
                        </p>
                    @endif
                    <input type="file" id="file" name="file" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100">
                </div>
                
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Gambar Pengumuman (JPG, PNG, opsional)</label>
                    @if ($announcement->image_path)
                        <div class="mb-2">
                            <img src="{{ Storage::url($announcement->image_path) }}" alt="Gambar saat ini" class="max-w-xs rounded-lg shadow-sm">
                        </div>
                    @endif
                    <input type="file" id="image" name="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100">
                </div>
                
                <div class="flex justify-end space-x-3 mt-6">
                    <a href="{{ route('announcements.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors">
                        Batal
                    </a>
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection