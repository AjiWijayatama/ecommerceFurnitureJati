<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\AdminDashboardController;

Route::middleware('auth')->group(function () {
    // Semua rute di dalam group ini hanya untuk pengguna terautentikasi
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth')->name('admin.dashboard');
    // Tambahkan rute terproteksi lain di sini...
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // penting
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::get('/login-form', [AuthController::class, 'showLoginForm'])->name('login.form');

// Rute untuk halaman dashboard admin
Route::middleware(['auth'])->get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::get('/admin-user', function () {
    return view('admin.user');
});
Route::get('/admin-review', function () {
    return view('admin.review');
});
Route::get('/invoiceCustomer', [UserProductController::class, 'invoice'])->name('user.invoice');
Route::post('/invoice', [UserProductController::class, 'invoice'])->name('invoice');


Route::resource('products', ProductController::class)->middleware('auth');// Kalo buat sekaligus nambah index,create,store,edit,update,show,delete, tetapi harus ada 6 6 nya kalo misalnya di tambah yang lain gpp yang penting ada 6 6 nya itu
Route::resource('produk', UserProductController::class);// Kalo buat sekaligus nambah index,create,store,edit,update,show,delete, tetapi harus ada 6 6 nya kalo misalnya di tambah yang lain gpp yang penting ada 6 6 nya itu

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('user.home');
})->name('index'); 

Route::get('/loginRegister', function () {
    return view('loginRegister');
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
// Route::get('/produk', function () {
//     return view('produk');
// });
Route::get('/detailProduk', function () {
    return view('detailProduk');
});
Route::get('/customFurniture', function () {
    return view('user.customFurniture');
});
Route::get('/furnitureSet', function () {
    return view('user.furnitureSet');
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