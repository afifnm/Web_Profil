<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Bukutamu;

class BukutamuController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
  $bukutamu = Bukutamu::paginate(10);
  return view('/admin/bukutamu/index', ['bukutamu'=>$bukutamu]);
  }
}
