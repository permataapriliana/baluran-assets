<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gallery_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category')->nullable(); // Kolom untuk kategori seperti 'Peta' atau 'Poster'
            $table->string('image_path'); // Kolom untuk menyimpan path gambar
            $table->text('description')->nullable(); // Kolom deskripsi, bisa kosong.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_items');
    }
};
