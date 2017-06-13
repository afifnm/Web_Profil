<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pendaftaran extends Model
{
  public $table = "pendaftaran";
  protected $fillable = ['nama_lengkap','nama_panggilan','jenis_kelamin','agama',
'ttl','anakke','saudara','alamat','tinggi','berat','nama_ayah','pekerjaan_ayah',
'gaji_ayah','nama_ibu','pekerjaan_ibu','gaji_ibu','no_hp','tahun_ajaran'];
  protected $guard = ['id'];
}
