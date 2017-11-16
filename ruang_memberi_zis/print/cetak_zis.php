<?php
if($_GET['format'] == 1)
{
	$zis	=	$_GET['zis'];
	
	include "../../asset/fpdf16/fpdf.php";
	include "../../asset/sambung_database.php";
	$tampil="SELECT*FROM zis_keranjang where no_zis = '$zis'";
	$cek=mysql_query($tampil) or die (mysql_error());
	while ($data=mysql_fetch_array($cek))
	{
		$user		=	$data['user_anggota'];
		$nama		=	$data['nama'];
		$no_ident	=	$data['no_identitas'];
		$telpon		=	$data['telpon'];
		$alamat		=	$data['alamat'];
		$jenis_zis	=	$data['jenis_zis'];
		$nominal	=	$data['nominal'];
		$terbilang	=	$data['terbilang'];
	}
	
	if(strlen($user) > 0)
	{
		$tampil_user="SELECT*FROM anggota where user_anggota = '$user'";
		$cek_user=mysql_query($tampil_user) or die (mysql_error());
		while ($data_user=mysql_fetch_array($cek_user))
		{
			$nama		=	$data_user['nama_anggota'];
			$no_ident	=	$data_user['no_identitas_anggota'];
			$telpon		=	$data_user['telpon'];
			$alamat		=	$data_user['alamat'];
		}
	}

$pdf = new FPDF('L', 'mm', array(100,280));
$pdf->AddPage();

$pdf->SetFont('Arial','B','24');
$pdf->text(15,10, 'Pembayaran Zakat, Infaq, Shadaqoh dan Amal Jariyah', '0', 1, 'C');
$pdf->line(15, 12, 275, 12);

$pdf->SetFont('Times','','12');
$pdf->text(15,16, 'BAZIS KOTA ADMINISTRASI JAKARTA UTARA');

$pdf->text(15,35, 'Nomer Formulir');
$pdf->text(60,35, ':');
$pdf->text(70,35, $zis);

$pdf->text(15,44, 'Data Umum');
$pdf->line(15, 45, 275, 45);

$pdf->text(15,50, 'Nama');
$pdf->text(60,50, ':');
$pdf->text(70,50, $nama);

$pdf->text(15,55, 'No KTP/NPWP');
$pdf->text(60,55, ':');
$pdf->text(70,55, $no_ident);

$pdf->text(130,50, 'Telpon');
$pdf->text(160,50, ':');
$pdf->text(170,50, $telpon);

$pdf->text(130,55, 'Alamat');
$pdf->text(160,55, ':');
$pdf->text(170,55, $alamat);

$pdf->text(15,64, 'Data Pembayaran '.$jenis_zis);
$pdf->line(15, 65, 275, 65);

$pdf->text(15,70, 'Nominal');
$pdf->text(60,70, ':');
$pdf->text(15,75, 'Rp .'.number_format($nominal));

$pdf->text(15,80, 'Terbilang');
$pdf->text(60,80, ':');
$pdf->text(15,85, $terbilang);

$pdf->output();
}

if($_GET['format'] == 2)
{
	$konzis	=	$_GET['konzis'];
	
	include "../../asset/sambung_database.php";
	include "../../asset/fpdf16/fpdf.php";
	
	$tampil_kon="SELECT*FROM zis_konfirmasi where no_zis_konfirmasi = '$konzis'";
	$cek_kon=mysql_query($tampil_kon) or die (mysql_error());
	while ($data_kon=mysql_fetch_array($cek_kon))
	{
		$zis		=	$data_kon['no_zis'];
		$tgl_kon	=	$data_kon['tanggal'];
		$nm_bank	=	$data_kon['nama_bank'];
		$rek_bank	=	$data_kon['rekening_bank'];
		$pem_bank	=	$data_kon['pemilik_bank'];
		$nom_kon	=	$data_kon['nominal'];
		$ter_kon	=	$data_kon['terbilang'];
	}

$pdf = new FPDF('L', 'mm', array(100,280));
$pdf->AddPage();

$pdf->SetFont('Arial','B','24');
$pdf->text(15,10, 'Konfirmasi Pembayaran Zakat, Infaq, Shadaqoh dan Amal Jariyah', '0', 1, 'C');
$pdf->line(15, 12, 275, 12);

$pdf->SetFont('Times','','12');
$pdf->text(15,16, 'BAZIS KOTA ADMINISTRASI JAKARTA UTARA');

$pdf->text(15,35, 'Nomer Formulir');
$pdf->text(60,35, ':');
$pdf->text(70,35, $zis);
$pdf->text(15,40, 'No.Formulir Konfirmasi');
$pdf->text(60,40, ':');
$pdf->text(70,40, $konzis);

$pdf->text(15,49, 'Data Umum');
$pdf->line(15, 50, 275, 50);

$pdf->text(15,55, 'Tanggal Pembayaran');
$pdf->text(60,55, ':');
$pdf->text(70,55, $tgl_kon);

$pdf->text(15,60, 'Pemilik Rekening');
$pdf->text(60,60, ':');
$pdf->text(70,60, $pem_bank);

$pdf->text(130,55, 'Nama Bank');
$pdf->text(160,55, ':');
$pdf->text(170,55, $nm_bank);

$pdf->text(130,60, 'Nomer Rekening');
$pdf->text(160,60, ':');
$pdf->text(170,60, $rek_bank);

$pdf->text(15,69, 'Data Pembayaran ');
$pdf->line(15, 70, 275, 70);

$pdf->text(15,75, 'Nominal');
$pdf->text(60,75, ':');
$pdf->text(15,80, 'Rp .'.number_format($nom_kon));

$pdf->text(15,85, 'Terbilang');
$pdf->text(60,85, ':');
$pdf->text(15,90, $ter_kon);

$pdf->output();
	
}
?>
