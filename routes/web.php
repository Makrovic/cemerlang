<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PtController;
use App\Http\Controllers\PkbmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing.welcome');
});
Route::get('/pkbm', function () {
    return view('pkbm.home', ['unit' => 'pkbm']);
});
Route::get('/pkbm/visimisi', function () {
    return view('pkbm.visimisi', ['unit' => 'pkbm']);
});

Route::get('/pkbm/program', function () {
    return view('pkbm.program', ['unit' => 'pkbm','sec' => 'paketb']);
});
Route::get('/pkbm/program/paketc', function () {
    return view('pkbm.program', ['unit' => 'pkbm','sec' => 'paketc']);
});
Route::get('/pkbm/program/kuliahkerja', function () {
    return view('pkbm.program', ['unit' => 'pkbm','sec' => 'kuliahkerja']);
});
Route::get('/pkbm/program/kursus', function () {
    return view('pkbm.program', ['unit' => 'pkbm','sec' => 'kursus']);
});
Route::get('/pkbm/program/pemberdayaanperempuan', function () {
    return view('pkbm.program', ['unit' => 'pkbm','sec' => 'perempuan']);
});

Route::get('/pkbm/legalitas', [PkbmController::class, 'legalitas'])->name('pkbm.legalitas');
Route::get('/pkbm/fasilitas', function () {
    return view('pkbm.fasilitas', ['unit' => 'pkbm']);
});
Route::get('/pkbm/tim', function () {
    return view('pkbm.tim', ['unit' => 'pkbm']);
});
Route::get('/pkbm/achievement', function () {
    return view('pkbm.achievement', ['unit' => 'pkbm']);
});
Route::get('/pkbm/testimoni', [PkbmController::class, 'testimoni'])->name('pkbm.testimoni');
Route::get('/pkbm/infopendaftaran', function () {
    return view('pkbm.infopendaftaran', ['unit' => 'pkbm']);
});
Route::get('/pkbm/studibanding', function () {
    return view('pkbm.studibanding', ['unit' => 'pkbm']);
});


Route::get('/bintang', function () {
    return view('pt.home', ['unit' => 'pt']);
});
Route::get('/bintang/carica', [PtController::class, 'carica'])->name('bintang.carica');
Route::get('/bintang/carica/legalitas', [PtController::class, 'legalitas'])->name('bintang.carica.legalitas');
Route::get('/bintang/carica/fasilitas', function () {
    return view('pt.carica', ['unit' => 'pt','sec' => 'fasilitas']);
});
Route::get('/bintang/carica/tentangproduk', function () {
    return view('pt.carica', ['unit' => 'pt','sec' => 'tentangproduk']);
});
Route::get('/bintang/carica/ekspansi', function () {
    return view('pt.carica', ['unit' => 'pt','sec' => 'ekspansi']);
});
Route::get('/bintang/carica/pencapaian', function () {
    return view('pt.carica', ['unit' => 'pt','sec' => 'pencapaian']);
});
Route::get('/bintang/carica/galeri', function () {
    return view('pt.carica', ['unit' => 'pt','sec' => 'galeri']);
});

Route::get('/bintang/snack', function () {
    return view('pt.snack', ['unit' => 'pt']);
});

Route::get('/bintang/craft', function () {
    return view('pt.craft', ['unit' => 'pt']);
});

Route::get('/bintang/shop', function () {
    return view('pt.shop', ['unit' => 'pt']);
});

Route::get('/bintang/contact', function () {
    return view('pt.contact', ['unit' => 'pt']);
});