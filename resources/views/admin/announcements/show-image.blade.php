@extends('layouts.mainfaq')

@section('title', $announcement->title)

@section('content')
<div class="container my-5">
    <div class="card p-4 shadow-lg border-0 rounded-3">
        
        <div class="mb-4">
            <a href="javascript:history.back()" class="inline-flex items-center text-sm font-semibold text-gray-700 hover:text-green-600 transition-colors">
                <i class="fas fa-arrow-left me-2"></i>
                Kembali
            </a>
        </div>

        <div class="row g-4 align-items-center">
            
            <div class="col-md-6 d-flex justify-content-center">
                @if ($announcement->image_path)
                    <img src="{{ Storage::url($announcement->image_path) }}" 
                         alt="Gambar Flayer: {{ $announcement->title }}" 
                         class="img-fluid rounded-3 shadow-sm" style="max-height: 80vh;">
                @else
                    <div class="bg-light d-flex align-items-center justify-content-center rounded-3" style="width: 100%; height: 400px;">
                        <i class="far fa-image text-muted" style="font-size: 4rem;"></i>
                    </div>
                @endif
            </div>

            <div class="col-md-6">
                <div class="d-flex flex-column h-100 justify-content-center">
                    <h1 class="h3 fw-bold text-dark mb-2">
                        {{ $announcement->title }}
                    </h1>
                    <p class="text-muted small mb-4">
                        Dipublikasikan pada {{ \Carbon\Carbon::parse($announcement->date)->locale('id')->isoFormat('D MMMM YYYY') }}
                    </p>
                    
                    <p class="text-secondary fw-normal lh-base mb-4">
                        {{ $announcement->content }}
                    </p>
                    
                    <div class="d-flex flex-wrap gap-2">
                        @if ($announcement->file_path)
                            <a href="{{ Storage::url($announcement->file_path) }}" 
                               target="_blank" 
                               class="btn btn-success fw-bold">
                                <i class="fas fa-download me-2"></i> Unduh Dokumen
                            </a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection