<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    //
    public function index() {
    // Nanti di sini tempat ambil data dari database
    return view('list_kamar');
}
}
