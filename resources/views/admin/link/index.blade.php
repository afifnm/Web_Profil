
@extends('adminlte::page')

@section('title', 'Pengaturan Link Halaman')

@section('content_header')
    <h1>Pengaturan link {{$kategori}}</h1><h2>Tambah & hapus untuk mengatur link pada halaman utama.</h2>
    <small> Gunakan pengaturan link untuk mempermudah akses halaman tertentu.</small><br>
@stop
@section('content')
  <h4> <a class='btn btn-info btn-xs' href="/admin/pengaturan/link">
    <i class='fa fa-plus'> </i>
    Tambah link halaman baru! </a> </h4>
<table id='example1' class='table table-bordered table-striped table-hover'>
  <thead>
    <tr class='text-error'>
        <th>Judul</th>
        <th>Link</th>
        <th>Opsi</th></tr>
    </tr>
  </thead>
  <tbody>
    @foreach ($link as $blog)
    <tr class='text-warning'>
        <td> {{ $blog->judul }}</td>
        <td> {{ $blog->link }}</td>
        <td>
        <a href="../../../{{ $blog->link }}" class='btn btn-success btn-xs'><i class='fa fa-search-plus'></i></a>
        <a href="/admin/pengaturan/link/{{ $blog->id }}/delete" class='btn btn-danger btn-xs'><i class='fa fa-remove'></i></a>
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
