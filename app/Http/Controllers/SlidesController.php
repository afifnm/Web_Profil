<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Slides;
class SlidesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){
  $slides = Slides::all();
  return view('/admin/slides/index', ['slides'=>$slides]);
  }
  public function create(){
		return view('/admin/slides/tambah');
	}
  public function store(Request $request){
	$this->validate($request, [
		'judul' => 'required|min:5',
		'deskripsi' => 'required|min:5',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
	]);
  $imageName = time().'.'.$request->image->getClientOriginalExtension();
  $request->image->move(public_path('slides'), $imageName);
	$slides = new Slides;
	$slides->judul = $request->judul;
	$slides->deskripsi = $request->deskripsi;
	$slides->gambar = $imageName;
	$slides->save();
	return redirect('/admin/pengaturan/slides');
	}
  public function edit($id){
  	$blog = Slides::find($id);
 		return view('/admin/slides/edit', ['slides' => $blog]);
  	}

  public function update(Request $request, $id){
      $this->validate($request, [
    		'judul' => 'required|min:5',
    		'deskripsi' => 'required|min:5',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    	]);
  		$slides = Slides::find($id);
      $imageName = $slides->gambar;
      $request->image->move(public_path('slides'), $imageName);
  		$slides->judul = $request->judul;
  		$slides->deskripsi = $request->deskripsi;
  		$slides->save();
  		$slides = Slides::all();
  		return redirect('/admin/pengaturan/slides');
  	}

    public function destroy($id){
  		$slides = Slides::find($id);
  		$slides->delete();
  		$slides = Slides::all();
      return redirect('/admin/pengaturan/slides');
    }
}
