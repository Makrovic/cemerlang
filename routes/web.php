<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PtController;
use App\Http\Controllers\PkbmController;
use App\Http\Controllers\AdminController;

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

// organisasi mitra
Route::view('/organisasimitra', 'landing.organisasimitra')->name('organisasimitra');

// pkbm
Route::get('/pkbm', [PkbmController::class, 'home'])->name('pkbm.home');
Route::view('/pkbm/visimisi', 'pkbm.visimisi', ['unit' => 'pkbm'])->name('pkbm.visimisi');
Route::get('/pkbm/legalitas', [PkbmController::class, 'legalitas'])->name('pkbm.legalitas');
Route::view('/pkbm/fasilitas', 'pkbm.fasilitas', ['unit' => 'pkbm'])->name('pkbm.fasilitas');
Route::view('/pkbm/tim', 'pkbm.tim', ['unit' => 'pkbm'])->name('pkbm.tim');
Route::view('/pkbm/achievement', 'pkbm.achievement', ['unit' => 'pkbm'])->name('pkbm.achievement');
Route::get('/pkbm/testimoni', [PkbmController::class, 'testimoni'])->name('pkbm.testimoni');
Route::view('/pkbm/liputan', 'pkbm.liputan', ['unit' => 'pkbm'])->name('pkbm.liputan');
Route::view('/pkbm/infopendaftaran', 'pkbm.infopendaftaran', ['unit' => 'pkbm'])->name('pkbm.infopendaftaran');
Route::get('/pkbm/studibanding', [PkbmController::class, 'studiBanding'])->name('pkbm.studibanding');
Route::view('/pkbm/karyatulis', 'pkbm.karyatulis', ['unit' => 'pkbm'])->name('pkbm.karyatulis');

// program pkbm
Route::view('/pkbm/program', 'pkbm.program', ['unit' => 'pkbm', 'sec' => 'paketb'])->name('pkbm.program');
Route::view('/pkbm/program/paketc', 'pkbm.program', ['unit' => 'pkbm', 'sec' => 'paketc']);
Route::view('/pkbm/program/kuliahkerja', 'pkbm.program', ['unit' => 'pkbm', 'sec' => 'kuliahkerja']);
Route::view('/pkbm/program/kursus', 'pkbm.program', ['unit' => 'pkbm', 'sec' => 'kursus']);
Route::view('/pkbm/program/pemberdayaanperempuan', 'pkbm.program', ['unit' => 'pkbm', 'sec' => 'perempuan']);
Route::view('/pkbm/program/keaksaraan', 'pkbm.program', ['unit' => 'pkbm', 'sec' => 'keaksaraan']);

// bintang cemerlang
Route::view('/bintang', 'pt.home', ['unit' => 'pt']);
// carica
Route::get('/bintang/carica', [PtController::class, 'legalitas'])->name('bintang.carica');
Route::view('/bintang/carica/fasilitas', 'pt.carica', ['unit' => 'pt', 'sec' => 'fasilitas'])->name('bintang.carica.fasilitas');
Route::view('/bintang/carica/tentangproduk', 'pt.carica', ['unit' => 'pt', 'sec' => 'tentangproduk'])->name('bintang.carica.tentangproduk');
Route::view('/bintang/carica/ekspansi', 'pt.carica', ['unit' => 'pt', 'sec' => 'ekspansi'])->name('bintang.carica.ekspansi');
Route::view('/bintang/carica/achievement', 'pt.carica', ['unit' => 'pt', 'sec' => 'achievement'])->name('bintang.carica.achievement');
Route::view('/bintang/carica/expo', 'pt.carica', ['unit' => 'pt', 'sec' => 'expo'])->name('bintang.carica.expo');
// snack
Route::view('/bintang/snack', 'pt.snack', ['unit' => 'pt'])->name('bintang.snack');
// craft
Route::view('/bintang/craft', 'pt.craft', ['unit' => 'pt'])->name('bintang.craft');
// shop
Route::get('/bintang/shop',  [PtController::class, 'shop'])->name('bintang.shop');
Route::get('/bintang/shop/product/{produk}',  [PtController::class, 'produkDesc'])->name('bintang.shop.product.desc');
Route::get('/bintang/shop/cart',  [PtController::class, 'showCart'])->name('bintang.shop.cart');
Route::get('/bintang/shop/addtocart',  [PtController::class, 'addToCart'])->name('bintang.shop.cart.add');
Route::get('/bintang/shop/removefromcart/{produk}',  [PtController::class, 'removeFromCart'])->name('bintang.shop.cart.remove');
Route::post('/bintang/shop/updatecart',  [PtController::class, 'updateCart'])->name('bintang.shop.cart.update');
Route::get('/bintang/shop/clearcart',  [PtController::class, 'clearCart'])->name('bintang.shop.cart.clear');

Route::get('/bintang/shop/checkout',  [PtController::class, 'checkOut'])->name('bintang.shop.checkout');
Route::get('/bintang/shop/checkout/getcities/{province_id}',  [PtController::class, 'getCities'])->name('bintang.shop.checkout.getcities');
Route::post('/bintang/shop/checkout/couriercheck',  [PtController::class, 'courierCheck'])->name('bintang.shop.checkout.couriercheck');
Route::post('/bintang/shop/checkout',  [PtController::class, 'storeCheckOut'])->name('bintang.shop.checkout.confirm');

Route::get('/bintang/ongkir',  [PtController::class, 'costCheck'])->name('bintang.ongkir');



// contact
Route::view('/bintang/contact', 'pt.contact', ['unit' => 'pt'])->name('bintang.contact');

// admin

Route::get('/super', [AdminController::class, 'login'])->name('super.login');
Route::post('/super', [AdminController::class, 'authenticate'])->name('super.authenticate');

Route::middleware(['admin'])->group(function () {
    Route::get('/super/dashboard', [AdminController::class, 'dashboard'])->name('super.dashboard');
    Route::get('/super/produk', [AdminController::class, 'produk'])->name('super.produk');
    Route::view('/super/produk/add', 'admin.produk.add')->name('super.produk.add');
    Route::post('/super/produk/add', [AdminController::class, 'addProduk'])->name('super.produk.store');
    Route::get('/super/produk/edit/{produk}', [AdminController::class, 'editProduk'])->name('super.produk.edit');
    Route::put('/super/produk/edit/{produk}', [AdminController::class, 'updateProduk'])->name('super.produk.update');
    Route::get('/super/produk/remove/{produk}', [AdminController::class, 'removeProduk'])->name('super.produk.remove');
    Route::get('/super/order', [AdminController::class, 'order'])->name('super.order');
    Route::get('/super/order/edit/{order}', [AdminController::class, 'editOrder'])->name('super.order.edit');
    Route::put('/super/order/edit/{produk}', [AdminController::class, 'updateOrder'])->name('super.order.update');
    Route::get('/super/order/remove/{order}', [AdminController::class, 'removeOrder'])->name('super.order.remove');
    Route::get('/super/order/print/{order}', [AdminController::class, 'printAddress'])->name('super.order.printaddress');
    Route::get('/super/order/weeklyreport', [AdminController::class, 'weeklyReport'])->name('super.order.weeklyreport');
    Route::get('/super/order/monthlyreport', [AdminController::class, 'monthlyReport'])->name('super.order.monthlyreport');
    Route::get('/super/order/annualreport', [AdminController::class, 'annualReport'])->name('super.order.annualreport');
    Route::get('/super/logout',  [AdminController::class, 'logout'])->name('super.logout');
    Route::get('/cekcek',  [AdminController::class, 'checkAuth']);
});
