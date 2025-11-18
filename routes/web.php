<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Http\Middleware\SetLocale;
use App\Models\Berita;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\GalleryItemController;
use App\Http\Controllers\PublikasiController;




// Protected Routes
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Berita (CRUD)
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    // Admin Event (opsional)
    Route::resource('event', EventController::class);
    Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('event', EventController::class);
    });
    Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
    Route::put('/event/{id}', [EventController::class, 'update'])->name('event.update');

    // Admin Galeri
    Route::prefix('admin')->name('admin.')->group(function () {

        // Galeri Admin
        Route::get('/galeri', [GaleriController::class, 'adminIndex'])->name('galeri.index');
        Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
        Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');

        // Tambahan untuk Edit, Update, Delete
        Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
        Route::put('/galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');
        Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');
    });

    // Admin pengumuman
    Route::resource('announcements', AnnouncementController::class);


});


// Locale Group
Route::middleware(['web', SetLocale::class])->group(function () {

    // Home page pakai controller
    Route::get('/', [HomeController::class, 'index'])->name('home');
    

    // Kontak
    Route::get('/kontak', fn () => view('contact')); 
    Route::get('/tes', fn () => view('tes')); 

    // Ganti bahasa
    Route::get('/lang/{lang}', function ($lang) {
        session(['locale' => $lang]);
        return redirect()->back();
    });

    // Cek terjemahan
    Route::get('/cek', function () {
        return [
            'locale_session' => session('locale'),
            'locale_app' => app()->getLocale(),
            'login_text' => __('messages.login'),
        ];
    });

    // Static pages
    Route::get('/about', fn () => view('about'));
    Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
    Route::get('/tiket', fn () => view('tiket'));

    // Berita publik
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
    Route::get('/listberita', [BeritaController::class, 'listberita'])->name('berita.listberita');
    Route::get('/berita/tahun/{tahun}', [BeritaController::class, 'arsip'])->name('berita.arsip');

    // Event publik (jika diperlukan)
    Route::resource('event', EventController::class)->only(['index', 'show']);
    Route::get('/listevent', [EventController::class, 'listeven'])->name('event.listeven');
    Route::get('/listevent/arsip/{tahun}', [EventController::class, 'arsipListeven'])->name('event.listeven.arsip');

    // Galeri
    // Route::get('/faq', [FaqController::class, 'faq.index'])->name('faq.index');
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::get('/peta', [PetaController::class, 'index'])->name('peta.index');

    // FAQ
    Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
    Route::get('/faq/tentang', fn() => view('faq.partials.tentang'));
    Route::get('/faq/lokasi', fn() => view('faq.partials.lokasi'));
    Route::get('/faq/objek', fn() => view('faq.partials.objek'));
    Route::get('/faq/penginapan', fn() => view('faq.partials.penginapan'));
    Route::get('/faq/aturan', fn() => view('faq.partials.aturan'));
    Route::get('/faq/simaksi', fn() => view('faq.partials.simaksi'));
    Route::get('/faq/publikasi', [AnnouncementController::class, 'publicIndex'])->name('faq.partials.publikasi');
    Route::get('/admin/announcements/{announcement}/show-image', [AnnouncementController::class, 'showImage'])->name('announcements.showImage');

    // Publikasi Home
    Route::get('/publikasi', [AnnouncementController::class, 'publicIndexHome'])->name('publikasi');
});

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


use App\Http\Controllers\PostController;

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');


