@extends('adminlte::page')

@section('title', 'Info Tentang kami')

@section('content_header')
    <h1>Pengaturan Info Tentang Kami</h1>
@stop
@section('content')
  <section class="content">
    <div class="container">
  		<div class="isi">
    		<form action="/admin/pengaturan/aboutme/{{$profil->id}}" method="POST" name="input" enctype="multipart/form-data">
          <h4><b> Nama Taman Kanak-Kanak</b></h4>
          <input type="text" class="form-control" name="nama" value='{{$profil->nama}}' required >
          <hr>
          <h4><b> Alamat</b></h4>
          <input type="text" class="form-control" name="alamat" value='{{$profil->alamat}}' required >
          <hr>
      		<h4><b> Tentang Kami</b></h4>
      		  <textarea name="profil" class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >{{$profil->profil}}</textarea>
      		<hr>
          <h4><b> No. Statistik Taman Kanak-Kanak</b></h4>
          <input type="text" class="form-control" name="nostat" value='{{$profil->nostat}}' required >
          <hr>
          <h4><b> Kepala Taman Kanak-Kanak</b></h4>
          <input type="text" class="form-control" name="kepala" value='{{$profil->kepala}}' required >
          <hr>
          <h4><b> NIP</b></h4>
          <input type="text" class="form-control" name="nip" value='{{$profil->nip}}' required >
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
