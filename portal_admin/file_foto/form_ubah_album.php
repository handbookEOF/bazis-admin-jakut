<script type="text/javascript">
		function Validasi()
		{  
		
		var nama=document.getElementById('nama').value; 
		var keterangan=document.getElementById('keterangan').value;
		
		if (keterangan=="" && nama=="")
		{
			alert("Tidak ada data yang diubah...!");  return false; 
		}  
		}
</script>

<?php
			include "../asset/sambung_database.php";
				$id_album=$_GET['id_album'];
				$tampil="SELECT*FROM album_foto where id_album_foto = '$id_album'";
				$cek=mysql_query($tampil) or die (mysql_error());
			while ($data=mysql_fetch_array($cek))
			{
				$nama_album=$data['nama_album_foto'];
			} 
?>

<div class="row">
<div class="col-md-12 col-sm-12">
	<form onsubmit="return Validasi();" method="POST" action="logik/logik_admin.php">
	<div class="panel panel-default">
		<div class="panel-heading">
		<div align="center"><strong>Form Ubah Album <?php echo $nama_album; ?></strong></div>
		</div>
		<div class="panel-body">
			<div class="form-group col-md-6 col-sm-6">
			<label>Nama Album Foto</label>
			<input type="nama" class="form-control" id="nama" name="nama" placeholder="Nama Album Foto" />
		</div>
		<div class="form-group col-md-12 col-sm-12">
			<label>Keterangan Album Foto</label>
			<textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder="Keterangan Album Foto"></textarea>
		</div>
		<div class="form-group col-md-12 col-sm-12" align="center">
			<input type="hidden" value="<?php echo $id_album; ?>" name="id_album">
			<input type="hidden" name="perintah" value="ubah_album">
			<input type="submit" value="UBAH ALBUM" class="btn btn-success btn-lg" />
		</div>
		</div>
	</div>
	</form>
</div>
</div>