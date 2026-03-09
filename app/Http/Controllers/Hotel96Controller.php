<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// PASTIKAN baris ini ada dan tulisannya benar: App\Models\Hotel96
use App\Models\Hotel96; 

class Hotel96Controller extends Controller
{
    // halaman utama
    public function index()
    {
        // Mengambil data dari database
        $hotel96 = Hotel96::all();

        // Pakai WITH (Tanpa compact)
        return view('hotel96', compact('hotel96'));
    }

    public function contact()
    {
        $data = [
            'nama' => 'Fais Afrian',
            'email' => 'faisafrian15@gmail.com'
        ];
        
        // Pakai WITH
        return view('contact', compact('data'));
    }
}