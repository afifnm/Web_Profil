<?php
session_start();
include "../config.php";
include "cek.php";

if (isset($_GET['nik'])) {
$nik = $_GET['nik'];
$query = "delete from pendaftaran WHERE nik = '$nik'";
$hasil = mysqli_query($conn, $query);
header("Location: pendaftaran.php");
}
if (isset($_GET['ajaran'])) {
$thn = $_GET['tahun_ajaran'];
$query = "select*from pendaftaran WHERE tahun_ajaran = '$thn'";
$hasil = mysqli_query($conn, $query);
} else
{
$thn = date("Y")."-".(date("Y")+1);
$query = "select*from pendaftaran WHERE tahun_ajaran = '$thn'";
$hasil = mysqli_query($conn, $query);
}
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
        Pendaftaran
		<?php
		if (isset($_GET['ajaran'])) {
        echo"<small>Tahun Ajaran ".$thn."</small>";
		
		} else
		{
		$thn = date("Y")."-".(date("Y")+1);
		echo"<small>Tahun Ajaran ".$thn."</small>";
		}
		?>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
		<form action="" method="gets" name="ajaran" enctype="multipart/form-data">
			<div class="form-group">
				<div class="col-xs-10 col-md-2" style="margin: 0px; padding: 0px;">
					<select name="tahun_ajaran" class="form-control input-md">
					<option value="2016-2017">2016-2017</option>
					<option value="2017-2018">2017-2018</option>
					<option value="2018-2019">2018-2019</option>
					<option value="2019-2020">2019-2020</option>
					<option value="2020-2021">2020-2021</option>
					<option value="2021-2022">2021-2021</option>
					<option value="2022-2023">2022-2023</option>
					<option value="2023-2024">2023-2024</option>
					<option value="2024-2025">2024-2025</option>
					<option value="2025-2026">2025-2026</option>
					<option value="2026-2027">2026-2027</option>
					<option value="2027-2028">2027-2028</option>
					<option value="2028-2029">2028-2029</option>
					<option value="2029-2030">2029-2030</option>
					</select>
				</div>	
				<button type="submit" name="ajaran" class="btn btn-primary"><i class='fa fa-calendar-check-o '></i> Ganti </button>	
				<a target='_blank' class='btn btn-success btn-md' href='pdf_pendaftaran.php?thn=<?php echo $thn ?>'><i class='fa fa-print'></i> Print</a>
			</div>
		</form>
	
	<?php 
	echo "<table id='example2' class='table table-bordered table-striped table-hover'>";
	echo "<thead><tr class='text-error'>
	<th>NIK</th>
	<th>Nama Lengkap</th>
	<th>Jenis Kelamin</th>
	<th>Tempat, Tgl. Lahir</th>
	<th>Nama Ayah</th>
	<th>Nama Ibu</th>
	<th>No. Telp Ayah</th>
	<th>No. Telp Ibu</th>
	<th>Alamat Rumah</th>
	<th>Opsi</th>
	</tr></thead> <tbody>";
	while ($data = mysqli_fetch_assoc($hasil)) {
		echo "<tr class='text-warning'>
		<td>".$data['nik']."</td>
		<td>".$data['nama_lengkap']."</td>
		<td>".$data['jenkel']."</td>
		<td>".$data['ttl']."</td>
		<td>".$data['nama_ayah']."</td>
		<td>".$data['nama_ibu']."</td>
		<td>".$data['no_hp_ayah']."</td>
		<td>".$data['no_hp_ibu']."</td>
		<td>".$data['alamat']."</td>
		<td>
		<a target='_blank' class='btn btn-success btn-xs' href='pdf_form.php?nik=".$data['nik']."'><i class='fa fa-print'></i></a> 
		<a class='btn btn-info btn-xs' href='lihat_pendaftaran.php?nik=".$data['nik']."'><i class='fa fa-search-plus'></i></a> 
		<a class='btn btn-danger btn-xs' href='pendaftaran.php?nik=".$data['nik']."'><i class='fa fa-remove'></i></a>
		</td></tr>";
	}
	echo " </tbody></table>";
	
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
