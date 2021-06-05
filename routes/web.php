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

session()->put('tahun', '2021');


Route::get('/', BerandaController::class);
$tahun = Session::get('tahun');
Route::get($tahun, BerandaController::class);
Route::get($tahun . '/galeri/{tahun}', [BerandaController::class, 'galeri']);

Route::get($tahun . '/produk/{kategori_produk:id_kategori}', [KategoriProdukController::class, 'index']);
Route::get($tahun . '/detailProdukTim/{tim:id_tim}', [ProdukController::class, 'detailProdukTim']);

Route::get($tahun . '/pemenang', PemenangController::class);
Route::get($tahun . '/pemenang/personal/{peringkatJuara:id_kategori_pemenang}', [PemenangController::class, 'peringkatJuaraMhs']);
Route::get($tahun . '/pemenang/tim/{peringkatJuara:id_kategori_pemenang}', [PemenangController::class, 'peringkatJuaraTim']);

Route::get($tahun . '/arsip', ArsipController::class);
Route::get($tahun . '/arsip/{tahun}', [ArsipController::class, 'tahun']);

Route::get('admin', AdminController::class);
Route::post('admin/login', [AdminController::class, 'loginAuth']);

Route::post('admin/create', [AdminController::class, 'create']);
