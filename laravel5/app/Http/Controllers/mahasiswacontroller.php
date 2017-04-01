<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;
use App\Pengguna;

class MahasiswaController extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Mahathir Muhammad";
    	$mahasiswa->nim = "1515015070";
    	$mahasiswa->alamat = "Jl Pramuka 10";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
    }
    public function mahasiswa()
    {
        $mahasiswa = mahasiswa::all();
        foreach ($mahasiswa as $mhs)//foreach merupakan fungsi perulangan untuk menampilkan semua data yang ada dari tabel mahasiswa
        {
            echo "Nama: ".$mhs->nama; // Menampilkan nama mahasiswa dari tabel mahasiswa dari tabel pengguna yang terelasi
            echo "<br>"; // baris baru
            echo "Username: ".$mhs->pengguna->username;  // Menampilkan username mahasiswa dari tabel mahasiswa yang terelasi dengan tabel pengguna
            echo "<br>";//baris baru
            echo "<br>";//baris baru
        }

    }

}
