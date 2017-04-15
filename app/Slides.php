<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
  public $table = "slides";
  protected $dates = ['deleted_at'];
  protected $fillable = ['judul','deskripsi','gambar'];
  protected $guard = ['id'];
}
