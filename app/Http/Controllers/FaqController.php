<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // Bisa diganti ambil dari DB, ini contoh array statis
        $sections = [
            [
                'id' => 'tentang-baluran',
                'title' => 'Tentang Baluran',
                'content' => 'Taman Nasional Baluran adalah kawasan konservasi dengan savana terluas di Jawa Timur. Dikenal sebagai "Africa van Java".'
            ],
            [
                'id' => 'lokasi-akses',
                'title' => 'Lokasi & Akses',
                'content' => 'Terletak di Kabupaten Situbondo, dapat diakses melalui jalur pantura Surabaya–Banyuwangi, dekat dengan Pelabuhan Ketapang.'
            ],
            [
                'id' => 'objek-satwa',
                'title' => 'Objek Wisata & Satwa Liar',
                'content' => 'Savana Bekol, Pantai Bama, hutan mangrove, serta satwa seperti banteng, merak, rusa, dan berbagai burung endemik.'
            ],
        ];

        return view('faq.index', compact('sections'));
    }
}
