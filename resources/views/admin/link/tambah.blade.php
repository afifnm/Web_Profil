
@extends('adminlte::page')

@section('title', 'Tambah Link Baru')

@section('content_header')
    <h1>Pastikan link yang ditulis benar!</h1>
    <small>
    <a href="../slides">
        <i class="fa fa-share"></i> <span>Kembali</span>
    </a>
    </small>
@stop
@section('content')
  <section class="content">
    <div class="box box-info">
      <form action="/admin/pengaturan/link" method="POST" name="input" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <input type="text" class="form-control" name="judul" placeholder="Judul" value='{{old('judul')}}' required >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="link" placeholder="Link Halaman" value='{{old('judul')}}' required >
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select name="kategori" class="form-control">
                    <option value="header">Header</option>
                    <option value="sidebar">Sidebar</option>
                    <option value="footer">Footer</option>
                  </select>
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
