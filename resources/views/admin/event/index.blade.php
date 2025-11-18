@extends('layouts.main')

@section('title', 'Daftar Event')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Daftar Event</h2>
        <a href="{{ route('event.create') }}" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">+ Tambah Event</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full table-auto text-sm">
        <thead class="bg-green-800 text-white">
            <tr>
                <th class="px-4 py-2 text-left">Judul</th>
                <th class="px-4 py-2 text-left">Tanggal</th>
                <th class="px-4 py-2">Gambar</th>
                <th class="px-4 py-2 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr class="border-b">
                <td class="px-4 py-2">{{ $event->judul }}</td>
                <td class="px-4 py-2">{{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</td>
                <td class="px-4 py-2 text-center">
                    @if($event->gambar)
                        <img src="{{ asset('storage/' . $event->gambar) }}" class="w-16 h-12 object-cover rounded mx-auto">
                    @else
                        -
                    @endif
                </td>
                <td class="px-4 py-2 text-center space-x-2">
                    <a href="{{ route('event.edit', $event->id) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('event.destroy', $event->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus event ini?')" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
