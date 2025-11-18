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
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->nullable(); // Hotel, Homestay, Camp, dll
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->unsignedInteger('price_range_min')->nullable();
            $table->unsignedInteger('price_range_max')->nullable();
            $table->decimal('distance_km',5,2)->nullable(); // jarak dari gerbang / pusat
            $table->decimal('lat',9,6)->nullable();
            $table->decimal('lng',9,6)->nullable();
            $table->json('amenities')->nullable(); // {wifi:true,parkir:true,ac:true}
            $table->string('photo_path')->nullable();
            $table->enum('status',["draft","published"])->default('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accommodations');
    }
};
