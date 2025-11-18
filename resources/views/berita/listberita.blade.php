@extends('components.header')

@section('content')
<div class="container my-4">
    <h2 class="mb-3">
        Berita Terkini{{ isset($tahun) ? ' Tahun ' . $tahun : '' }}
    </h2>
    <div class="row">
        <!-- List Berita -->
        <div class="col-md-8">
            @foreach ($beritas as $berita)
                <div class="card mb-4 shadow-sm border-0">
                    <div class="row g-0">
                        <!-- Gambar -->
                        <div class="col-md-4 col-12">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" 
                                 alt="gambar" 
                                 class="img-fluid rounded-start w-100 h-100 object-fit-cover" 
                                 style="min-height: 150px;">
                        </div>
                        <!-- Konten -->
                        <div class="col-md-8 col-12 d-flex flex-column p-3">
                            <h5 class="card-title">{{ $berita->judul }}</h5>
                            <p class="card-text flex-grow-1">
                                {{ Str::limit(strip_tags($berita->konten), 150) }}
                                <a href="{{ route('berita.show', $berita->id) }}">Read More</a>
                            </p>
                            <span class="badge bg-success align-self-start">
                                Post: {{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('Y/m/d') }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Sidebar Arsip -->
        <div class="col-md-4">
            <h5>Arsip Berita</h5>
            @php
                $arsipTahun = \App\Models\Berita::selectRaw('YEAR(tanggal_publish) as tahun')
                    ->distinct()
                    ->orderByDesc('tahun')
                    ->pluck('tahun');
            @endphp
            <ul class="list-unstyled">
                @foreach ($arsipTahun as $t)
                    <li>
                        <a href="{{ route('berita.arsip', $t) }}" 
                           class="{{ (isset($tahun) && $tahun == $t) ? 'fw-bold text-success' : '' }}">
                            {{ $t }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $beritas->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@include('components.footer')
@endsection
