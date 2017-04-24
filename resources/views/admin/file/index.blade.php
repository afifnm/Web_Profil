
@extends('adminlte::page')
@section('title', 'Upload File')

@section('content_header')
    <h2>Tambah File terbaru & hapus. </h2>
    <small> Gunakan pengaturan link untuk menaruh file diberbagai link.</small><br>
@stop
@section('content')
  <h4> <a class='btn btn-info btn-xs' href="/admin/file">
    <i class='fa fa-plus'> </i>
    Tambah File terbaru! </a> </h4>
<table class='table table-bordered table-striped table-hover'>
  <thead>
    <tr class='text-error'>
        <th>Nama File</th>
        <th>Link</th>>
        <th>Opsi</th></tr>
    </tr>
  </thead>
  <tbody>
    @foreach ($file as $blog)
    <tr class='text-warning'>
        <td> {{ $blog->id }}</td>
        <td> {{ $blog->judul }}</td>
        <td>
        <a href="/admin/file/download" class='btn btn-success btn-xs'><i class='fa fa-download'></i></a>
        <a href="/admin/file/delete" class='btn btn-danger btn-xs'><i class='fa fa-remove'></i></a>
        </td>
    </tr>
    @endforeach
 </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
@stop
