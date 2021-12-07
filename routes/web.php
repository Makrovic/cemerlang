<?php

use Illuminate\Support\Facades\Route;

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
    return view('pkbm.home', ['site' => 'pkbm']);
});
Route::get('/pkbm/visimisi', function () {
    return view('pkbm.visimisi', ['site' => 'pkbm']);
});

Route::get('/pkbm/program', function () {
    return view('pkbm.program', ['site' => 'pkbm','sec' => 'paketb']);
});
Route::get('/pkbm/program/paketc', function () {
    return view('pkbm.program', ['site' => 'pkbm','sec' => 'paketc']);
});
Route::get('/pkbm/program/kuliahkerja', function () {
    return view('pkbm.program', ['site' => 'pkbm','sec' => 'kuliahkerja']);
});
Route::get('/pkbm/program/kursus', function () {
    return view('pkbm.program', ['site' => 'pkbm','sec' => 'kursus']);
});
Route::get('/pkbm/program/perempuan', function () {
    return view('pkbm.program', ['site' => 'pkbm','sec' => 'perempuan']);
});

Route::get('/pkbm/legalitas', function () {
    return view('pkbm.legalitas', ['site' => 'pkbm']);
});
Route::get('/pkbm/fasilitas', function () {
    return view('pkbm.fasilitas', ['site' => 'pkbm']);
});
Route::get('/pkbm/tim', function () {
    return view('pkbm.tim', ['site' => 'pkbm']);
});
Route::get('/pkbm/achievement', function () {
    return view('pkbm.achievement', ['site' => 'pkbm']);
});
Route::get('/pkbm/testimoni', function () {
    return view('pkbm.testimoni', ['site' => 'pkbm']);
});

Route::get('/bintang', function () {
    return view('pt.home', ['site' => 'pt']);
});