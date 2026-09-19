<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $Mahasiswa = [
            'nim' => '251011700764',
            'nama' => 'Ainin mardiah lase',
            'prodi' => 'Sistem informasi',
            'email' => '@aininmardiahlase',
            'kampus' => 'unpam',
            'Status' => 'Aktif',
        ];

        return view ('mahasiswa', compact ('mahasiswa'));
    }
}
