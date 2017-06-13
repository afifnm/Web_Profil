
@extends('adminlte::page')

@section('title', 'Buku Tamu')

@section('content_header')
    <h1>Daftar Buku Tamu</h1>
@stop

@section('content')
  @foreach ($bukutamu as $buku)
<table>
  <tr>
      <td> Nama</td>
      <td> : </td>
      <td> {{ $buku->nama }}</td>
  </tr>
  <tr>
      <td> Alamat&nbsp&nbsp</td>
      <td> : &nbsp&nbsp</td>
      <td> {{ $buku->alamat }}</td>
  </tr>
  <tr>
      <td> Email</td>
      <td> : </td>
      <td> {{ $buku->email }}</td>
  </tr>
  <tr>
      <td> Pesan</td>
      <td> : </td>
      <td> {{ $buku->pesan }}</td>
  </tr>
</table>
<br>
{{  $bukutamu->render() }}
  @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
