<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Profil extends Model
{
  public $table = "profil";
  protected $fillable = ['visi','misi','tujuan'];
  protected $guard = ['id'];
}
