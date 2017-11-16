<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line">File Vidio</h4>
    </div>
</div>

<?php
	if($_GET['perihal']=="vidio")
		{	
			include "daftar_vidio.php";
		}
	if($_GET['perihal']=="tambah_vidio")
		{	
			include "form_tambah_vidio.php";
			include "daftar_vidio.php";
		}
	
?>