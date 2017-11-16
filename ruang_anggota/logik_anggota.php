<?php

if ($_GET['perintah']=="keluar_anggota"){
	session_start();
	include ("../asset/sambung_database.php");

	unset($_SESSION['user_anggota_bazis_jakut']);
	unset($_SESSION['password_anggota_bazis_jakut']);
	unset($_SESSION['nama_anggota_bazis_jakut']);

	session_destroy();
	
	if($_GET['kon']=="pri")
	echo "<script> alert('Anda Telah Keluar... !');location.href='index.php'</script>";
	else
	echo "<script> alert('Anda Telah Keluar... !');history.back()</script>";
}


if ($_POST['perintah']=="masuk_anggota")
{
	$user=$_POST['user'];
	$password=$_POST['password'];
	
	if($_POST['dif'] == "")
		{	$tujuan = "ruang_pribadi.php";	}
	else if($_POST['dif'] == "zis")
		{	$tujuan = "../ruang_memberi_zis/index.php";	}
	else if($_POST['dif'] == "zisba")
		{	$tujuan = "../ruang_memberi_zis/membayar_zis/index.php";	}
	
	include ("../asset/sambung_database.php");
	$sql="select * from anggota where user_anggota='$user' and password_anggota='$password'";
	$cek=mysql_query($sql);
	$data=mysql_fetch_array($cek);
	if ($data['user_anggota']==$user and $data['password_anggota']==$password)
	{
		session_start();
		$_SESSION['user_anggota_bazis_jakut'] 		= $data['user_anggota'];
		$_SESSION['password_anggota_bazis_jakut'] 	= $data['password_anggota'];
		$_SESSION['nama_anggota_bazis_jakut'] 		= $data['nama_anggota'];
		echo "<script> alert('Selamat Datang $_SESSION[nama_anggota_bazis_jakut]');location.href='".$tujuan."'</script>";
	} else {
		echo "<script> alert('User Anggota atau Password Anda Salah... !');history.back()</script>";
	}
}

if ($_POST['perintah']=="daftar_anggota")
{
	include ("../asset/sambung_database.php");

	$nama		=$_POST['nama'];
	$katagori	=$_POST['katagori'];
	$password	=$_POST['password'];
	$repassword	=$_POST['repassword'];
	$email		=$_POST['email'];
	$telpon		=$_POST['telpon'];
	$alamat		=$_POST['alamat'];
	$js_ident	=$_POST['js_ident'];
	$no_ident	=$_POST['no_ident'];
	$point		=0;
	
	$hr		=date("d");
	$bln	=date("m");
	$thn	=date("Y");

	$tgl	=$hr."-".$bln."-".$thn;
	
	$pgl		="select * from anggota";
	$cek		=mysql_query($pgl)or die (mysql_error());
	$tot_data	=mysql_num_rows($cek);

	$pan_data=strlen($tot_data);

	if($pan_data==1)			$urut="000".$tot_data;
	else if($pan_data==2)		$urut="00".$tot_data;
	else if($pan_data==3)		$urut="0".$tot_data;
	else if(	$pan_data==4)		$urut=$tot_data;

	$user			="zisu".substr($thn,2,2).$urut;
	
	$sql="insert into anggota values ('','$user','$password','$email','$katagori','$nama','$js_ident','$no_ident','','$tgl','$telpon','$alamat','$point')";
	$jalan = mysql_query($sql)or die(mysql_error());
	
	if($jalan==true) {
	echo "<script> alert('Anda Telah Menjadi Anggota Dengan User Anggota ".$user." Atau Silahkan Cek Email Anda Untuk Melihat User Anggota');location.href='portal_anggota.php?user=".$user."'</script>";
	}
}

if ($_POST['perintah']=="ubah_password_anggota")
{
	include ("../asset/sambung_database.php");
	
	$password		=$_POST['password'];
	$user_anggota	=$_POST['user'];
	
	$cek=mysql_query("UPDATE anggota SET password_anggota = '$password' WHERE user_anggota = '$user_anggota'");
	if($cek)
	{
		echo"<script> alert('Password Diupdate...!');location.href='ruang_pribadi.php'</script>";
	}
}

if ($_POST['perintah']=="ubah_info_anggota")
{
	include ("../asset/sambung_database.php");
	
	$user_anggota		=$_POST['user'];
	
	$nama		=$_POST['nama'];
	$katagori	=$_POST['katagori'];
	$email		=$_POST['email'];
	$telpon		=$_POST['telpon'];
	$alamat		=$_POST['alamat'];
	$js_ident	=$_POST['js_ident'];
	$no_ident	=$_POST['no_ident'];
	
	if(strlen($nama) > 0)
		{	$sql_nama = "nama_anggota = '$nama',";	}
	else
		{	$sql_nama = "";	}
	
	if(strlen($email) > 0)
		{	$sql_email = "email_anggota = '$email',";	}
	else
		{	$sql_email = "";	}
	
	if(strlen($telpon) > 0)
		{	$sql_telpon = "telpon = '$telpon',";	}
	else
		{	$sql_telpon = "";	}
	
	if(strlen($alamat) > 0)
		{	$sql_alamat = "alamat= '$alamat',";	}
	else
		{	$sql_alamat = "";	}
	
	if(strlen($no_ident) > 0)
		{	$sql_no_ident = "no_identitas_anggota = '$no_ident',";	}
	else
		{	$sql_no_ident = "";	}
	
	
	$sql="UPDATE anggota SET ".$sql_nama.$sql_email.$sql_telpon.$sql_alamat.$sql_no_ident." jenis_identitas_anggota = '$js_ident', katagori = '$katagori' WHERE user_anggota = '$user_anggota'";
	
	$cek=mysql_query($sql);
	if($cek)
	{
		echo"<script> alert('Info Dasar Anggota Diupdate...!');location.href='ruang_pribadi.php'</script>";
	}
}

if ($_POST['perintah']=="pj_tambah")
{
	include ("../asset/sambung_database.php");
	
	$user_login			=$_POST['user_login'];
	
	$nama		=$_POST['nama'];
	$email		=$_POST['email'];
	$telpon		=$_POST['telpon'];
	$alamat		=$_POST['alamat'];
	
	$sql="insert into pj_anggota values ('','$nama','$telpon','$email','$alamat','$user_login')";
	$jalan = mysql_query($sql)or die(mysql_error());
	if($jalan==true) {
	echo"<script> alert('Info Penanggung Jawab Anggota Telah Ditambah...!');location.href='ruang_pribadi.php?perihal=inpej'</script>";
	}
}

if ($_POST['perintah']=="pj_ubah")
{
	include ("../asset/sambung_database.php");
	
	$user_database		=$_POST['user_database'];
	
	$nama		=$_POST['nama'];
	$email		=$_POST['email'];
	$telpon		=$_POST['telpon'];
	$alamat		=$_POST['alamat'];
	$id		=$_POST['id'];
	
	if(strlen($nama) > 0)
		{	$sql_nama = "nama_pj_anggota = '$nama',";	}
	else
		{	$sql_nama = "";	}
	
	if(strlen($email) > 0)
		{	$sql_email = "email_pj_anggota = '$email',";	}
	else
		{	$sql_email = "";	}
	
	if(strlen($telpon) > 0)
		{	$sql_telpon = "telpon_pj_anggota = '$telpon',";	}
	else
		{	$sql_telpon = "";	}
	
	if(strlen($alamat) > 0)
		{	$sql_alamat = "alamat_pj_anggota = '$alamat',";	}
	else
		{	$sql_alamat = "";	}
	
	$sql="UPDATE pj_anggota SET ".$sql_nama.$sql_email.$sql_telpon.$sql_alamat." id_pj_anggota='$id'  WHERE user_anggota = '$user_database'";
	
	$jalan = mysql_query($sql)or die(mysql_error());
	if($jalan==true) {
	echo"<script> alert('Info Penanggung Jawab Anggota Telah Diubah...!');location.href='ruang_pribadi.php?perihal=inpej'</script>";
	}
}

?>