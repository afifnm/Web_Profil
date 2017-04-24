<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukutamuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('bukutamu', function (Blueprint $table) {
             $table->increments('id');
             $table->string('nama');
             $table->string('email')->unique();
             $table->string('alamat');
             $table->text('pesan');
             $table->timestamps('created_at');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('bukutamu');
     }
}
