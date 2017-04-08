<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('javierIMAM', function(){
	echo "javierIMAM";
});

Route::get('hello-world', function(){
	return 'Hello World';
});

// Route::get('pengguna/{pengguna}', function($pengguna){ //pake parameter ()karena sdh dideklarasikan
// 	return "Hello World dari pengguna $pengguna";
// });


Route::get('kelasd2/framework/{mhs?}', function($mhs="Anonim"){ //parameter boleh dikasih parameter/engga karena menggunakan tanya?
	return "Selamat datang $mhs";
});
Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan', 'PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

Route::get('matakuliah','MataKuliahController@awal');
Route::get('matakuliah/tambah','MataKuliahController@tambah');
Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');


Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');
Route::get('dosen/{dosen}', 'DosenController@lihat');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}', 'DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');

 Route::get('mahasiswa','mahasiswaController@awal');
 Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');
 Route::get('mahasiswa/{mahasiswa}', 'MahasiswaController@lihat');
 Route::post('mahasiswa/simpan','mahasiswaController@simpan');
 Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
 Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
 Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');

Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');
Route::get('dosen_matakuliah/{dosen_matakuliah}','dosen_matakuliahController@lihat');
Route::post('dosen_matakuliah/simpan','dosen_matakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahController@hapus');

 Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
 Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');
 Route::get('jadwal_matakuliah/{jadwal_matakuliah}','jadwal_matakuliahController@lihat');
 Route::post('jadwal_matakuliah/simpan','jadwal_matakuliahController@simpan');
 Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahController@edit');
 Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahController@update');
 Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahController@hapus');
