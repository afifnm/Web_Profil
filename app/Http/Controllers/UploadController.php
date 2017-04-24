<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\Http\Requests;

class UploadController extends Controller
{
  public function indexfile(){
    // $link = DB::table('link')->where('kategori', '=', $kategori)->get();
    $folder = public_path('file'); //folder tempat file disimpan
		$handle = opendir($folder);
    $file = readdir($handle);
    // dd($file);
    return view('/admin/file/index', ['file'=>$file]);
  }
  public function delete($id){
    return redirect('/admin/file/');
  }
}
