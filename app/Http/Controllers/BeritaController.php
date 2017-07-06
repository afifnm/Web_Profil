<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Informasi;

class BeritaController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
  $informasi = Informasi::all();
  return view('/admin/informasi/index', ['informasi'=>$informasi]);
  }
  public function create(){
		return view('/admin/informasi/tambah');
	}
  public function store(Request $request){
	$this->validate($request, [
		'judul' => 'required|min:5',
		'deskripsi' => 'required|min:5',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
	]);
  $imageName = time().'.'.$request->image->getClientOriginalExtension();
  $request->image->move(public_path('images'), $imageName);
	$informasi = new Informasi;
	$informasi->judul = $request->judul;
	$informasi->deskripsi = $request->deskripsi;
	$informasi->gambar = $imageName;
	$informasi->save();
	return redirect('/admin/informasi');
	}

  public function show(){
    $informasi = Informasi::get()->all();
    return view('berita', 'informasi' => $informasi);
  }

  public function edit($id){
  	$blog = Informasi::find($id);
 		return view('/admin/informasi/edit', ['informasi' => $blog]);
  }

  public function update(Request $request, $id){
      $this->validate($request, [
    		'judul' => 'required|min:5',
    		'deskripsi' => 'required|min:5',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    	]);
  		$informasi = Informasi::find($id);
      $imageName = $informasi->gambar;
      $request->image->move(public_path('images'), $imageName);
  		$informasi->judul = $request->judul;
  		$informasi->deskripsi = $request->deskripsi;
  		$informasi->save();
  		$informasi = Informasi::all();
  		return redirect('/admin/informasi');
  	}

    public function destroy($id){
  		$informasi = Informasi::find($id);
  		$informasi->delete();
  		$informasi = Informasi::all();
      return redirect('/admin/informasi');
    }
}
