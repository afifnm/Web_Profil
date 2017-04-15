<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\Http\Requests;
use App\Link;
class LinkController extends Controller
{
  public function index($kategori){
    $link = DB::table('link')->where('kategori', '=', $kategori)->get();
    return view('/admin/link/index', ['link'=>$link,'kategori'=>$kategori]);
  }
  public function create(){
		return view('/admin/link/tambah');
	}
  public function store(Request $request){
	$this->validate($request, [
		'judul' => 'required|min:5',
		'link' => 'required|min:5',
	]);
	$link = new Link;
	$link->judul = $request->judul;
	$link->link = $request->link;
	$link->kategori = $request->kategori;
	$link->save();
	return redirect('/admin/pengaturan/link/'.$request->kategori);
	}
  public function destroy($id){
		$link = Link::find($id);
    $kategori = $link->kategori;
		$link->delete();
		$link = Link::all();
    return redirect('/admin/pengaturan/link/'.$kategori);
  }
}
