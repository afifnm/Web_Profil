<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Informasi extends Model
{
  public $table = "informasi";
  protected $dates = ['deleted_at'];
  protected $fillable = ['judul','deskripsi','gambar'];
  protected $guard = ['id'];
}
