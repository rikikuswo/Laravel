<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('dashboard');
});

//route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/add', [PegawaiController::class, 'add']);
Route::post('/pegawai/save', [PegawaiController::class, 'savePegawai'])->name('pegawai.save');
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/saveUpdate', [PegawaiController::class, 'updatePegawai']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'delete']);

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
