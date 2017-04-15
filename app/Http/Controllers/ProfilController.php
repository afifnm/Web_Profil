<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Profil;

class ProfilController extends Controller
{
  public function gantilogo(){
		return view('/admin/profil/logo');
	}
  public function simpanlogo(Request $request){
      $this->validate($request, [
        'image' => 'required|image|mimes:png|max:2048'
      ]);
      $imageName = 'logo.png';
      $request->image->move(public_path('images'), $imageName);
      return redirect('/admin/pengaturan/logo');
    }

  public function gantivisimisi(){
  	$profil = Profil::find(1);
 		return view('/admin/profil/visimisi', ['profil' => $profil]);
  	}
  public function simpanvisimisi(Request $request, $id){
      // $this->validate($request, [
    	// 	'visi' => 'required|min:10',
    	// 	'misi' => 'required|min:50',
    	// 	'tujuan' => 'required|min:10',
    	// ]);
  		$profil = Profil::find($id);
  		$profil->visi = $request->visi;
  		$profil->misi = $request->misi;
  		$profil->tujuan = $request->tujuan;
  		$profil->save();
  		$profil = Profil::all();
  		return redirect('/admin/pengaturan/visimisi');
  	}

  public function gantiaboutme(){
  	$profil = Profil::find(1);
 		return view('/admin/profil/aboutme', ['profil' => $profil]);
  	}
  public function simpanaboutme(Request $request, $id){
      // $this->validate($request, [
    	// 	'visi' => 'required|min:10',
    	// 	'misi' => 'required|min:50',
    	// 	'tujuan' => 'required|min:10',
    	// ]);
  		$profil = Profil::find($id);
  		$profil->nama = $request->nama;
  		$profil->alamat = $request->alamat;
  		$profil->profil = $request->profil;
  		$profil->nostat = $request->nostat;
  		$profil->kepala = $request->kepala;
  		$profil->nip = $request->nip;
  		$profil->save();
  		$profil = Profil::all();
  		return redirect('/admin/pengaturan/aboutme');
  	}
  public function gantisosmed(){
  	$profil = Profil::find(1);
 		return view('/admin/profil/sosmed', ['profil' => $profil]);
  	}
  public function simpansosmed(Request $request, $id){
  		$profil = Profil::find($id);
  		$profil->facebook = $request->facebook;
  		$profil->instagram = $request->instagram;
  		$profil->wa = $request->wa;
  		$profil->save();
  		$profil = Profil::all();
  		return redirect('/admin/pengaturan/sosmed');
  	}

}
