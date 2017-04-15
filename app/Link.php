<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
  public $table = "link";
  protected $fillable = ['visi','misi','tujuan'];
  protected $guard = ['id'];
}
