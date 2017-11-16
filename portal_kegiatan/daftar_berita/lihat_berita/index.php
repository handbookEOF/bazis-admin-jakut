<!DOCTYPE HTML>

<html>
	<head>
		<title>PORTAL KEGIATAN || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="../../../asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../../../asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../../asset/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../../../asset/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage" style="box-shadow: 0px 0px 15px 15px green;">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header" style="background-image: url('../../../asset/gambar/foto.png'); background-repeat: no-repeat; background-position:55% 15%;">
					<div class="container">

						<!-- Logo -->
						<section>
							<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<a href="index.php"><img src="../../../asset/gambar/logojakarta.png" width="85px" height="80px"></a>
								<br>
								<br>
								<a href="index.php"><img src="../../../asset/gambar/portalberita.png" width="560px" height="200px"></a>
								</div>
							</div>
						</section>
					</div>
				</div>
				
			<!-- Main -->
				<div id="main" style="background-image: url('../../../asset/gambar/latar.jpg');">
					<section class="container">
					
					<?php
						include ("../../../asset/sambung_database.php");
						$id_berita=$_GET['id_berita'];
						$tampil="SELECT*FROM artikel_berita where id_berita ='$id_berita'";
						$cek2=mysql_query($tampil) or die (mysql_error());
						while ($data=mysql_fetch_array($cek2))
						{
					?>
					<div class="row">
					<section class="12u 12u(mobile)" align="center">
						<h2><?php echo $data['judul_berita']; ?></h2>
						<hr>
						<div align="center"><img src="../../../album_berita/<?php echo $data['foto_berita']; ?>" alt=""/></div>
						<div align="justify"><?php echo "<strong>".$data['tanggal_berita']." : </strong>".$data['isi_berita']; ?></div>
					</section>					
					</div>
					<?php
						}
					?>
					
					
					<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<img align="center" src="../../../asset/gambar/Beranda1.png" alt="" />
								<h3><a href="javascript:history.back()">Kembali Ke Daftar Berita</a></h3>
								<img align="center" src="../../../asset/gambar/Beranda2.png" alt="" />
								</div>
					</div>
					</section>
				</div>

			<!-- Footer -->
				<?php include "../../../footer.php"; ?>

		</div>

		<!-- Scripts -->
			<script src="../../../assets/js/jquery.min.js"></script>
			<script src="../../../assets/js/jquery.dropotron.min.js"></script>
			<script src="../../../assets/js/skel.min.js"></script>
			<script src="../../../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../../../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../../../assets/js/main.js"></script>

	</body>
</html>