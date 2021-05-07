<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', BerandaController::class);

// Route::get('/', function () {
//     return view('home');
// });

Route::get('produk', [ProdukController::class, 'index']);
Route::get('detailProduk', [ProdukController::class, 'detailProduk']);
