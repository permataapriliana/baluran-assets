<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'question' => 'Apa itu Taman Nasional Baluran?',
            'answer' => 'Taman Nasional Baluran adalah kawasan konservasi alam yang terletak di Kabupaten Situbondo dan Banyuwangi, Jawa Timur. Kawasan ini dikenal dengan sebutan "Africa van Java" karena memiliki savana luas, berbagai satwa liar, hutan mangrove, hutan musim, dan pemandangan Gunung Baluran sebagai latar belakangnya.',
        ]);
        Faq::create([
            'question' => 'Daya tarik utama Taman Nasional Baluran?',
            'answer' => 'Daya tarik utama Taman Nasional Baluran meliputi Savana Bekol, Pantai Bama, dan berbagai jenis satwa liar seperti banteng, rusa, merak, dan monyet ekor panjang.',
        ]);
        Faq::create([
            'question' => 'Kapan jam operasional Taman Nasional Baluran?',
            'answer' => 'Taman Nasional Baluran umumnya buka setiap hari mulai pukul 07.30 WIB hingga 16.00 WIB. Jam operasional dapat berubah sewaktu-waktu tergantung kebijakan pengelola atau kondisi cuaca.',
        ]);
            Faq::create([
            'question' => 'Jenis kendaraan apa yang di perbolehkan masuk?',
            'answer' => 'Kendaraan roda dua dan roda empat pribadi diizinkan masuk ke kawasan utama. Namun, untuk menjelajahi area savana dan rute tertentu, disarankan menggunakan kendaraan sewaan seperti **trooper** yang disediakan oleh pengelola untuk keamanan dan kenyamanan.',
        ]);
        Faq::create([
            'question' => 'Satwa apa saja yang dapat ditemui di Baluran?',
            'answer' => 'Baluran adalah rumah bagi berbagai satwa liar, termasuk rusa timor, banteng jawa, kerbau liar, ajak (anjing hutan), dan burung merak hijau. Anda bisa menjumpai mereka saat berkunjung ke area savana.',
        ]);
        // Add more FAQs as needed
    }
}
