<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profil', function (Blueprint $table) {
            // untuk buat tabel ->
            // $table->tipeData('namaField')

            $table->id(); // primary key, autoincrement, integer
            //nim, nama, jurusan
            $table->bigInteger('nim')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('hp');
            $table->enum('jurusan', ['TI','SI','AK']);
            $table->text('alamat');
            $table->timestamps(); // buat 2 kolom : created_at, updated_at

            // jika pisah migrate
            // add_no_hp_to_profil_table
            // $table->string('no_hp')->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
