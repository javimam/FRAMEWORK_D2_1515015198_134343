<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
    public function awal()
    {
    	return "selamat datang di ruangan";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$ruangan = new ruangan();
    	$ruangan->title = 'lan Puskom';
    	$ruangan->save();
    	return "data dengan title {$ruangan->title} telah disimpan";
    }
}
