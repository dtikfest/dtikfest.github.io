<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArsipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\Pemenang;
use App\Http\Controllers\PemenangController;

// session()->put('tahun', '2021');


Route::get('/', MainController::class);
// $tahun = Session::get('tahun');
Route::get('/galeri/{tahun}', [MainController::class, 'galeri']);

Route::get('/produk/{kategori_produk:id_kategori}', [ProdukController::class, 'index']);
Route::get('/detailProdukTim/{tim:id_tim}', [ProdukController::class, 'detailProdukTim']);

Route::get('/pemenang', PemenangController::class);
Route::get('/pemenang/personal/{peringkatJuara:id_kategori_pemenang}', [PemenangController::class, 'peringkatJuaraMhs']);
Route::get('/pemenang/tim/{peringkatJuara:id_kategori_pemenang}', [PemenangController::class, 'peringkatJuaraTim']);

Route::get('/arsip', [MainController::class, 'arsip']);
Route::get('/arsip/{tahun}', MainController::class);

Route::get('admin', AdminController::class);
Route::post('admin/login', [AdminController::class, 'loginAuth']);

Route::post('admin/create', [AdminController::class, 'create']);
