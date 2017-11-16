<?php
	session_start();
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="asset/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="asset/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" type="text/css" href="asset/slider/style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slideshow with jmpress.js" />
        <meta name="keywords" content="jmpress, slideshow, container, plugin, jquery, css3" />
        <meta name="author" content="for Codrops" />
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="asset/slider/css/style.css" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="asset/slider/css/style_ie.css" />
		<![endif]-->
		<!-- jQuery -->
		<script type="text/javascript" src="asset/slider/js/jquery-1.9.1.min.js"></script>
		<!-- jmpress plugin -->
		<script type="text/javascript" src="asset/slider/js/jmpress.min.js"></script>
		<!-- jmslideshow plugin : extends the jmpress plugin -->
		<script type="text/javascript" src="asset/slider/js/jquery.jmslideshow.js"></script>
		<script type="text/javascript" src="asset/slider/js/modernizr.custom.48780.js"></script>
		
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header" style="background-image: url('asset/gambar/langit.jpg'); background-repeat: no-repeat; background-position:90% 55%;">
					<div class="container">

						<!-- Logo -->
							<div id="logo">
								<img src="asset/gambar/logojakarta.png" width="125px" height="120px">
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="portal_kegiatan/">
										Portal<br>Kegiatan
									</a></li>
									<li><a href="galeri_bazis">
										Galeri<br>Bazis
									</a></li>
									<li><a href="ruang_belajar/">
										Ruang<br>Belajar
									</a></li>
									<li><a href="perkenalan_bazis">
										Perkenalan<br>Bazis
									</a></li>
									<li><a href="laporan_keuangan/">
										Laporan<br>Keuangan
									</a></li>
								</ul>
							</nav>
							
							<ljak id="ljak">
								<a href="index.php"><img src="asset/gambar/logobaziskotaadministrasijakartautara.png" width="240px" height="130px"></a>
							</ljak>


					</div>
				</div>

				<div id="main" style="background-image: url('asset/gambar/latar.jpg');">
					<div class="container">
						<section>
							<div class="row">
								<div class="4u 12u(mobile)" align="center">
									<a href="ruang_memberi_zis/"><img src="asset/gambar/ruangmemberizis.png" width="350px" height="250px"></a>
								</div>
								<div class="4u 12u(mobile)" align="center">
									<a href="ruang_anggota/"><img src="asset/gambar/ruanganggota.png" width="390px" height="250px"></a>
								</div>
								<div class="4u 12u(mobile)" align="center">
									<a href="ruang_penerima_zis/"><img src="asset/gambar/ruangpenerimazis.png" width="350px" height="250px"></a>
								</div>
							</div>
						</section>
					</div>
				</div>

			<!-- Featured -->
				<div id="featured">
						<section>
							<?php include "slider.html"; ?>
						</section>
				</div>
				
			<!-- Main -->
				<div id="main" style="background-image: url('asset/gambar/latar.jpg');">
					<section class="container">
					<div class="row">
							<section class="7u 12u(mobile)">
								<h2>Hari Hari Hari. S</h2>
								
								<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
								<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
							</section>
							<section class="5u 12u(mobile)">
								<a href="#" class="image full"><img src="aaa.png" alt="" /></a>
							</section>
					</div>
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2><a href="portal_kegiatan/daftar_berita/">Portal Berita</a></h2>
							</section>
					</div>
					
					<div class="row">
					<?php
						include ("asset/sambung_database.php");
						
						$start = 0;
						$limit= 3;
						$tampil="SELECT*FROM artikel_berita order by id_berita desc LIMIT $start, $limit";
						$cek=mysql_query($tampil) or die (mysql_error());
						while ($data=mysql_fetch_array($cek))
						{
							$hit_ket=strlen($data['isi_berita']);
							if($hit_ket >= 45)
								{	$ket=substr($data['isi_berita'],0,45)."...";	}
							else
								{	$ket=$data['isi_berita']; }
					?>
							<section class="4u 12u(mobile)">
								<div class="box">
								<h3><a href="portal_kegiatan/daftar_berita/lihat_berita/?id_berita=<?php echo $data['id_berita']; ?>"><?php echo $data['judul_berita']; ?></a></h3>
								<div class="diskrip">
								<a href="portal_kegiatan/daftar_berita/lihat_berita/?id_berita=<?php echo $data['id_berita']; ?>" class="image full"><img src="album_berita/<?php echo $data['foto_berita']; ?>" alt="" width="150" height="150"/></a>
								<?php echo $data['tanggal_berita']." : ".$ket; ?>
								<a href="portal_kegiatan/daftar_berita/lihat_berita/?id_berita=<?php echo $data['id_berita']; ?>" class="button">Selengkapnya</a>
								</div>
								</div>
							</section>
					<?php
						}
					?>
					</div>
				</div>

			<!-- Footer -->
				<?php include "footer.php"; ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>