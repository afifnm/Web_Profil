<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Pendaftaran;

class PendaftaranController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
  $pendaftaran = Pendaftaran::all();
  return view('/admin/pendaftaran/index', ['pendaftaran'=>$pendaftaran]);
  }
}
