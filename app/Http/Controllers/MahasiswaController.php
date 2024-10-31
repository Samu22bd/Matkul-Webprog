<?php

namespace App\Http\Controllers;

use App\Models\Post as PostModel;
use App\Models\Profil as ProfilModel; //dikasi AKA biar gampang bedain
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /*
        private
        protected
        public
    */
    public function tes1(){
        return "Ini adalah tes1";
    }

    public function tes2(){
        return "Ini adalah tes2";
    }
    public function index($nilai){
        $arrMahasiswa = ['Risa Lestari', 'Rudi Hermawan','Bambang Kusumo','Lisa Permata'];
        return view('universitas.mahasiswa', ['mahasiswa'=>$arrMahasiswa, 'jurusan'=>'Teknik Informatika'])
        ->with('nilai',$nilai);
    }

    public function tampil(){
        $data = ProfilModel::all();
        printf($data);
        return "Ini adalah tampilan dari controller";
        // dd('ehe');
    }

    public function view(){
        // $posts = PostModel::with('comments')->get();
        $posts = PostModel::with('comments')->paginate(10);
        // return view('post.index', compact('posts'));
        return view('post.index', ['posts'=>$posts]);
    }
}
