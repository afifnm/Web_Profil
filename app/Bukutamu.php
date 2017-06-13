<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bukutamu extends Model
{
  public $table = "bukutamu";
  protected $fillable = ['nama','alamat','email','pesan'];
  protected $guard = ['id'];
}
