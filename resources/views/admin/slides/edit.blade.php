
@extends('adminlte::page')

@section('title')
{{$slides->judul}}
@stop
@section('content_header')
    <h1>Edit Gambar Slide </h1>
    <small>
    <a href="../">
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
      <form action="/admin/pengaturan/slides/{{$slides->id}}" method="POST" name="update" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <input type="text" class="form-control" name="judul" placeholder="Judul Slides" value='{{$slides->judul}}' required >
                  @if ($errors->has('judul'))
                  <p> {{ $errors->first('judul') }} </p>
                  @endif
                </div>
                <div>
                  <textarea name="deskripsi" class="textarea" placeholder="Deskripsi" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required >{{$slides->deskripsi}}</textarea>
                  @if ($errors->has('deskripsi'))
                    <p> {{ $errors->first('deskripsi') }} </p>
                  @endif
                </div>
                <div class="form-group" required >
                  <input type="file" name="image" />
                  @if ($errors->has('image'))
                    <p> {{ $errors->first('image') }} </p>
                  @endif
                </div>
            </div>
            <div class="box-footer clearfix">
              <input  class="btn btn-primary" type="submit" name="submit" value="Simpan">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="PUT">
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
