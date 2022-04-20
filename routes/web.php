<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RiwayatPesananController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resources([
    '/dashboard/produk' => ProdukController::class,
    '/dashboard/pesanan' => PesananController::class,
    '/dashboard/riwayat/pesanan' => RiwayatPesananController::class,
    '/dashboard/produk/ulasan' => UlasanController::class,
    '/dashboard/transaksi' => TransaksiController::class,
]);
