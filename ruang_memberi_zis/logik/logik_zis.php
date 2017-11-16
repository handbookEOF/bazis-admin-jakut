<?php
if($_POST['logik_perintah'] == "pembayaran")
{
	include ("../../asset/sambung_database.php");
	
	$user_anggota	=	$_POST['user_anggota'];
	$nama			=	$_POST['nama'];
	$no_ident		=	$_POST['no_ident'];
	$telpon			=	$_POST['telpon'];
	$alamat			=	$_POST['alamat'];
	$jenis_zis		=	$_POST['jenis_zis'];
	$nominal		=	$_POST['nominal'];
	$terbilang		=	$_POST['terbilang'];
	$point			=	$nominal/1000;
	$status			=	0;
	
	$hr			=date("d");
	$bln		=date("m");
	$thn		=date("Y");
	
	$tgl		=$hr."-".$bln."-".$thn;
	
	$pgl		="select * from zis_keranjang";
	$cek		=mysql_query($pgl)or die (mysql_error());
	$tot_data	=mysql_num_rows($cek);

	$pan_data=strlen($tot_data);

	if($pan_data==1)			$urut="000".$tot_data;
	else if($pan_data==2)		$urut="00".$tot_data;
	else if($pan_data==3)		$urut="0".$tot_data;
	else if($pan_data==4)		$urut=$tot_data;

	$zis			="zis".$bln.substr($thn,2,2).$urut;
	
	$sql="insert into zis_keranjang values ('','$zis','$tgl','$user_anggota','$nama','$no_ident','$telpon','$alamat','$jenis_zis','$nominal','$terbilang','$point','$status')";
	$jalan = mysql_query($sql)or die(mysql_error());
	if($jalan==true) {
	echo "<script> alert('Terimakasih Telah Mengisi Form Pembayaran ZIS, Mohon Segera Lakukan Pembayaran dan Konfirmasi Pembayaran...');location.href='../print?perihal=pembayaran_zis&zis=".$zis."'</script>";
	}
	
}

if($_POST['logik_perintah'] == "konfirmasi")
{
	include ("../../asset/sambung_database.php");
	
	$zis				=	$_POST['zis'];
	$tanggal			=	$_POST['tanggal'];
	$nama_bank			=	$_POST['nama_bank'];
	$rekening_bank		=	$_POST['rekening_bank'];
	$pemilik_rekening	=	$_POST['pemilik_rekening'];
	$nominal			=	$_POST['nominal'];
	$terbilang			=	$_POST['terbilang'];
	
	$bln		=date("m");
	$thn		=date("Y");
	
	$pgl		="select * from zis_konfirmasi";
	$cek		=mysql_query($pgl)or die (mysql_error());
	$tot_data	=mysql_num_rows($cek);

	$pan_data=strlen($tot_data);

	if($pan_data==1)			$urut="000".$tot_data;
	else if($pan_data==2)		$urut="00".$tot_data;
	else if($pan_data==3)		$urut="0".$tot_data;
	else if($pan_data==4)		$urut=$tot_data;

	$konzis			="konzis".$bln.substr($thn,2,2).$urut;
	
	$sql="insert into zis_konfirmasi values ('','$zis','$konzis','$tanggal','$nama_bank','$rekening_bank','$pemilik_rekening','$nominal','$terbilang','')";
	$jalan = mysql_query($sql)or die(mysql_error());

	//Uploading foto...
	$idImg 	= uniqid("BUKTI");
	$asal 	= $_FILES['ffoto']['tmp_name'];
	$tujuan = "../../album_bukti/".$idImg.$_FILES['ffoto']['name'];
	move_uploaded_file($asal, $tujuan);
	$simpanfoto=$idImg.$_FILES['ffoto']['name'];
	
	//Update database simpan foto
	$cek=mysql_query("UPDATE zis_konfirmasi SET bukti = '$simpanfoto' WHERE no_zis_konfirmasi = '$konzis'");
	
	//Update database ganti status
	$status=1;
	$perubahan=mysql_query("UPDATE zis_keranjang SET status = '$status' WHERE no_zis = '$zis'");
	
	echo "<script> alert('Terimakasih Telah Mengisi Form Konfirmasi Pembayaran ZIS');location.href='../print?perihal=konfirmasi_zis&konzis=".$konzis."'</script>";
}
?>