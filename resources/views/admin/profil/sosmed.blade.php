@extends('adminlte::page')

@section('title', 'Sosial Media')

@section('content_header')
    <h1>Pengaturan Sosial Media</h1>
@stop
@section('content')
  <section class="content">
    <div class="container">
  		<div class="isi">
    		<form action="/admin/pengaturan/sosmed/{{$profil->id}}" method="POST" name="input" enctype="multipart/form-data">
          <h4><b> Masukan Link Sosial Media disini!</b></h4>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-facebook-square"></i>
            </div>
            <input type="text" class="form-control" name="facebook" value="{{$profil->facebook}}" required >
          </div>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-instagram"></i>
            </div>
            <input type="text" class="form-control" name="instagram" value="{{$profil->instagram}}" required >
          </div>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-whatsapp"></i>
            </div>
            <input type="text" class="form-control" name="wa" value="{{$profil->wa}}" required >
          </div> <br>
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
