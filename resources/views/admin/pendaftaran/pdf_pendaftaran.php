<?php
include "../config.php";
require('fpdf/fpdf.php');
$thn = $_GET['thn'];
$query = "select* from pendaftaran WHERE tahun_ajaran = '$thn'";
$hasil = mysqli_query($conn, $query);
$header = array(
		array("label"=>"NIK", "length"=>30, "align"=>"L"),
		array("label"=>"Nama", "length"=>40, "align"=>"L"),
		array("label"=>"Alamat", "length"=>60, "align"=>"L"),
		array("label"=>"Agama", "length"=>15, "align"=>"L"),
		array("label"=>"Jenis Kelamin", "length"=>25, "align"=>"L"),
		array("label"=>"Tempat, Tgl. Lahir", "length"=>50, "align"=>"L"),
		array("label"=>"Nama Ayah", "length"=>30, "align"=>"L"),
		array("label"=>"Nama Ibu", "length"=>30, "align"=>"L")
	);

$sql = "select* from visimisi";
$hasil2 = mysqli_query($conn, $sql);
$datatk = mysqli_fetch_assoc($hasil2);
$namatk = $datatk['nama'];
$nostat = $datatk['nostat'];
$alamat = $datatk['alamat'];

$pdf=new FPDF('Landscape','mm','A4'); 
$pdf->Open();
$pdf->AddPage();
$height_cell = 5.8;

$pdf->SetFont('Arial', 'B',16);
$pdf-> Cell(0,8, 'Data Pendaftaran Tahun Ajaran '.$thn,0,0,'C');
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','',12);
$pdf->Cell(52,$height_cell,'Nama Taman Kanak-kanak ',0);                       
$pdf->Cell(52 ,$height_cell,' : '.$namatk,0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'No. Statistik ',0); 
$pdf->Cell(52,$height_cell,' : '.$nostat,0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Alamat ',0); 
$pdf->Cell(52,$height_cell,' : '.$alamat,0);
$pdf->Ln();
#buat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetTextColor(0);
$pdf->SetDrawColor(0);
$pdf->SetFillColor(200,200,200);
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();

while ($dataa = $hasil->fetch_array()) { 
	$pdf->Cell(30,$height_cell,$dataa['nik'],1,'','L'); 
	$pdf->Cell(40,$height_cell,$dataa['nama_lengkap'],1,'','L'); 
	$pdf->Cell(60,$height_cell,$dataa['alamat'],1,'','L'); 
	$pdf->Cell(15,$height_cell,$dataa['agama'],1,'','L'); 
	$pdf->Cell(25,$height_cell,$dataa['jenkel'],1,'','L'); 
	$pdf->Cell(50,$height_cell,$dataa['ttl'],1,'','L'); 
	$pdf->Cell(30,$height_cell,$dataa['nama_ayah'],1,'','L'); 
	$pdf->Cell(30,$height_cell,$dataa['nama_ibu'],1,'','L'); 
	$pdf->Ln();
}
#for ($x = 0; $x <= 40; $x++) {
#	foreach ($header as $kolom) {
#	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
#}
#$pdf->Ln();
#}
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', '',12);
$tgl = date('d');
$bl = date('m');
$thn = date('Y');
	for ($i=1; $i<=12; $i++) {
		$bl = ($i<10) ? "0$i" : $i;
		if($bl==1){ $bln="Januari"; }if($bl==2){ $bln="Februari"; }if($bl==3){ $bln="Maret"; }
		if($bl==4){ $bln="April"; }if($bl==5){ $bln="Mei"; }if($bl==6){ $bln="Juni"; }
		if($bl==7){ $bln="Juli"; }if($bl==8){ $bln="Agustus"; }if($bl==9){ $bln="September"; }
		if($bl==10){ $bln="Oktober"; }if($bl==11){ $bln="November"; }if($bl==12){ $bln="Desember"; }
	}
$now = 	$tgl." ".$bln." ".$thn;			
$pdf->Cell(0,$height_cell,'Surakarta, '.$now,0,'','R'); 
$pdf->Ln();

$pdf->Cell(100,$height_cell,'Kepala Taman Kanak-kanak',0,'','C'); 
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(100,$height_cell,$datatk['kepala'],0,'','C'); 
$pdf->Ln();
$pdf->Cell(100,$height_cell,$datatk['nip'],0,'','C'); 

$pdf->Output();
?>