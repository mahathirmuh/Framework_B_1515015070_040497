<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari matakuliahcontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'PEMROGRAMAN FRAMEWORK';
    	$matakuliah->keterangan = 'NICE';
    	$matakuliah->save();
    	return "Data Dengan Nama Matakuliah {$matakuliah->title} Telah Disimpan";
    }
}