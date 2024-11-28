<?php

namespace App\Http\Controllers;
use
use Illuminate\Http\Request;

class MahasiswaController extends Controller 
{
    public function index(){
        return view('alldata');
    }
    public function store(Request $request) {
        $val_data = $request->validate([
            'NIM' => 'reuired',
            'NAMA' => 'reuired',
            'PRODI' => 'reuired',
            'ALAMAT' => 'reuired',
            'id_fakultas' => 'reuired',
        ]);

        Mahasiswa::create($val_data);
        return redirect
    }
}