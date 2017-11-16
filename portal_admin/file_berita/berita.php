<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line">File Berita</h4>
    </div>
</div>

<?php
	if($_GET['perihal']=="berita")
		{	
			include "daftar_artikel_berita.php";
		}
	
	else if($_GET['perihal']=="tambah_berita")
		{	
			include "form_tambah_artikel_berita.php";
			include "daftar_artikel_berita.php";
		}
	else if($_GET['perihal']=="lihat_berita")
		{	
			include "lihat_berita.php";
		}
	else if($_GET['perihal']=="ubah_berita")
		{	
			include "form_ubah_berita.php";
			include "lihat_berita.php";
		}
	
	
?>