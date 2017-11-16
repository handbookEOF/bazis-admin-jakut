<!DOCTYPE HTML>

<html>
	<head>
		<title>GALERI VIDIO || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="../../../asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../../../asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../../asset/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../../../asset/css/ie8.css" /><![endif]-->
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
								<a href="index.php"><img src="../../../asset/gambar/logo.png" width="420px" height="220px"></a>
								</div>
							</div>
						</section>
					</div>
				</div>
				
				<div id="main" style="background-image: url('../../../asset/gambar/latar.jpg');">
				<section class="container">
					
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
							<?php
							include "../../../asset/sambung_database.php";
							
							$id_vidio=$_GET['id_album_vidio'];
							$tampil="SELECT*FROM album_vidio where id_album_vidio = '$id_vidio'";
							$cek=mysql_query($tampil) or die (mysql_error());
							while ($data=mysql_fetch_array($cek))
							{
								$lokasi=$data['lokasi_album_vidio'];
								$tanggal=$data['tanggal_album_vidio'];
								$keterangan=$data['keterangan_album_vidio'];
							?>
								<h2><?php echo $data['nama_album_vidio']; ?></h2>
							<?php } ?>
							</section>
					</div>
					
					<div class="row">
						<section class="12u 12u(mobile)" align="center">
							<video width="850px" height="460px" controls="true" autoplay="true"> 
								<source src="../../../album_vidio/<?php echo $lokasi; ?>" type="video/mp4"> 
							</video>
							<br>
							<?php echo $tanggal; ?>
							<p align="justify"><?php echo $keterangan; ?></p>
						</section>
					</div>

					<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<img align="center" src="../../../asset/gambar/Beranda1.png" alt="" />
								<h3><a href="javascript:history.back()">Kembali Ke Galeri Vidio</a></h3>
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