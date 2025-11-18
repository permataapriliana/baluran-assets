@extends('layouts.main')

@section('title', 'Daftar Galeri')

@section('content')

<style>
    .galeri-wrapper {
        margin-top: 20px;
    }

    .galeri-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 12px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.08);
        margin-bottom: 30px;
        overflow: hidden;
    }

    .galeri-header {
        background-color: #006644;
        color: #fff;
        padding: 12px 20px;
        font-size: 1.25rem;
        font-weight: bold;
    }

    .galeri-table {
        width: 100%;
        border-collapse: collapse;
    }

    .galeri-table th, .galeri-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #ddd;
        text-align: center;
        vertical-align: middle;
    }

    .galeri-table th {
        background-color: #007b5e;
        color: white;
        font-weight: bold;
    }

    .galeri-table td img {
        width: 100px;
        border-radius: 10px;
        object-fit: cover;
    }

    .action-buttons a,
    .action-buttons form button {
        margin: 0 3px;
        padding: 6px 10px;
        font-size: 0.875rem;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .btn-edit {
        background-color: #ffc107;
        color: #000;
    }

    .btn-delete {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-add {
        background-color: #007b5e;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 8px;
        font-size: 0.95rem;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 15px;
    }

    .btn-add:hover {
        background-color: #005f47;
    }

    .no-data {
        text-align: center;
        padding: 16px;
        color: #777;
        font-style: italic;
    }
</style>

<div class="container">
    <h2 class="text-2xl font-bold mb-4">Daftar Galeri</h2>

    <a href="{{ route('admin.galeri.create') }}" class="btn-add">+ Tambah Galeri</a>

    @foreach (['Flora', 'Fauna', 'Kegiatan'] as $kategori)
        <div class="galeri-wrapper">
            <div class="galeri-card">
                <div class="galeri-header">{{ $kategori }}</div>
                <table class="galeri-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @forelse($galeris->where('kategori', $kategori) as $galeri)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $galeri->judul }}</td>
                                <td>{{ Str::limit($galeri->deskripsi, 80) }}</td>
                                <td><img src="{{ asset('images/galeri/' . $galeri->gambar) }}" alt="Gambar"></td>
                                <td class="action-buttons">
                                    <a href="{{ route('admin.galeri.edit', $galeri->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('admin.galeri.destroy', $galeri->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="no-data">Belum ada data galeri untuk kategori ini.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>

@endsection
