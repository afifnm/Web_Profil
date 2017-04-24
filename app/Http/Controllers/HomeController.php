<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slides;
use App\Profil;
use App\Link;
use App\Informasi;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		 $slides = Slides::all();
		 $profil = Profil::all();
		 $informasi = Informasi::all();
     $link = Link::all();
      return view('/home', [
        'link'=>$link,
        'slides'=>$slides,
        'informasi'=>$informasi,
        'profil'=>$profil
      ]);
    }
}
