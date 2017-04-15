
@extends('adminlte::page')

@section('title', 'Logo Halaman Web')

@section('content_header')
    <h1>Pengaturan Logo Website</h1>
@stop

@section('content')
    <p>Gambar logo sebelumnya.</p>
    <img src="{{URL::asset('/images/logo.png')}}" alt="Logo" height="200" width="200">
    <form action="/admin/pengaturan/logo" method="POST" name="input" enctype="multipart/form-data">
          <div class="box-body">
              <div class="form-group" required >
                <input type="file" name="image" />
              </div>
          </div>
          <div class="box-footer clearfix">
            <input  class="btn btn-primary" type="submit" name="submit" value="Ganti Logo">
            {{csrf_field()}}
          </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
