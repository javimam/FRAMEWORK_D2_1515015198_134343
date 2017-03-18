<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;


class dosenController extends Controller
{
    public function awal()
    {
    	return "hay dosen";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'imam taqin';
    	$dosen->NIP = '1515015198';
    	$dosen->Alamat = 'Jl. Pejuangan 1';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
