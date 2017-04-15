<?php
include "../config.php";
require('fpdf/fpdf.php');
$nik = $_GET['nik'];
$query = "select* from pendaftaran WHERE nik = '$nik'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($hasil);

$sql = "select* from visimisi";
$hasil2 = mysqli_query($conn, $sql);
$datatk = mysqli_fetch_assoc($hasil2);
$namatk = $datatk['nama'];
$nostat = $datatk['nostat'];
$alamat = $datatk['alamat'];

$pdf=new FPDF();
$pdf->Open();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B',16);
$pdf-> Cell(0,8, 'Formulir Pendaftaran',0,0,'C');
$pdf->Ln();
$pdf->Ln();

$start_awal=$pdf->GetX(); 
$get_xxx = $pdf->GetX();
$get_yyy = $pdf->GetY();
$width_cell = 52;  
$height_cell = 5.8;    

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
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,$height_cell,'Surat Pendaftaran Murid Baru, Tahun Ajaran '.$data['tahun_ajaran'],0);  
$pdf->Ln(); 
$pdf->Cell(100,$height_cell,'A. Keterangan Anak',0);                       
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(52,$height_cell,'NIK ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['nik'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Nama Lengkap ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['nama_lengkap'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Nama Panggilan ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['nama_panggilan'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Jenis Kelamin ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['jenkel'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Agama ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['agama'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Tempat, Tgl. Lahir ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['ttl'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Anak ke ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['anakke']." dari ".$data['saudara']." saudara",0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Alamat Rumah ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['alamat'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Kelas ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['kelas'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Bahasa Sehari-hari ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['bahasa'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Tinggi Badan ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['tinggi']." cm",0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Berat Bedan ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['berat']." kg",0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Golongan Darah ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['gol'],0);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(52,$height_cell,'B. Sekolah Asal ',0); 
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(52,$height_cell,'Sekolah Asal ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['sek_asal'],0);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(52,$height_cell,'Alamat ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['alamat_sek_asal'],0);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(52,$height_cell,'C. Orang Tua/Wali ',0); 
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(52,$height_cell,'Nama Ayah ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['nama_ayah'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Pekerjaan ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['pekerjaan_ayah'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Pendidikan Terakhir ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['pendidikan_ayah'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Gaji ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['gaji_ayah'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'No. Telp ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['no_hp_ayah'],0);
$pdf->Ln();

$pdf->Cell(52,$height_cell,'Nama Ibu ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['nama_ibu'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Pekerjaan ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['pekerjaan_ibu'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Pendidikan Terakhir ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['pendidikan_ibu'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'Gaji ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['gaji_ibu'],0);
$pdf->Ln();
$pdf->Cell(52,$height_cell,'No. Telp ',0); 
$pdf->Cell(52,$height_cell,' : '.$data['no_hp_ibu'],0);
$pdf->Ln();
$pdf->Ln();

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
$pdf->Cell(100,$height_cell,'Orang Tua/Wali*',0,'','C'); 
$pdf->Ln();
$pdf->Cell(100,$height_cell,' ',0,'','C'); 
$pdf->Cell(100,$height_cell,'( Nama Terang )',0,'','C'); 
$pdf->Ln();
$pdf->Cell(100,$height_cell,' ',0,'','C'); 
$pdf->Cell(100,$height_cell,' ',0,'','C'); 
$pdf->Ln();
$pdf->Cell(100,$height_cell,$datatk['kepala'],0,'','C'); 
$pdf->Cell(100,$height_cell,'',0,'','C'); 
$pdf->Ln();
$pdf->Cell(100,$height_cell,$datatk['nip'],0,'','C'); 
$pdf->Cell(100,$height_cell,'( ................................... )',0,'','C'); 
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(20,$height_cell,'*) Syarat',0,'','L'); 
$pdf->Cell(52,$height_cell,'1. Fotokopi Akte dan KK',0,'','L'); 
$pdf->Ln();
$pdf->Cell(20,$height_cell,'',0,'','L'); 
$pdf->Cell(52,$height_cell,'2. Uang pendaftaran Rp. 25.000,-',0,'','L'); 

$pdf->Output();
?>