<!DOCTYPE HTML>

<html>
	<head>
		<title>PORTAL KEGIATAN || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="../asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../asset/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../asset/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage" style="box-shadow: 0px 0px 15px 15px green;">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header" style="background-image: url('../asset/gambar/foto.png'); background-repeat: no-repeat; background-position:55% 15%;">
					<div class="container">

						<!-- Logo -->
						<section>
							<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<a href="index.php"><img src="../asset/gambar/logojakarta.png" width="85px" height="80px"></a>
								<br>
								<br>
								<a href="index.php"><img src="../asset/gambar/portalberita.png" width="560px" height="200px"></a>
								</div>
							</div>
						</section>
					</div>
				</div>
				
			<!-- Main -->
				<div id="main" style="background-image: url('../asset/gambar/latar.jpg');">
					<section class="container">
					
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2><a href="portal_berita/">Portal Kegiatan Bazis Kota Administrasi Jakarta Utara</a></h2>
							</section>
					</div>
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
							</section>
					</div>
					
					<div class="row">
					<?php
						include ("../asset/sambung_database.php");
						
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
								<h3><a href="daftar_berita/lihat_berita/?id_berita=<?php echo $data['id_berita']; ?>"><?php echo $data['judul_berita']; ?></a></h3>
								<div class="diskrip">
								<a href="daftar_berita/lihat_berita/?id_berita=<?php echo $data['id_berita']; ?>" class="image full"><img src="../album_berita/<?php echo $data['foto_berita']; ?>" alt="" width="150" height="150"/></a>
								<?php echo $data['tanggal_berita']." : ".$ket; ?>
								<a href="daftar_berita/lihat_berita/?id_berita=<?php echo $data['id_berita']; ?>" class="button">Selengkapnya</a>
								</div>
								</div>
							</section>
					<?php
						}
					?>
					</div>
					
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h3><a href="daftar_berita/">Lihat Lebih Banyak</a></h3>
								<hr>
							</section>
					</div>
						
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2>5 Program Kami</h2>
							</section>
					</div>
					<div class="row">
							<section class="4u 12u(mobile)">
								<div class="box">
								<h3><a href="jakarta_bertaqwa/">Jakarta Bertaqwa</a></h3>
								<div class="diskrip">
								<a href="jakarta_bertaqwa/" class="image full"><img src="aaa.png" alt="" /></a>
								TGL : 12/12/2016<BR>
								Khitanan masal yang dilakukan di Masjid Al-Nabawi berjalan deng....
								<a href="jakarta_bertaqwa/" class="button">Selengkapnya</a>
								</div>
								</div>
							</section>
					<section class="4u 12u(mobile)">
								<div class="box">
								<h3><a href="#">Jakarta Cerdas</a></h3>
								<div class="diskrip">
								<a href="#" class="image full"><img src="aaa.png" alt="" /></a>
								TGL : 12/12/2016<BR>
								Khitanan masal yang dilakukan di Masjid Al-Nabawi berjalan deng....
								<a href="#" class="button">Selengkapnya</a>
								</div>
								</div>
							</section>
					<section class="4u 12u(mobile)">
								<div class="box">
								<h3><a href="jakarta_mandiri/">Jakarta Mandiri</a></h3>
								<div class="diskrip">
								<a href="jakarta_mandiri/" class="image full"><img src="aaa.png" alt="" /></a>
								TGL : 12/12/2016<BR>
								Khitanan masal yang dilakukan di Masjid Al-Nabawi berjalan deng....
								<a href="jakarta_mandiri/" class="button">Selengkapnya</a>
								</div>
								</div>
							</section>
					</div>
					
					<div class="row">
							<section class="4u 12u(mobile)">
								<div class="box">
								<h3><a href="jakarta_peduli/">Jakarta Peduli</a></h3>
								<div class="diskrip">
								<a href="jakarta_peduli/" class="image full"><img src="aaa.png" alt="" /></a>
								TGL : 12/12/2016<BR>
								Khitanan masal yang dilakukan di Masjid Al-Nabawi berjalan deng....
								<a href="jakarta_peduli/" class="button">Selengkapnya</a>
								</div>
								</div>
							</section>
							<section class="4u 12u(mobile)">
								
							</section>
							<section class="4u 12u(mobile)">
								<div class="box">
								<h3><a href="jakarta_sadar_zakat/">Jakarta Sadar Zakat</a></h3>
								<div class="diskrip">
								<a href="jakarta_sadar_zakat/" class="image full"><img src="aaa.png" alt="" /></a>
								TGL : 12/12/2016<BR>
								Khitanan masal yang dilakukan di Masjid Al-Nabawi berjalan deng....
								<a href="jakarta_sadar_zakat/#" class="button">Selengkapnya</a>
								</div>
								</div>
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