<? session_start(); ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>RUANG MEMBERI ZIS || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="../asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../asset/css/main.css" />
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
					
					<div class="tombol_masuk" style="position:fixed; display:block; top:20px; right:20px; z-index:9999;">
					<?php
					if(empty($_SESSION['user_anggota_bazis_jakut'])){?>
						<a href="../ruang_anggota/portal_anggota.php?dif=zis" class="button" style="padding: 0.2em;">MASUK</a>
						<a href="../ruang_anggota/form_daftar_anggota.php" class="button" style="padding: 0.2em;">DAFTAR</a>
					<?php
					}
					else{?>
						<a href="../ruang_anggota/ruang_pribadi.php" class="button" style="padding: 0.2em;">RUANG ANDA</a>
						<a href="../ruang_anggota/logik_anggota.php?perintah=keluar_anggota" class="button" style="padding: 0.2em;">KELUAR</a>
					<?php
					}
					?>
					</div>
					
					<div class="row">
								<div class="12u 12u(mobile)" align="center">
									<a href="membayar_zis/" class="button">MEMBAYAR ZIS</a>
									<a href="konfirmasi_zis/" class="button">KONFIRMASI ZIS</a>
									<a href="riwayat_zis/" class="button">RIWAYAT ZIS</a>
								</div>
					</div>
						
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2>Ruang Memberi ZIS Bazis Kota Administrasi Jakarta Utara</h2>
							</section>
					</div>
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
							</section>
					</div>
						
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2>ZIS ( Zakat, Infaq dan Sodakoh )</h2>
							</section>
					</div>
					
					<div class="row">
								<div class="4u 12u(mobile)" align="center">
									<img src="asset/gambar/logojakarta.png" width="125px" height="120px"><br>
									<h3>Zakat</h3>
									<p align="justify">Zakat merupakan suatu kewajiban bagi umat Islam yang digunakan untuk membantu masyarakat lain, menstabilkan ekonomi masyarakat dari kalangan bawah hingga kalangan....</p>
									<a href="../ruang_belajar?mat=zakat" class="button">BACA SELENGKAPNYA</a>
								</div>
								<div class="4u 12u(mobile)" align="center">
									<img src="asset/gambar/logojakarta.png" width="125px" height="120px"><br>
									<h3>Infaq</h3>
									<p align="justify">Infaq adalah mengeluarkan harta yang mencakup zakat (hukumnya wajib) dan non-zakat (hukumnya sunah). Infak wajib di antaranya zakat, kafarat, nazar, dan lain-lain....</p>
									<a href="../ruang_belajar?mat=infak" class="button">BACA SELENGKAPNYA</a>
								</div>
								<div class="4u 12u(mobile)" align="center">
									<img src="asset/gambar/logojakarta.png" width="125px" height="120px"><br>
									<h3>Sodakoh</h3>
									<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
									<a href="../ruang_belajar?mat=sodakoh" class="button">BACA SELENGKAPNYA</a>
								</div>
					</div>
					
					<div class="row">
							<section class="7u 12u(mobile)">
								<h2>Tata Cara Membayar ZIS Melalui Kami</h2>
								<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
								<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
							</section>
							<section class="5u 12u(mobile)">
								<a href="#" class="image full"><img src="aaa.png" alt="" /></a>
							</section>
					</div>
					
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2>Rekening Untuk Membayarkan ZIS Anda</h2>
							</section>
					</div>
					
					<div class="row">
								<div class="4u 12u(mobile)" align="center">
									<img src="asset/gambar/logojakarta.png" width="125px" height="120px"><br>
								</div>
					<div class="4u 12u(mobile)" align="center">
									<img src="asset/gambar/logojakarta.png" width="125px" height="120px"><br>
								</div>
					<div class="4u 12u(mobile)" align="center">
									<img src="asset/gambar/logojakarta.png" width="125px" height="120px"><br>
								</div>
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