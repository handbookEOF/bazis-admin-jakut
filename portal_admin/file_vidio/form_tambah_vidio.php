<script type="text/javascript">
		function Validasi()
		{  
		
		var judul=document.getElementById('judul').value; 
		var vidio=document.getElementById('vidio').value;
		var isi=document.getElementById('isi').value;
		
		if (vidio=="" || judul=="" || isi=="")
		{
			alert("Ada form yang belum terisi");  return false; 
		}
		if (isi.length < 200) 
		{ 
			alert("Isi berita harus lebih dari 200 charakter...!!!"); return false; 
		} 
		
		}
</script>

<div class="row">
<div class="col-md-12 col-sm-12">
	<form id="form_foto" onsubmit="return Validasi();" method="POST" action="logik/logik_admin.php" enctype="multipart/form-data">
	<div class="panel panel-default">
		<div class="panel-heading">
		<div align="center"><strong>Form Penambahan Artikel Berita</strong></div>
		</div>
		<div class="panel-body">
			<div class="form-group col-md-6 col-sm-6">
			<label>Judul Vidio</label>
			<input class="form-control" id="judul" name="judul" placeholder="Judul Vidio" />
		</div>
		<div class="form-group col-md-6 col-sm-6">
			<label>Pilih Vidio</label>
			<input type="file" name="vidio" id="vidio" class="button">
		</div>
		<div class="form-group col-md-12 col-sm-12">
			<label>Isi Keterangan Vidio</label>
			<textarea class="form-control" rows="18" id="isi" name="isi" placeholder="Isi Keterangan Vidio"></textarea>
		</div>
		<div class="form-group col-md-12 col-sm-12" align="center">
			<input type="hidden" name="perintah" value="tambah_vidio">
			<input type="submit" value="SIMPAN VIDIO" class="btn btn-success btn-lg" />
		</div>
		</div>
	</div>
	</form>
</div>
</div>