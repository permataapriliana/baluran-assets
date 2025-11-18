<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagePathToAnnouncementsTable extends Migration
{
    public function up()
    {
        Schema::table('announcements', function (Blueprint $table) {
            // Menambahkan kolom 'image_path' dan membuatnya bisa kosong
            $table->string('image_path')->nullable()->after('file_path');
        });
    }

    public function down()
    {
        Schema::table('announcements', function (Blueprint $table) {
            // Menghapus kolom 'image_path' jika rollback
            $table->dropColumn('image_path');
        });
    }
}