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
    return view('landing/welcome');
});
Route::get('/pkbm', function () {
    return view('pkbm/home', ['site' => 'pkbm']);
});
Route::get('/bintang', function () {
    return view('pt/home', ['site' => 'pt']);
});