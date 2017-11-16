<?php
	if (isset($_GET['lap'])) {
		switch ($_GET['lap']) {	
			case 'lap' 			:
										if(!file_exists ("pdf.php")) 
										die ("File pdf.php tidak ada"); 
										include "pdf.php"; 
										break;
			
	}
	}
	else {
		include "daftar_laporan.php"; 
	}
?>