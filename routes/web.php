<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::get('/admin-user', function () {
    return view('admin.user');
});
Route::get('/admin-review', function () {
    return view('admin.review');
});

Route::get('/admin-product', [ProductController::class, 'index']);


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::get('/', function () {
    return view('index');
})->name('index'); 

Route::get('/loginRegister', function () {
    return view('loginRegister');
});



Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/caraPesan', function () {
    return view('caraPesan');
});

Route::get('/informasiToko', function () {
    return view('informasiToko');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/statusPengerjaan', function () {
    return view('statusPengerjaan');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/customFurniture', function () {
    return view('customFurniture');
});
Route::get('/furnitureSet', function () {
    return view('furnitureSet');
});
Route::get('/perawatanFurniture', function () {
    return view('perawatanFurniture');
});
Route::get('/promo', function () {
    return view('promo');
});
Route::get('/testimoni', function () {
    return view('testimoni');
});
Route::get('/page2', function () {
    return view('customFurniture.page2');
});





