<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari dosencontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'Edy Fedora';
    	$dosen->nip = '1';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "Data Dengan Nama {$dosen->nama} Telah Disimpan";
    }
}
