
@extends('adminlte::page')

@section('title', 'Informasi Halaman Admin')

@section('content_header')
    <h1>Pengaturan Slides</h1><h2>Tambah gambar slide terbaru, edit & hapus. </h2>
    <small> Akan tampil di halaman utama.</small><br>
@stop
@section('content')
  <h4> <a class='btn btn-info btn-xs' href="/admin/pengaturan/slides/tambah">
    <i class='fa fa-plus'> </i>
    Tambah gambar slide terbaru! </a> </h4>
<table id='example1' class='table table-bordered table-striped table-hover'>
  <thead>
    <tr class='text-error'>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Opsi</th></tr>
    </tr>
  </thead>
  <tbody>
    @foreach ($slides as $blog)
    <tr class='text-warning'>
        <td> {{ $blog->judul }}</td>
        <td> {{ $blog->deskripsi }}</td>
        <td> <a target="_blank" href="../../slides/{{ $blog->gambar }}">{{ $blog->gambar }}</a></td>
        <td>
        <a href="/admin/pengaturan/slides/{{ $blog->id }}/edit" class='btn btn-success btn-xs'><i class='fa fa-edit'></i></a>
        <a href="/admin/pengaturan/slides/{{ $blog->id }}/delete" class='btn btn-danger btn-xs'><i class='fa fa-remove'></i></a>
        </td>
    </tr>
    @endforeach
 </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
