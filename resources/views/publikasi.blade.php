@extends('layouts.mainfaq') {{-- Menggunakan layout yang Anda sebutkan --}}

@section('content')
    <div class="container mx-auto p-4 md:p-8">
        <h1 class="text-4xl font-bold text-gray-800 text-center mb-10">Publikasi dan Pengumuman Penting</h1>
        @if($announcements->isEmpty())
            <p class="text-center text-gray-500 text-lg">Tidak ada publikasi atau pengumuman saat ini.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($announcements as $announcement)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition-transform duration-300 flex">
                        @if ($announcement->image_path)
                            <img src="{{ Storage::url($announcement->image_path) }}" 
                                 alt="Gambar Flayer" 
                                 class="w-2/5 h-auto object-cover">
                        @else
                            <div class="w-2/5 h-auto bg-gray-200 flex items-center justify-center text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                        <div class="p-3 w-3/5">
                            <h2 class="text-lg font-bold text-gray-800 truncate">{{ $announcement->title }}</h2>
                            <p class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($announcement->date)->locale('id')->isoFormat('D MMMM YYYY') }}</p>
                            <div class="mt-2 space-y-2">
                                @if ($announcement->file_path)
                                    <a href="{{ Storage::url($announcement->file_path) }}" 
                                       target="_blank" 
                                       class="inline-flex items-center text-xs font-semibold text-white bg-green-600 rounded-md px-2 py-1 hover:bg-green-700 transition-colors">
                                        Dokumen
                                    </a>
                                @endif
                                @if ($announcement->image_path)
                                    <a href="{{ route('announcements.showImage', $announcement->id) }}" 
                                       class="inline-flex items-center text-xs font-semibold text-white bg-blue-600 rounded-md px-2 py-1 hover:bg-blue-700 transition-colors">
                                        Flayer
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-12 flex justify-center">
                {{ $announcements->links() }}
            </div>
        @endif
    </div>
@endsection