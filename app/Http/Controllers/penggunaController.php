<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pengguna;

class penggunaController extends Controller
{
    public function awal()
    {
    	return "hay user baru";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$pengguna = new pengguna();
    	$pengguna->username = 'imam';
    	$pengguna->password = 'imam';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah di simpan";
    }
}
