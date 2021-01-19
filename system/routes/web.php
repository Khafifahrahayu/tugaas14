<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ClientArtikelController;


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
    return view('welcome');
});

Route::get('/beranda',[HomeController:: class, 'showBeranda']);
Route::get('/beranda/{status}',[HomeController:: class, 'showBeranda']);
Route::get ('/index',[UserController:: class, 'homeIndex']);


Route::get('/test/{produk}/{hargaMin?}/{hargaMax?}',[HomeController:: class, 'test']);

Route::prefix('admin')->middleware('auth:')->group(function(){
    Route::post('produk/filter', [ProdukController:: class, 'filter']);
    Route::post('artikel/filter', [ArtikelController:: class, 'filter']);
    Route::resource('produk', ProdukController:: class);
     Route::resource('product', ProductController:: class);
    Route::resource('artikel', ArtikelController:: class);
    Route::resource('user', UserController:: class);
    Route::resource('kategori',KategoriController:: class);
});

Route::get('/filter',[UserController:: class, 'home']);



Route::get('/login',[AuthController:: class, 'showLogin'])->name('login');
Route::post('/login',[AuthController:: class, 'loginProcess']);
Route::get('/logout',[AuthController:: class, 'logout']);

Route::get('setting', [SettingController:: class, 'index']);
Route::post('setting', [SettingController:: class, 'store']);

Route::get('test-collection', [HomeController::class, 'testCollection']);
Route::get('test-ajax', [HomeController::class, 'testAjax']);


Route::get('/contact', function() {
	return view("contact");
});

Route::get('/register', function() {
	return view("register");
});

Route::get('/home',[ProdukController:: class, 'homeIndex']);

Route::get('/about', function () {
    return view("about");
});

Route::get('/contact', function () {
    return view("contact");
});

Route::get('/cart', function () {
    return view("cart");
});

Route::get('/shop', function () {
    return view("shop");
});

Route::get('/checkout', function () {
    return view("checkout");
});

Route::get('/shop-single', function () {
    return view("shop-single");
});

Route::get('/thankyou', function () {
    return view("thankyou");
});

Route::get('/promo', function () {
    return view('promo');
});


