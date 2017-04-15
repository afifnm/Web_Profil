<?php
session_start();
include "../config.php";
include "cek.php";

$nik = $_GET['nik'];
$query = "select* from pendaftaran WHERE nik = '$nik'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($hasil)
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pendaftaran</title>
<?php
include "css.php";
?>
<script type="text/javascript">
var s5_taf_parent = window.location;
function popup_print(){
window.open('preview.php','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes')
}
</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
include "sidebar.php";
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Data Calon Murid
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
	
	<?php 
	echo "<table>";
	echo "<tr>
		<th>A. Keterangan Anak</td>
		<th> &nbsp &nbsp</th>
		<th></th>
		</tr>
		<tr>
		<td>NIK</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['nik']."</td>
		</tr>
		<tr>
		<td>Nama Lengkap</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['nama_lengkap']."</td>
		</tr>
		<tr>
		<td>Nama Panggilan</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['nama_panggilan']."</td>
		</tr>
		<tr>
		<td>Jenis Kelamin</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['jenkel']."</td>
		</tr>
		<tr>
		<td>Agama</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['agama']."</td>
		</tr>
		<tr>
		<td>Tempat, Tgl. Lahir</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['ttl']."</td>
		</tr>
		<tr>
		<td>Anak ke</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['anakke']." Dari ".$data['saudara']." Saudara</td>
		</tr>
		<tr>
		<td>Alamat</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['alamat']."</td>
		</tr>
		<tr>
		<td>Kelas</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['kelas']."</td>
		</tr>
		<tr>
		<td>Golongan Darah</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['gol']."</td>
		</tr>
		<tr>
		<td>Bahasa Sehari-hari</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['bahasa']."</td>
		</tr>
		<tr>
		<td>Tinggi Badan</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['tinggi']." cm</td>
		</tr>
		<tr>
		<td>Berat Badan</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['berat']." kg</td>
		</tr>
		<tr> <td> &nbsp</td><td> &nbsp</td><td> &nbsp</td></tr>
		
		<tr>		
		<th>B. Sekolah Asal</th>
		<th> &nbsp  &nbsp</th>
		<th></th>
		<tr>
		<td>Sekolah Asal</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['sek_asal']."</td>
		</tr>
		<tr>
		<td>Alamat Sekolah Asal</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['alamat_sek_asal']."</td>
		</tr>
		<tr> <td> &nbsp</td><td> &nbsp</td><td> &nbsp</td></tr>
		
		<tr>		
		<th>C. Data Orang Tua/Wali</th>
		<th> &nbsp  &nbsp</th>
		<th></th>
		<tr>		
		<td>No Telp. Ayah </td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['no_hp_ayah']."</td>
		</tr>
		<tr>
		<td>No Telp. Ibu</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['no_hp_ibu']."</td>
		</tr>
		<tr>
		<td>Nama Ayah</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['nama_ayah']."</td>
		</tr>
		<td>Pekerjaan</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['pekerjaan_ayah']."</td>
		</tr>
		<td>Pendidikan Terakhir</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['pendidikan_ayah']."</td>
		</tr>
		<td>Gaji</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['gaji_ayah']."</td>
		</tr>
		<td>Nama Ibu</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['nama_ibu']."</td>
		</tr>
		<td>Pekerjaan</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['pekerjaan_ibu']."</td>
		</tr>
		<td>Pendidikan Terakhir</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['pendidikan_ibu']."</td>
		</tr>
		<td>Gaji</td>
		<td> &nbsp : &nbsp</td>
		<td>".$data['gaji_ibu']."</td>
		</tr>
		<tr> <td> &nbsp</td><td> &nbsp</td><td> &nbsp</td></tr>
		</table>";
		echo"<a target='_blank' class='btn btn-success btn-md' href='preview.php?nik=".$data['nik']."'><i class='fa fa-print'></i>
		Print</a>";
?>

    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2016 <a href="http://scripthouse.co.id">Script House</a>.</strong> All rights
    reserved.
  </footer>

</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
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
</body>
</html>
