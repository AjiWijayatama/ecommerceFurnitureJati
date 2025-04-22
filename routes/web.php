<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Guest Routes (Belum Login)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Penting
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

/*
|--------------------------------------------------------------------------
| Public Routes (Tanpa Login)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('user.home');
})->name('index');

Route::get('/produk', [UserProductController::class, 'index'])->name('produk.index');
Route::get('/produk/{produk}', [UserProductController::class, 'show'])->name('produk.show');

/*
|--------------------------------------------------------------------------
| Authenticated Routes (Setelah Login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    /*
    |--------------------------------------------------------------------------
    | Admin Area (Prefix: /admin)
    |--------------------------------------------------------------------------
    */
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/', function () {
            return view('layouts.admin');
        })->name('index');
        Route::get('/user', function () {
            return view('admin.user');
        })->name('user');
        Route::get('/review', function () {
            return view('admin.review');
        })->name('review');

        // Produk - Admin (ProductController)
        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
        Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
        Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    });

    /*
    |--------------------------------------------------------------------------
    | Produk - User (UserProductController) - Akses Setelah Login (Ex: Beli)
    |--------------------------------------------------------------------------
    */
    Route::get('/produk/create', [UserProductController::class, 'create'])->name('produk.create');
    Route::post('/produk', [UserProductController::class, 'store'])->name('produk.store');
    Route::get('/produk/{produk}/edit', [UserProductController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{produk}', [UserProductController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{produk}', [UserProductController::class, 'destroy'])->name('produk.destroy');

    /*
    |--------------------------------------------------------------------------
    | Fitur Tambahan
    |--------------------------------------------------------------------------
    */
    Route::get('/invoiceCustomer', [UserProductController::class, 'invoice'])->name('user.invoice');
    Route::post('/invoice', [UserProductController::class, 'invoice'])->name('invoice');
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