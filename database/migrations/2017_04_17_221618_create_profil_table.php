<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('profil', function (Blueprint $table) {
             $table->increments('id');
             $table->string('nama');
             $table->text('visi');
             $table->text('misi');
             $table->text('tujuan');
             $table->text('profil');
             $table->string('nostat');
             $table->string('alamat');
             $table->string('facebook');
             $table->string('instagram');
             $table->string('wa');
             $table->string('kepala');
             $table->string('nip');
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
         Schema::dropIfExists('profil');
     }
}
