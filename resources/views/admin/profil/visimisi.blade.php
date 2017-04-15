
@extends('adminlte::page')

@section('title', 'Visi, Misi dan Tujuan')

@section('content_header')
    <h1>Pengaturan Visi, Misi dan Tujuan</h1>
@stop
@section('content')
  <section class="content">
    <div class="container">
  		<div class="isi">
    		<form action="/admin/pengaturan/visimisi/{{$profil->id}}" method="POST" name="input" enctype="multipart/form-data">
      		<h4><b> Visi Pendidikan</b></h4>
      		  <textarea name="visi" class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >{{$profil->visi}}</textarea>
      		<hr>
      		<h4><b> Misi Pendidikan</b></h4>
      		  <textarea name="misi" class="textarea" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >{{$profil->misi}}</textarea>
      		<hr>
      		<h4><b> Tujuan Pendidikan</b></h4>
      		  <textarea name="tujuan" class="textarea" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >{{$profil->tujuan}}</textarea>
      		<hr>
            <input  class="btn btn-primary" type="submit" name="submit" value="Simpan">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
    		</form>
  		</div>
		</div>
  </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
