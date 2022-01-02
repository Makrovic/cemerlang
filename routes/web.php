<?php

use App\Http\Controllers\AdminController;
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
// landing page
Route::view('/', 'landing.welcome')->name('landing');

//pkbm
Route::get('/pkbm', [PkbmController::class, 'home'])->name('pkbm.home');
Route::view('/pkbm/visimisi', 'pkbm.visimisi', ['unit' => 'pkbm'])->name('pkbm.visimisi');
Route::get('/pkbm/legalitas', [PkbmController::class, 'legalitas'])->name('pkbm.legalitas');
Route::view('/pkbm/fasilitas', 'pkbm.fasilitas', ['unit' => 'pkbm'])->name('pkbm.fasilitas');
Route::view('/pkbm/tim', 'pkbm.tim', ['unit' => 'pkbm'])->name('pkbm.tim');
Route::view('/pkbm/achievement', 'pkbm.achievement', ['unit' => 'pkbm'])->name('pkbm.achievement');
Route::get('/pkbm/testimoni', [PkbmController::class, 'testimoni'])->name('pkbm.testimoni');
Route::view('/pkbm/infopendaftaran', 'pkbm.infopendaftaran', ['unit' => 'pkbm'])->name('pkbm.infopendaftaran');
Route::get('/pkbm/studibanding', [PkbmController::class, 'studibanding'])->name('pkbm.studibanding');
//program pkbm
Route::view('/pkbm/program', 'pkbm.program', ['unit' => 'pkbm','sec' => 'paketb'])->name('pkbm.program');
Route::view('/pkbm/program/paketc', 'pkbm.program', ['unit' => 'pkbm','sec' => 'paketc']);
Route::view('/pkbm/program/kuliahkerja', 'pkbm.program', ['unit' => 'pkbm','sec' => 'kuliahkerja']);
Route::view('/pkbm/program/kursus', 'pkbm.program', ['unit' => 'pkbm','sec' => 'kursus']);
Route::view('/pkbm/program/pemberdayaanperempuan', 'pkbm.program', ['unit' => 'pkbm','sec' => 'perempuan']);

//bintang cemerlang
Route::view('/bintang', 'pt.home', ['unit' => 'pt']);
// carica
Route::get('/bintang/carica', [PtController::class, 'carica'])->name('bintang.carica');
Route::get('/bintang/carica/legalitas', [PtController::class, 'legalitas'])->name('bintang.carica.legalitas');
Route::view('/bintang/carica/fasilitas', 'pt.carica', ['unit' => 'pt','sec' => 'fasilitas']);
Route::view('/bintang/carica/tentangproduk', 'pt.carica', ['unit' => 'pt','sec' => 'tentangproduk']);
Route::view('/bintang/carica/ekspansi', 'pt.carica', ['unit' => 'pt','sec' => 'ekspansi']);
Route::view('/bintang/carica/pencapaian', 'pt.carica', ['unit' => 'pt','sec' => 'pencapaian']);
Route::view('/bintang/carica/galeri', 'pt.carica', ['unit' => 'pt','sec' => 'galeri']);
// snack
Route::view('/bintang/snack', 'pt.snack', ['unit' => 'pt'])->name('bintang.snack');
// craft
Route::view('/bintang/craft', 'pt.craft', ['unit' => 'pt'])->name('bintang.craft');
// shop
Route::get('/bintang/shop',  [PtController::class, 'shop'])->name('bintang.shop');
Route::get('/bintang/shop/{produk}',  [PtController::class, 'produkdesc'])->name('bintang.shop.desc');
// contact
Route::view('/bintang/contact', 'pt.contact', ['unit' => 'pt'])->name('bintang.contact');

// admin
Route::view( '/super', 'admin.login')->name('super.login');
Route::post('/super', [AdminController::class, 'authenticate'])->name('super.authenticate');

Route::get('/super/logout',  [PtController::class, 'shop'])->name('bintang.carica.shop');