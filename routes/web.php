<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Models\Product as ProductModel; // 👈 kasih alias "ProductModel"
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;

Route::middleware('auth')->group(function () {
    
    // Semua rute di dalam group ini hanya untuk pengguna terautentikasi
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth')->name('admin.dashboard');
    // Tambahkan rute terproteksi lain di sini...
    Route::get('/profile/show', [UserController::class, 'showProfile'])->name('profile.show');
    Route::get('/profile', [UserController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile', [UserController::class, 'updateProfile'])->name('profile.update');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // penting
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');

    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('password.request');
    
    // Menambahkan route untuk mengirimkan email reset password
    Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
    
    Route::get('/reset-password/{token}', function ($token) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');
    
    // Proses reset password setelah form di-submit
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
    

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
// Untuk "Beli Sekarang" 1 produk
Route::post('/invoice', [UserProductController::class, 'invoice'])->name('invoice');

// Untuk "Checkout Keranjang"
Route::get('/checkout', [UserProductController::class, 'checkoutCart'])->name('cart.checkout');

Route::get('/bayar_invoice', function () {
    return view('user.upload_bukti');
})->name('bayar.invoice');
Route::post('/bayar-invoice', [UserProductController::class, 'bayarInvoice'])->name('userproduct.bayarInvoice');

Route::post('/upload-bukti', [UserProductController::class, 'uploadBukti'])->name('user.uploadBukti');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/payment-proofs', [OrderController::class, 'showPaymentProofs'])->name('payment.proofs');
    Route::patch('/payment/{order}/verify', [OrderController::class, 'verify'])->name('payment.verify');
    Route::patch('/payment/{order}/reject', [OrderController::class, 'reject'])->name('payment.reject');
});

Route::view('/admin/kelola-custom', 'admin.kelolacustomfurniture');

Route::resource('products', ProductController::class)->middleware('auth');// Kalo buat sekaligus nambah index,create,store,edit,update,show,delete, tetapi harus ada 6 6 nya kalo misalnya di tambah yang lain gpp yang penting ada 6 6 nya itu
Route::resource('produk', UserProductController::class);// Kalo buat sekaligus nambah index,create,store,edit,update,show,delete, tetapi harus ada 6 6 nya kalo misalnya di tambah yang lain gpp yang penting ada 6 6 nya itu







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
    return view('user.kontak');
})->name('kontak');
Route::get('/statusPembayaran', function () {
    return view('user.statusPembayaran');
})->name('statusPembayaran');
// Route::get('/produk', function () {
//     return view('produk');
// });
Route::get('/detailProduk', function () {
    return view('detailProduk');
});
Route::get('/customFurniture', function () {
    return view('user.customFurniture');
})->name('customFurniture');

Route::get('/furnitureSet', function () {
    return view('user.furnitureSet');
})->name('furnitureSet');

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

Route::get('/home', [UserProductController::class, 'index'])->name('user.home');

Route::get('/formcustom', function () {
    return view('user.formcustom');
})->name('formcustom');

Route::get('/keranjang', function () {
    return view('user.keranjang');
})->name('user.keranjang');

Route::get('/', function () {
    $discountedProducts = ProductModel::with('images')
        ->where('discount', '>', 0)
        ->get();

    return view('user.home', compact('discountedProducts'));
})->name('index');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{orderProductId}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');