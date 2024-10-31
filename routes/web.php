<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cobates1', [MahasiswaController::class, 'tes1']);
Route::get('/cobates2', [MahasiswaController::class, 'tes2']);

Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index']);

Route::prefix('/admin')->group(function(){
    Route::get('/mahasiswa/{nilai}', [MahasiswaController::class, 'index'])->name('admin.mahasiswa');

    //atas dan bawah ini ekuivalen dengan isi functionnya dipindahkan ke function index pada mahasiswaController

    // Route::get('/mahasiswa/{nilai}', function($nilai){
    //     $arrMahasiswa = ['Risa Lestari', 'Rudi Hermawan','Bambang Kusumo','Lisa Permata'];
    //     return view('universitas.mahasiswa', ['mahasiswa'=>$arrMahasiswa, 'jurusan'=>'Teknik Informatika'])
    //     ->with('nilai',$nilai);
    // })->name('admin.mahasiswa');

    // karena ini sama dengan route diatas, maka dia anggap binus sebagai nilai karena top down
    Route::get('/mhs/binus', [MahasiswaController::class, 'tampil']);

    Route::get('/mhs/post', [MahasiswaController::class, 'view'])->name("view.post.mhs");
    

    Route::get('/dosen/{dosen}', function($dosen){
        $arrMahasiswa = ['Risa Lestari', 'Rudi Hermawan','Bambang Kusumo','Lisa Permata'];
        return view('universitas.dosen')
        ->with('daftarmahasiswa',$arrMahasiswa)
        ->with('jur','Teknik Informatika')
        ->with('dosen',$dosen);
    })->name('admin.dosen');

    Route::get('/karyawan', function(){
        return view('universitas.karyawan');
    })->name('admin.karyawan');
});

//cara melempar data/value ke view , ada 2 cara:
//1. Argument kedua dari view
//2. Method with()
