<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line">File Foto</h4>
    </div>
</div>

<?php
	if($_GET['perihal']=="foto")
		{	
			include "tampil_daftar_album.php";
		}
	
	else if($_GET['perihal']=="tambah_album")
		{	
			include "form_tambah_album_foto.php";
			include "tampil_daftar_album.php";
		}
	
	else if($_GET['perihal']=="album_foto")
		{
			include "tampil_album_foto.php";
		}
	else if($_GET['perihal']=="tambah_foto")
		{
			include "form_tambah_foto_di_album.php";
			include "tampil_album_foto.php";
		}
	else if($_GET['perihal']=="ubah_album")
		{
			include "form_ubah_album.php";
			include "tampil_album_foto.php";
		}
	
?>