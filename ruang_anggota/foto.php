<?php
	$tampil="SELECT*FROM anggota where user_anggota = '$user_anggota'";
	$cek=mysql_query($tampil) or die (mysql_error());
	while ($data=mysql_fetch_array($cek))
	{
		$foto_anggota = $data['foto_anggota'];
?>
	<h3><?php echo $data['nama_anggota'];?></h3>
	<img src="../album_anggota/<?php echo $data['foto_anggota'];?>" class="centered" height="200px">
<?php
	}
?>

<form id="form_foto" method="POST" action="?perihal=foto&work=foto" enctype="multipart/form-data">
	<input type="hidden" name="proc" id="proc" value="update_photo" />
	<input type="hidden" value="<?php echo $_SESSION['user_anggota_bazis_jakut']; ?>" name="user">
	<input type="hidden" value="<?php echo $foto_anggota; ?>" name="foto_anggota">
	<input type="file" name="ffoto" id="ffoto" class="button">
	<input type="submit" value="Ubah Foto" class="button">
</form>	

<?php
	
	if($_GET['work']=="foto")
{
$user_anggota=$_POST['user'];
$foto_anggota=$_POST['foto_anggota'];

if($foto_anggota=="")
{

}
else
{
	//hapus foto lama
	unlink('../album_anggota/'.$foto_anggota);
}

//Uploading foto...
$idImg 	= uniqid("anggota");
$asal 	= $_FILES['ffoto']['tmp_name'];
$tujuan = "../album_anggota/".$idImg.$_FILES['ffoto']['name'];
move_uploaded_file($asal, $tujuan);
$simpanfoto=$idImg.$_FILES['ffoto']['name'];

//Update database
$cek=mysql_query("UPDATE anggota SET foto_anggota = '$simpanfoto' WHERE user_anggota = '$user_anggota'");
if($cek)
	{
		echo"<script> alert('Foto Diupdate...!');location.href='?perihal=foto'</script>";
	}
}

?>