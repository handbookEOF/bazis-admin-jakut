<?php

if ($_GET['perintah']=="sampul")
{
	include ("../../asset/sambung_database.php");
	
	$foto		=	$_GET['foto'];
	$id_album	=	$_GET['id_album'];
	
	$cek=mysql_query("UPDATE album_foto SET sampul_album_foto = '$foto' WHERE id_album_foto = '$id_album'");
	if($cek)
	{
		echo"<script> alert('Sampul Album Telah Diganti...!');location.href='../?perihal=album_foto&id_album=".$id_album."'</script>";
	}
}

if ($_GET['perintah']=="admin_keluar")
{
	session_start();
	include ("../../asset/sambung_database.php");

	unset($_SESSION['user_admin_bazis_jakut']);
	unset($_SESSION['password']);

	session_destroy();
	
	echo "<script> alert('Anda Telah Keluar... !');location.href='../'</script>";
}

if ($_POST['perintah']=="admin_masuk")
{
	$user_admin_bazis_jakut	=	$_POST['user'];
	$password				=	$_POST['pass'];
	
	include ("../../asset/sambung_database.php");
	$sql="select * from admin_bazis_jakut where user_admin_bazis_jakut='$user_admin_bazis_jakut' and password='$password'";
	$cek=mysql_query($sql);
	$data=mysql_fetch_array($cek);
	if ($data['user_admin_bazis_jakut']==$user_admin_bazis_jakut and $data['password']==$password)
	{
		session_start();
		$_SESSION['user_admin_bazis_jakut'] 		= $data['user_admin_bazis_jakut'];
		$_SESSION['password']					 	= $data['password'];
		echo "<script> alert('Selamat Datang');location.href='../'</script>";
	} else {
		echo "<script> alert('User Anggota atau Password Anda Salah... !');history.back()</script>";
	}
}

if ($_POST['perintah']=="tambah_album_foto")
{
	$nama		=	$_POST['nama'];
	$keterangan	=	$_POST['keterangan'];
	
	$hr		=date("d");
	$bln	=date("m");
	$thn	=date("Y");

	$tgl	=$hr."-".$bln."-".$thn;
	
	include ("../../asset/sambung_database.php");
	
	$sql="insert into album_foto values ('','','$nama','$tgl','$keterangan')";
	$jalan = mysql_query($sql)or die(mysql_error());
	
	if($jalan==true) {
	echo "<script> alert('Album Foto Telah Dibuat Silahkan Upload Foto dan Tentukan Sampul Album');location.href='../?perihal=foto'</script>";
	}
}

if ($_POST['perintah']=="ubah_album")
{
	include ("../../asset/sambung_database.php");
	
	$nama		=	$_POST['nama'];
	$keterangan	=	$_POST['keterangan'];
	$id_album	=	$_POST['id_album'];

	$p_nama			=	strlen($nama);
	$p_keterangan	=	strlen($keterangan);
	
	if($p_nama == 0)
		{	$syntax="UPDATE album_foto SET keterangan_album_foto = '$keterangan' WHERE id_album_foto = '$id_album'";	}
	else if($p_keterangan == 0)
		{	$syntax="UPDATE album_foto SET nama_album_foto = '$nama' WHERE id_album_foto = '$id_album'";	}
	else
		{	$syntax="UPDATE album_foto SET nama_album_foto = '$nama', keterangan_album_foto = '$keterangan' WHERE id_album_foto = '$id_album'";	}
	
	$cek=mysql_query($syntax);
	if($cek)
	{
		echo"<script> alert('Data Album Foto Telah Di Ubah...!');location.href='../?perihal=album_foto&id_album=".$id_album."'</script>";
	}
}

if ($_GET['perintah']=="hapus_album")
{
	include ("../../asset/sambung_database.php");
	
	$id_album	=	$_GET['id_album'];
	
	$tampil_isi="SELECT*FROM album_foto_isi where id_album_foto = '$id_album'";
	$cek_isi=mysql_query($tampil_isi) or die (mysql_error());
	while ($data_isi=mysql_fetch_array($cek_isi))
	{
		//hapus file foto
		unlink('../../album_foto/'.$data_isi['lokasi_foto']);
	}
	
	//hapus data isi foto
	$syntak="delete from album_foto_isi where id_album_foto='$id_album'";
	$cek=mysql_query($syntak)or die(mysql_error());
	
	//hapus data album
	$syntax="delete from album_foto where id_album_foto='$id_album'";
	$cex=mysql_query($syntax)or die(mysql_error());
	
	if($cex)
	{
		echo"<script> alert('Album Foto Dan Foto Dalam Album Telah Dihapus...!');location.href='../?perihal=foto'</script>";
	}
}

if ($_POST['perintah']=="tambah_foto")
{
	include ("../../asset/sambung_database.php");
	
	$nama		=	$_POST['nama'];
	$id_album	=	$_POST['id_album'];
	$nama_album	=	$_POST['nama_album'];
	
	//Uploading foto...
	$idImg 	= uniqid($nama_album);
	$asal 	= $_FILES['ffoto']['tmp_name'];
	$tujuan = "../../album_foto/".$idImg.$_FILES['ffoto']['name'];
	move_uploaded_file($asal, $tujuan);
	$simpanfoto=$idImg.$_FILES['ffoto']['name'];

	//Simpan
	$syntak="insert into album_foto_isi values ('','$simpanfoto','$nama','$id_album')";
	$cek=mysql_query($syntak)or die(mysql_error());
	if($cek)
	{
		echo"<script> alert('Foto Ditambah...!');location.href='../?perihal=album_foto&id_album=".$id_album."'</script>";
	}

}

if ($_GET['perintah']=="hapus_foto")
{
	include ("../../asset/sambung_database.php");
	
	$nama		=	$_GET['nama'];
	$id_album	=	$_GET['id_album'];
	$id_foto	=	$_GET['id_foto'];
	
	//hapus file
	unlink('../../album_foto/'.$nama);
	
	//hapus dari database
	$syntak="delete from album_foto_isi where id_foto='$id_foto'";
	$cek=mysql_query($syntak)or die(mysql_error());
	if($cek)
	{
		echo"<script> alert('Foto Dihapus...!');location.href='../?perihal=album_foto&id_album=".$id_album."'</script>";
	}
}

if ($_POST['perintah']=="tambah_berita")
{
	include ("../../asset/sambung_database.php");
	
	$judul		=	$_POST['judul'];
	$isi		=	$_POST['isi'];
	
	$hr		=date("d");
	$bln	=date("m");
	$thn	=date("Y");

	$tgl	=$hr."-".$bln."-".$thn;
	
	//Uploading foto...
	$idImg 	= uniqid("berita");
	$asal 	= $_FILES['ffoto']['tmp_name'];
	$tujuan = "../../album_berita/".$idImg.$_FILES['ffoto']['name'];
	move_uploaded_file($asal, $tujuan);
	$simpanfoto=$idImg.$_FILES['ffoto']['name'];

	//Simpan
	$syntak="insert into artikel_berita values ('','$judul','$tgl','$simpanfoto','$isi')";
	$cek=mysql_query($syntak)or die(mysql_error());
	if($cek)
	{
		echo"<script> alert('Artikel Telah Diterbitkan');location.href='../?perihal=berita'</script>";
	}

}

if ($_GET['perintah']=="hapus_berita")
{
	include ("../../asset/sambung_database.php");
	
	$id_berita	=	$_GET['id_berita'];
	$foto_berita=	$_GET['foto_berita'];
	
	//hapus file foto
	unlink('../../album_berita/'.$foto_berita);
	
	$syntak="delete from artikel_berita where id_berita='$id_berita'";
	$cek=mysql_query($syntak)or die(mysql_error());
	
	if($cek)
	{
		echo"<script> alert('Artikel Berita Telah Dihapus...!');location.href='../?perihal=berita'</script>";
	}
}

if ($_POST['perintah']=="ubah_berita")
{
	include ("../../asset/sambung_database.php");
	
	$judul		=	$_POST['judul'];
	$foto_berita=	$_POST['foto_berita'];
	$isi		=	$_POST['isi'];
	$id_berita	=	$_POST['id_berita'];

	$p_judul	=	strlen($judul);
	$p_isi		=	strlen($isi);
	
	if($p_judul > 0)
		{	
			$syntax="UPDATE artikel_berita SET judul_berita = '$judul' WHERE id_berita = '$id_berita'";
			mysql_query($syntax);
		}
	if($p_isi > 0)
		{	
			$syntax="UPDATE artikel_berita SET isi_berita = '$isi' WHERE id_berita = '$id_berita'";
			mysql_query($syntax);
		}
	if(empty($_FILES['ffoto']['tmp_name']))
		{	
			
		}
	else
		{
			//hapus file
			unlink('../../album_berita/'.$foto_berita);
			
			//Uploading foto...
			$idImg 	= uniqid("berita");
			$asal 	= $_FILES['ffoto']['tmp_name'];
			$tujuan = "../../album_berita/".$idImg.$_FILES['ffoto']['name'];
			move_uploaded_file($asal, $tujuan);
			$simpanfoto=$idImg.$_FILES['ffoto']['name'];
			
			$syntax="UPDATE artikel_berita SET foto_berita = '$simpanfoto' WHERE id_berita = '$id_berita'";
			mysql_query($syntax);
		}
	echo"<script> alert('Artikel Berita telah Di Ubah');location.href='../?perihal=lihat_berita&id_berita=".$id_berita."'</script>";
}

?>