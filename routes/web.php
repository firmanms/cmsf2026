<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// Route::get('/', function () {
//     return view('theme.flexstart.layouts.app');
// });
Route::get('/', [ApiController::class, 'beranda']);
Route::get('/fetch-data', [ApiController::class, 'fetchData']);
Route::get('/beranda', [ApiController::class, 'beranda']);
Route::get('/page/statis/blog', [ApiController::class, 'blog']);
Route::get('/page/statis/blogkategori/{slug}', [ApiController::class, 'blogkategori']);
Route::get('/page/{slug}', [ApiController::class, 'singlepage'])->name('singlepage');
Route::get('/detailblog/{slug}', [ApiController::class, 'blogdetail'])->name('blogdetail');
Route::get('/page/statis/galeri', [ApiController::class, 'galeri']);
Route::get('/page/statis/galerivideo', [ApiController::class, 'galerivideo']);
Route::get('/detailgaleri/{slug}', [ApiController::class, 'galeridetail'])->name('galeridetail');
Route::get('/page/statis/layanan', [ApiController::class, 'layanan']);
Route::get('/page/statis/sarana', [ApiController::class, 'sarana']);
Route::get('/page/statis/pengaduan', [ApiController::class, 'pengaduan']);
Route::get('/page/statis/skm', [ApiController::class, 'skm']);
Route::get('/page/statis/produkhukum', [ApiController::class, 'produkhukum'])->name('produkhukum');
Route::get('/page/statis/dokumenupload', [ApiController::class, 'dokumenupload'])->name('dokumenupload');
Route::get('/page/statis/sejarah', [ApiController::class, 'sejarah'])->name('sejarah');
Route::get('/page/statis/visimisi', [ApiController::class, 'visimisi'])->name('visimisi');
Route::get('/page/statis/tupoksi', [ApiController::class, 'tupoksi'])->name('tupoksi');
Route::get('/page/statis/struktur', [ApiController::class, 'struktur'])->name('struktur');
Route::get('/page/statis/sambutan', [ApiController::class, 'sambutan'])->name('sambutan');