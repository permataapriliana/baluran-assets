<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Berita;
use App\Models\Faq;
use App\Models\Galeri;
use App\Models\Announcements; // Tambahkan ini
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 2 berita terbaru.
        $latestNews = Berita::latest()->take(2)->get();
        
        // Ambil event terdekat.
        $event = Event::where('tanggal', '>=', now())
                    ->orderBy('tanggal', 'asc')
                    ->first();

        // Kalau tidak ada event yang akan datang, ambil event terbaru.
        if (!$event) {
            $event = Event::orderBy('tanggal', 'desc')->first();
        }
        
        // Ambil publikasi terbaru.
        $latestPublication = Announcement::latest()->first(); 
        
        // Ambil 5 pertanyaan FAQ terbaru.
        $faqs = Faq::latest()->take(5)->get();
        
        // Ambil 5 gambar galeri terbaru.
        $galeris = Galeri::latest()->take(5)->get();
        
        // Ambil 1 gambar galeri terbaru (untuk tampilan hero/terbaru).
        $galeriTerbaru = Galeri::latest()->first();

        // Data gambar header statis.
        $headerImages = [
            'header1.jpeg',
            'header2.jpg',
            'header3.jpg',
            'header4.jpg',
        ];

        // Data titik lokasi Taman Nasional Baluran.
        $lokasi = [
            'nama' => 'Taman Nasional Baluran',
            'lat' => -7.8375, // contoh latitude
            'lng' => 114.3675 // contoh longitude
        ];

        // ID Channel YouTube Baluran.
        $channelId = 'UCnZ_B_Pi___coxOm6SLhnmg';
        $rssUrl = "https://www.youtube.com/feeds/videos.xml?channel_id={$channelId}";

        $response = Http::get($rssUrl);
        $videos = [];

        if ($response->successful()) {
            $xml = simplexml_load_string($response->body());

            foreach ($xml->entry as $entry) {
                $videoId = (string) $entry->children('yt', true)->videoId;
                $videos[] = [
                    'title' => (string) $entry->title,
                    'videoId' => $videoId
                ];
            }

            // Ambil hanya 2 video terbaru.
            $videos = array_slice($videos, 0, 2);
        }

        return view('home', compact(
            'event', 
            'latestNews', // Variabel ini sekarang ada
            'latestPublication', // Tambahkan ini
            'faqs', 
            'headerImages', 
            'galeriTerbaru', 
            'galeris', 
            'lokasi', 
            'videos'
        ));
    }
}