<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index() {
        return view('list_kamar');
    }

    public function getData()
    {
        $dataKamar = [
            ['id' => 1, 'nama' => 'Standard Room', 'harga' => 350000],
            ['id' => 2, 'nama' => 'Superior Room', 'harga' => 550000],
            ['id' => 3, 'nama' => 'Deluxe Room',   'harga' => 750000],
            ['id' => 4, 'nama' => 'Junior Suite',  'harga' => 1200000],
            ['id' => 5, 'nama' => 'Presidential Suite', 'harga' => 5000000],
        ];

        return $dataKamar;
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('list_kamar', compact('data'));
    }
} // Kurung penutup kelas ini harus di paling bawah