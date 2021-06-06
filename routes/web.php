<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArsipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\Pemenang;
use App\Http\Controllers\PemenangController;

// session()->put('tahun', '2021');


Route::get('/', BerandaController::class);
// $tahun = Session::get('tahun');
// Route::get($tahun, BerandaController::class);
Route::get('/galeri/{tahun}', [BerandaController::class, 'galeri']);

Route::get('/produk/{kategori_produk:id_kategori}', [KategoriProdukController::class, 'index']);
Route::get('/detailProdukTim/{tim:id_tim}', [ProdukController::class, 'detailProdukTim']);

Route::get('/pemenang', PemenangController::class);
Route::get('/pemenang/personal/{peringkatJuara:id_kategori_pemenang}', [PemenangController::class, 'peringkatJuaraMhs']);
Route::get('/pemenang/tim/{peringkatJuara:id_kategori_pemenang}', [PemenangController::class, 'peringkatJuaraTim']);

Route::get('/arsip', ArsipController::class);
Route::get('/arsip/{tahun}', [ArsipController::class, 'tahun']);

Route::get('admin', AdminController::class);
Route::post('admin/login', [AdminController::class, 'loginAuth']);

Route::post('admin/create', [AdminController::class, 'create']);
