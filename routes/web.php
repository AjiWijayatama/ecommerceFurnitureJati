<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/katalog', function () {
    return view('katalog');
});

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