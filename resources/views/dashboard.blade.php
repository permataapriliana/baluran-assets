@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold mb-2">Input Berita</h3>
        <p class="text-sm text-gray-600">Kelola berita dan pengumuman terbaru.</p>
        <a href="/berita" class="mt-3 inline-block bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Tambah Berita</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold mb-2">Pengumuman</h3>
        <p class="text-sm text-gray-600">Tambah pengumuman dan info jangka panjang</p>
        <a href="/announcements" class="mt-3 inline-block bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Tambah Pengumuman</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold mb-2">Event Baluran</h3>
        <p class="text-sm text-gray-600">Kelola event dan agenda lapangan.</p>
        <a href="/event" class="mt-3 inline-block bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Tambah Event</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold mb-2">Galeri Flora & Fauna</h3>
        <p class="text-sm text-gray-600">Upload foto dokumentasi alam Baluran.</p>
        <a href="{{ route('admin.galeri.index') }}" class="mt-3 inline-block bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Tambah Foto</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6 col-span-1 md:col-span-2">
        <h3 class="text-lg font-semibold mb-4">Grafik Pengunjung / Minggu</h3>
        <canvas id="visitorChart" height="100"></canvas>
    </div>

    <div class="bg-white rounded-lg shadow p-6 col-span-1 md:col-span-2">
        <h3 class="text-lg font-semibold mb-4">Grafik Kejadian Kebakaran</h3>
        <canvas id="fireChart" height="100"></canvas>
    </div>

</div>

<script>
const visitorChart = new Chart(document.getElementById('visitorChart'), {
    type: 'line',
    data: {
        labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
        datasets: [{
            label: 'Pengunjung',
            data: [15, 20, 35, 40, 28, 50, 60],
            borderColor: 'green',
            backgroundColor: 'rgba(16, 185, 129, 0.2)',
            fill: true,
            tension: 0.4
        }]
    }
});

const fireChart = new Chart(document.getElementById('fireChart'), {
    type: 'bar',
    data: {
        labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
        datasets: [{
            label: 'Kebakaran',
            data: [0, 1, 0, 2, 0, 1, 0],
            backgroundColor: 'rgba(239, 68, 68, 0.8)'
        }]
    }
});
</script>
@endsection
