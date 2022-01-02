<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin/dashboard');
});




Route::get('/manajemen-kategori-wisata',  [KategoriController::class, 'index'])->name('manajemen-kategori-wisata');
Route::get('/add-kategori-wisata', [KategoriController::class, 'add']);
Route::get('/delete-kategori-wisata/{id}', [KategoriController::class, 'delete']);
Route::get('/edit-kategori-wisata/{id}', [KategoriController::class, 'edit']);
Route::post('/kategori-store', [KategoriController::class, 'store'])->name('kategori-store');
Route::post('/kategori-update/{id}', [KategoriController::class, 'update'])->name('kategori-update');