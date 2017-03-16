<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari mahasiswacontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Mahathir Muhammad';
    	$mahasiswa->nim = '1515015070';
    	$mahasiswa->alamat = 'Jl. Pramuka 10';
    	$mahasiswa->pengguna_id = '1';
    	$mahasiswa->save();
    	return "Data Dengan Nama mahasiswa {$mahasiswa->nama} Telah Disimpan";
    }
}
