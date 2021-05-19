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

Route::get('/', BerandaController::class);
// Route::get('galeri', [BerandaController::class, 'galeri']);
Route::get('galeri/{tahun}', [BerandaController::class, 'galeri']);

Route::get('produk/{kategori_produk:id_kategori}', [KategoriProdukController::class, 'index']);
Route::get('detailProdukTim/{tim:id_tim}', [ProdukController::class, 'detailProdukTim']);

Route::get('pemenang', PemenangController::class);
Route::get('pemenang/a', [PemenangController::class, 'peringkatJuara']);

Route::get('arsip', ArsipController::class);

Route::get('faq', FAQController::class);

Route::get('admin', AdminController::class);
Route::post('admin/login', [AdminController::class, 'loginAuth']);

Route::post('admin/create', [AdminController::class, 'create']);
