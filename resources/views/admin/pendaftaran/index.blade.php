
@extends('adminlte::page')
@section('title', 'Data Pendaftaran')

@section('content_header')
    <h2>Data Pendaftaran. </h2>
@stop
@section('content')
<table id='example1' class='table table-bordered table-striped table-hover'>
  <thead>
    <tr class='text-error'>
        <th>No. Pendafaran</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Tempat, Tgl Lahir</th>
        <th>Nama Ibu</th>
        <th>Nama Ayah</th>
        <th>Tahun Ajaran</th>
        <th>Opsi</th></tr>
    </tr>
  </thead>
  <tbody>
    @foreach ($pendaftaran as $daftar)
    <tr class='text-warning'>
        <td> {{ $daftar->id }}</td>
        <td> {{ $daftar->nama_lengkap }}</td>
        <td> {{ $daftar->jenis_kelamin }}</td>
        <td> {{ $daftar->agama }}</td>
        <td> {{ $daftar->ttl }}</td>
        <td> {{ $daftar->nama_ibu }}</td>
        <td> {{ $daftar->nama_ayah }}</td>
        <td> {{ $daftar->tahun_ajaran }}</td>
        <td>
        <a href="../../pendaftaran/cetak{{ $daftar->id }}" class='btn btn-info btn-xs' target='_blank' ><i class='fa fa-print'></i></a>
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
    <!-- DataTables -->
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
@stop
