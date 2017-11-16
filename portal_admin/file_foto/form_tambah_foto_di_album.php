<script type="text/javascript">
		function Validasi()
		{  
		
		var nama=document.getElementById('nama').value; 
		var ffoto=document.getElementById('ffoto').value;
		
		if (ffoto=="" || nama=="")
		{
			alert("Ada form yang belum terisi");  return false; 
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
	<form id="form_foto" onsubmit="return Validasi();" method="POST" action="logik/logik_admin.php" enctype="multipart/form-data">
	<div class="panel panel-default">
		<div class="panel-heading">
		<div align="center"><strong>Form Penambahan Foto Pada Album <?php echo $nama_album; ?></strong></div>
		</div>
		<div class="panel-body">
			<div class="form-group col-md-6 col-sm-6">
			<label>Nama/Keterangan Foto</label>
			<input type="nama" class="form-control" id="nama" name="nama" placeholder="Nama/Keterangan Foto" />
		</div>
		<div class="form-group col-md-12 col-sm-12">
			<label>Pilih Foto</label>
			<input type="file" name="ffoto" id="ffoto" class="button">
		</div>
		<div class="form-group col-md-12 col-sm-12" align="center">
			<input type="hidden" value="<?php echo $id_album; ?>" name="id_album">
			<input type="hidden" value="<?php echo $nama_album; ?>" name="nama_album">
			<input type="hidden" name="perintah" value="tambah_foto">
			<input type="submit" value="SIMPAN FOTO" class="btn btn-success btn-lg" />
		</div>
		</div>
	</div>
	</form>
</div>
</div>