<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil';

    //Mass Assignment = karena tidak ada deklarasi field yang diperbolehkan untuk di insert
    //ada 2 cara : $guarded, $fillable
    //fillable kita isi apa saya yang bisa diisi
    protected $fillable = ['nim', 'nama', 'email', 'no_hp', 'jurusan', 'alamat'];
    
    //guarded kita isi apa yang tidak boleh diisi
    protected $guarded = [];
}
