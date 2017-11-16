<?php
	if (isset($_GET['perihal'])) {
		switch ($_GET['perihal']) {	
			case 'foto' 			:
										if(!file_exists ("file_foto/foto.php")) 
										die ("File foto.php tidak ada"); 
										include "file_foto/foto.php"; 
										break;	
			case 'tambah_album' 			:
										if(!file_exists ("file_foto/foto.php")) 
										die ("File foto.php tidak ada"); 
										include "file_foto/foto.php"; 
										break;	
			case 'album_foto' 			:
										if(!file_exists ("file_foto/foto.php")) 
										die ("File foto.php tidak ada"); 
										include "file_foto/foto.php"; 
										break;	
			case 'tambah_foto' 			:
										if(!file_exists ("file_foto/foto.php")) 
										die ("File foto.php tidak ada"); 
										include "file_foto/foto.php"; 
										break;	
			case 'ubah_album' 			:
										if(!file_exists ("file_foto/foto.php")) 
										die ("File foto.php tidak ada"); 
										include "file_foto/foto.php"; 
										break;	
			case 'anggota' 			:
										if(!file_exists ("file_anggota/anggota.php")) 
										die ("File anggota.php tidak ada"); 
										include "file_anggota/anggota.php"; 
										break;	
			case 'berita' 			:
										if(!file_exists ("file_berita/berita.php")) 
										die ("File berita.php tidak ada"); 
										include "file_berita/berita.php"; 
										break;	
			case 'tambah_berita' 			:
										if(!file_exists ("file_berita/berita.php")) 
										die ("File berita.php tidak ada"); 
										include "file_berita/berita.php"; 
										break;	
			case 'lihat_berita' 			:
										if(!file_exists ("file_berita/berita.php")) 
										die ("File berita.php tidak ada"); 
										include "file_berita/berita.php"; 
										break;	
			case 'ubah_berita' 			:
										if(!file_exists ("file_berita/berita.php")) 
										die ("File berita.php tidak ada"); 
										include "file_berita/berita.php"; 
										break;	
			case 'vidio' 			:
										if(!file_exists ("file_vidio/vidio.php")) 
										die ("File vidio.php tidak ada"); 
										include "file_vidio/vidio.php"; 
										break;	
			case 'tambah_vidio' 			:
										if(!file_exists ("file_vidio/vidio.php")) 
										die ("File vidio.php tidak ada"); 
										include "file_vidio/vidio.php"; 
										break;	
			
		}
	}
	else {
		include "info_dasar.php"; 
	}
?>