<?php

use App\Http\Controllers\AdminController as Admin;
use App\Http\Controllers\HomeController as Home;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {
    Route::get(
        '/',
        [DashboardController::class, 'index']
    )
    ->name('dashboard');
    Route::resource('kasir', CashierController::class);
    Route::resource('barang', ItemController::class);
    Route::resource('merek', MerkController::class);
    Route::resource('kategori', CategoriesController::class);
    Route::resource('keuangan', FinanceController::class);
    Route::resource('pegawai', UserController::class);
    Route::resource('jabatan', RoleController::class);
    Route::resource('supplier', SupplierController::class);
    Route::get(
        'laporan/absensi',
        [AttendanceController::class, 'report']
    )->name('laporan.absensi');
    Route::get(
        'laporan/barang',
        [ItemController::class, 'report']
    )->name('laporan.barang');
    Route::get(
        'laporan/keuangan',
        [FinanceController::class, 'report']
    )->name('laporan.keuangan');
    Route::resource('profil', ProfileController::class);
});