<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hotel96Controller;

// Untuk kotak screenshot pertama (http://localhost:8000/)
Route::get('/', [Hotel96Controller::class, 'index']);

// Untuk kotak screenshot kedua (http://localhost:8000/contact)
Route::get('/contact', [Hotel96Controller::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/users', function () {
        return 'Admin Users';
    });
});

//
Route::get('/listbarang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id', 'nama'));
});

// 

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;

// Route untuk Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route untuk Daftar Kamar
Route::get('/kamar', [KamarController::class, 'tampilkan']);