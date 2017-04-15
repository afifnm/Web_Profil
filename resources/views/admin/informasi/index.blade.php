
@extends('adminlte::page')
@section('title', 'Informasi Halaman Admin')

@section('content_header')
    <h1>Informasi</h1><h2>Tambah informasi terbaru, edit & hapus. </h2>
    <small> Gunakan pengaturan link untuk menaruh informasi diberbagai link.</small><br>
@stop
@section('content')
  <h4> <a class='btn btn-info btn-xs' href="/admin/informasi/tambah">
    <i class='fa fa-plus'> </i>
    Tambah Informasi terbaru! </a> </h4>
<table id='example1' class='table table-bordered table-striped table-hover'>
  <thead>
    <tr class='text-error'>
        <th>ID</th>
        <th>Judul</th>
        <th>Link</th>
        <th>Tanggal di buat</th>
        <th>Gambar</th>
        <th>Opsi</th></tr>
    </tr>
  </thead>
  <tbody>
    @foreach ($informasi as $blog)
    <tr class='text-warning'>
        <td> {{ $blog->id }}</td>
        <td> {{ $blog->judul }}</td>
        <td> informasi/{{ $blog->id }}</td>
        <td> {{ date('d F Y', strtotime($blog->created_at)) }}</td>
        <td> <a target="_blank" href="../images/{{ $blog->gambar }}">{{ $blog->gambar }}</a></td>
        <td>
        <a href="../../informasi/{{ $blog->id }}" class='btn btn-info btn-xs' target='_blank' ><i class='fa fa-search-plus'></i></a>
        <a href="/admin/informasi/{{ $blog->id }}/edit" class='btn btn-success btn-xs'><i class='fa fa-edit'></i></a>
        <a href="/admin/informasi/{{ $blog->id }}/delete" class='btn btn-danger btn-xs'><i class='fa fa-remove'></i></a>
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
