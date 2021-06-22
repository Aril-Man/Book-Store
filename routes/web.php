<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [AuthController::class, 'index'])->name('login');
// Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Khusus Kasir
    Route::prefix('/kasir')->group(function () {
        Route::get('/', [KasirController::class, 'index']);
        Route::get('/transaksi', [KasirController::class, 'Transaksi']);
    });

// Khusus Admin
    Route::prefix('/admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('/distributor/createDistri', [AdminController::class, 'createDistri']);
        Route::post('/distributor/createDistri', [AdminController::class, 'storeDistri']);
        Route::delete('/distributor/createDistri/{distributor}', [AdminController::class , 'destroyDistri']);
        Route::get('/distributor/{distributor}/editDistri', [AdminController::class, 'editDistri']);
        Route::patch('/distributor/createDistri/{distributor}', [AdminController::class , 'updateDistri']);
        Route::get('/buku/semuaBuku', [AdminController::class, 'showSemuaDataBuku']);
        Route::get('/buku/createBuku', [AdminController::class, 'createBuku']);
        Route::post('/buku/semuaBuku', [AdminController::class, 'storeBuku']);
        Route::get('/buku/filterPenulis', [AdminController::class, 'showPenulisBuku']);
        Route::get('/buku/bukuSeringTerjual', [AdminController::class, 'showBukuSeringTerjual']);
    });


// Khusus Manager
    Route::prefix('/manager')->group(function () {

    });
