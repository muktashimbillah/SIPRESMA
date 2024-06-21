<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\mahasiswa as ModelMahsiswa;
use Illuminate\Http\Request;

class mahasiswa extends Controller
{
    public function list()
    {
        $mahasiswas = ModelMahsiswa::all();
        return view('admin.mahasiswa.daftar-mhs', compact('mahasiswas'));
    }

    public function create()
    {
        return view('admin.mahasiswa.create-mhs');
    }
}
