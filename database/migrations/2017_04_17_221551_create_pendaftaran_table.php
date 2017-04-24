<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('pendaftaran', function (Blueprint $table) {
             $table->increments('id');
             $table->string('nama_lengkap');
             $table->string('nama_panggilan');
             $table->string('jenis_kelamin');
             $table->string('agama');
             $table->string('ttl');
             $table->int('anakke');
             $table->int('saudara');
             $table->string('alamat');
             $table->int('tinggi');
             $table->int('berat');
             $table->string('nama_ayah');
             $table->string('pekerjaan_ayah');
             $table->string('gaji_ayah');
             $table->string('nama_ibu');
             $table->string('pekerjaan_ibu');
             $table->string('gaji_ibu');
             $table->string('no_hp');
             $table->string('tahun_ajaran');
             $table->timestamps();
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('pendaftaran');
     }
}
