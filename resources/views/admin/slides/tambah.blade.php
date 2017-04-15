
@extends('adminlte::page')

@section('title', 'Tambah Informasi')

@section('content_header')
    <h1>Tambah Gambar Slide Baru </h1>
    <small>
    <a href="../slides">
        <i class="fa fa-share"></i> <span>Kembali</span>
    </a>
    </small>
@stop
@section('content')
  <section class="content">
    <div class="box box-info">
      <div class="box-header">
        <i class="fa fa-envelope"></i>
        <h3 class="box-title">Usahakan deskripsi tidak terlalu panjang dan gambar harus dipilih!</h3>
      </div>
      <form action="/admin/pengaturan/slides" method="POST" name="input" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <input type="text" class="form-control" name="judul" placeholder="Judul Berita" value='{{old('judul')}}' required >
                </div>
                <div>
                  <textarea name="deskripsi" class="textarea" placeholder="Deskripsi" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required >{{old('deskripsi')}}</textarea>
                </div>
                <div class="form-group" required >
                  <input type="file" name="image" />
                </div>
            </div>
            <div class="box-footer clearfix">
              <input  class="btn btn-primary" type="submit" name="submit" value="Tambah">
              {{csrf_field()}}
            </div>
      </form>
  </div>
  </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
