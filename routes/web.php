<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hotel96Controller;

// Untuk kotak screenshot pertama (http://localhost:8000/)
Route::get('/', [Hotel96Controller::class, 'index']);

// Untuk kotak screenshot kedua (http://localhost:8000/contact)
Route::get('/contact', [Hotel96Controller::class, 'contact']);