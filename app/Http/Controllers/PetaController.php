<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function index()
    {
        // Data lokasi statis tanpa database
        $lokasi = [
            [
                'nama' => 'Pintu Masuk Utama',
                'lat' => -7.92004,
                'lng' => 114.38787,
                'deskripsi' => 'Gerbang utama menuju kawasan Taman Nasional Baluran.',
                'kategori' => 'Pos Jaga',
                'foto' => 'images/objek/tiket.jpg'
            ],
            [
                'nama' => 'Savana Bekol',
                'lat' => -7.83929,
                'lng' => 114.43996,
                'deskripsi' => 'Padang savana yang terkenal dengan pemandangan seperti di Afrika.',
                'kategori' => 'Savana',
                'foto' => 'images/savana.jpg'
            ],
            [
                'nama' => 'Menara Pandang',
                'lat' => -7.83808,
                'lng' => 114.44017,
                'deskripsi' => 'Spot terbaik untuk melihat satwa liar dan pemandangan savana dari ketinggian.',
                'kategori' => 'Fasilitas',
                'foto' => 'images/objek/menara.jpg'
            ],
            [
                'nama' => 'Pantai Bama',
                'lat' => -7.84278,
                'lng' => 114.46189,
                'deskripsi' => 'Pantai indah dengan hutan mangrove dan pemandangan laut yang tenang.',
                'kategori' => 'Pantai',
                'foto' => 'images/objek/bama.jpg'
            ],
        ];

        return view('peta.index', compact('lokasi'));
    }
}