<script type="text/javascript">
		function Validasi()
		{  
		
		var nama=document.getElementById('nama').value; 
		var keterangan=document.getElementById('keterangan').value;
		
		if (keterangan=="" || nama=="")
		{
			alert("Ada form yang belum terisi");  return false; 
		}  
		}
</script>

<div class="row">
<div class="col-md-12 col-sm-12">
	<form method="post" onsubmit="return Validasi();" action="logik/logik_admin.php">
	<div class="panel panel-default">
		<div class="panel-heading">
		<div align="center"><strong>FORM PENAMBAHAN ALBUM FOTO</strong></div>
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
			<input type="hidden" name="perintah" value="tambah_album_foto">
			<input type="submit" value="BUAT" class="btn btn-success btn-lg" />
		</div>
		</div>
	</div>
	</form>
</div>
</div>