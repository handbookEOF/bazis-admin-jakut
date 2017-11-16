<? session_start(); ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>RUANG ANGGOTA BAZIS || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="../asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../asset/css/maintri.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../asset/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
					
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<div class="container">

						<!-- Logo -->
						<section>
							<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<a href="index.php"><img src="../asset/gambar/logo.png" width="420px" height="220px"></a>
								</div>
							</div>
						</section>
					</div>
				</div>
				
			<!-- Main -->
				<div id="main" style="background-image: url('../asset/gambar/latar.jpg');">
					<section class="container">
					
					<div class="tombol_masuk">
					<?php
					if(empty($_SESSION['user_anggota_bazis_jakut'])){?>
						<a href="portal_anggota.php" class="button">MASUK</a>
						<a href="form_daftar_anggota.php" class="button">DAFTAR</a>
					<?php
					}
					else{?>
						<a href="ruang_pribadi.php" class="button">RUANG ANDA</a>
						<a href="logik_anggota.php?perintah=keluar_anggota" class="button">KELUAR</a>
					<?php
					}
					?>
					</div>
					
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2><a href="daftar_anggota.php">ANGGOTA</a></h2>
								<HR>
							</section>
					</div>
					
					<div class="row">
					<?php
						include "../asset/sambung_database.php";
						$tampil="SELECT*FROM anggota ORDER BY id_anggota DESC";
						
						$limit= 12;

						$tampil2=$tampil." LIMIT 0, $limit";
						$cek2=mysql_query($tampil2) or die (mysql_error());
						while ($data=mysql_fetch_array($cek2))
						{
					?>
							<section class="2u 12u(mobile)">
								<div class="box">
								<div class="diskrip">
								<h3><?php echo $data['nama_anggota'];?></h3>
								<a href="lihat_anggota.php?use=<?php echo $data['user_anggota']; ?>" class="image full"><img src="../album_anggota/<?php echo $data['foto_anggota']; ?>" height="120" alt="" /></a>
								<a href="lihat_anggota.php?use=<?php echo $data['user_anggota']; ?>" class="button">Lihat</a>
								</div>
								</div>
							</section>
					<?php
						}
					?>
					</div>
					
					<div class="row">
						<section class="12u 12u(mobile)" align="center">
								<HR>
								<?php
								if(empty($_SESSION['user_anggota_bazis_jakut'])){?>
								<h2><a href="form_daftar_anggota.php">DAFTAR</a></h2>	
								<?php
								}
								else{?>
								<h2>DAFTAR</h2>
								<?php
								}
								?>
								<HR>
						</section>
					</div>
					
					<div class="row">
							<section class="7u 12u(mobile)">
								<h2>KEANGGOTAAN</h2>
								<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
								<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
							</section>
							<section class="5u 12u(mobile)">
								<a href="#" class="image full"><img src="aaa.png" alt="" /></a>
							</section>
					</div>
					
					<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<img align="center" src="../asset/gambar/Beranda1.png" alt="" />
								<h3><a href="../">Kembali Ke Beranda</a></h3>
								<img align="center" src="../asset/gambar/Beranda2.png" alt="" />
								</div>
					</div>
					</section>
				</div>

			<!-- Footer -->
				<?php include "../footer.php"; ?>

		</div>
		
		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>