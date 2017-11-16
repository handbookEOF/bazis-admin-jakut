<?php
	if (isset($_GET['mat'])) {
		switch ($_GET['mat']) {	
			case 'zakat' 			:
										if(!file_exists ("zakat.php")) 
										die ("File zakat.php tidak ada"); 
										include "zakat.php"; 
										break;
			case 'infak' 			:
										if(!file_exists ("infak.php")) 
										die ("File infak.php tidak ada"); 
										include "infak.php"; 
										break;
			
	}
	}
	else {
		include "daftar_materi.html"; 
	}
?>