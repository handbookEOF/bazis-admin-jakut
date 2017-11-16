<?php
	if (isset($_GET['perihal'])) {
		switch ($_GET['perihal']) {	
			case 'foto' 			:
										if(!file_exists ("foto.php")) 
										die ("File foto.php tidak ada"); 
										include "foto.php"; 
										break;	
			case 'rizis' 			:
										if(!file_exists ("riwayat_zis.php")) 
										die ("File riwayat_zis.php tidak ada"); 
										include "riwayat_zis.php"; 
										break;	
			case 'indas' 			:
										if(!file_exists ("info_dasar.php")) 
										die ("File info_dasar.php tidak ada"); 
										include "info_dasar.php"; 
										break;	
			case 'indasub' 			:
										if(!file_exists ("info_dasar.php")) 
										die ("File info_dasar.php tidak ada"); 
										include "info_dasar.php"; 
										break;	
			case 'password' 			:
										if(!file_exists ("info_dasar.php")) 
										die ("File info_dasar.php tidak ada"); 
										include "info_dasar.php"; 
										break;	
			case 'inpej' 			:
										if(!file_exists ("info_penagung_jawab.php")) 
										die ("File info_penagung_jawab.php tidak ada"); 
										include "info_penagung_jawab.php"; 
										break;	
			case 'inpejta' 			:
										if(!file_exists ("info_penagung_jawab.php")) 
										die ("File info_penagung_jawab.php tidak ada"); 
										include "info_penagung_jawab.php"; 
										break;	
			case 'inpejub' 			:
										if(!file_exists ("info_penagung_jawab.php")) 
										die ("File info_penagung_jawab.php tidak ada"); 
										include "info_penagung_jawab.php"; 
										break;	
										
		}
	}
	else {
		include "info_dasar.php"; 
	}
?>