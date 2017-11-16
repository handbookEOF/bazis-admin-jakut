<script type="text/javascript">
		function Validasi()
		{  
		
		var judul=document.getElementById('judul').value; 
		var ffoto=document.getElementById('ffoto').value;
		var isi=document.getElementById('isi').value;
		
		if (ffoto=="" && judul=="" && isi=="")
		{
			alert("Peringatan!Tidak Ada Yang Diubah");  return false; 
		}
		if (isi.length > 0) 
		{ 
			if (isi.length < 200) 
			{alert("Isi berita harus lebih dari 200 charakter...!!!"); return false; }
		} 
		
		}
</script>

<?php
	include ("../asset/sambung_database.php");
	$id_berita	=	$_GET['id_berita'];
	$tampil="SELECT*FROM artikel_berita where id_berita='$id_berita'";
						
	$cek=mysql_query($tampil) or die (mysql_error());
	while ($data=mysql_fetch_array($cek))
	{
		$id_berita	=	$data['id_berita'];
		$foto_berita	=	$data['foto_berita'];
	}
?>

<div class="row">
<div class="col-md-12 col-sm-12">
	<form id="form_foto" onsubmit="return Validasi();" method="POST" action="logik/logik_admin.php" enctype="multipart/form-data">
	<div class="panel panel-default">
		<div class="panel-heading">
		<div align="center"><strong>Form Mengubah Artikel Berita</strong></div>
		</div>
		<div class="panel-body">
			<div class="form-group col-md-6 col-sm-6">
			<label>Judul Artikel Berita</label>
			<input class="form-control" id="judul" name="judul" placeholder="Judul Artikel Berita" />
		</div>
		<div class="form-group col-md-6 col-sm-6">
			<label>Pilih Foto Artikel Berita</label>
			<input type="file" name="ffoto" id="ffoto" class="button">
		</div>
		<div class="form-group col-md-12 col-sm-12">
			<label>Isi Artikel Berita</label>
			<textarea class="form-control" rows="18" id="isi" name="isi" placeholder="Isi Artikel Berita"></textarea>
		</div>
		<div class="form-group col-md-12 col-sm-12" align="center">
			<input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>">
			<input type="hidden" name="foto_berita" value="<?php echo $foto_berita; ?>">
			<input type="hidden" name="perintah" value="ubah_berita">
			<input type="submit" value="SIMPAN PERUBAHAN ARIKEL BERITA" class="btn btn-success btn-lg" />
		</div>
		</div>
	</div>
	</form>
</div>
</div>