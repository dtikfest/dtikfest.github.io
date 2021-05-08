<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;


Route::get('/', BerandaController::class);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('detailProdukTim/{tim:id_tim}', [ProdukController::class, 'detailProdukTim']);

Route::get('admin', AdminController::class);
Route::post('admin/login', [AdminController::class, 'loginAuth']);

Route::post('admin/create', [AdminController::class, 'create']);
