<!DOCTYPE HTML>

<html>
	<head>
		<title>GALERI VIDIO || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="../../asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../../asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../asset/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../../asset/css/ie8.css" /><![endif]-->
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
								<a href="index.php"><img src="../../asset/gambar/logo.png" width="420px" height="220px"></a>
								</div>
							</div>
						</section>
					</div>
				</div>
				
				<div id="main" style="background-image: url('../../asset/gambar/latar.jpg');">
				<section class="container">
					
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2>GALERI VIDIO</h2>
							</section>
					</div>
				
						<?php
						include "../../asset/sambung_database.php";
						$tampil="SELECT*FROM album_vidio";

						$cek=mysql_query($tampil) or die (mysql_error());
						$totalData = mysql_num_rows($cek);
						
						if($_GET['start']=='') $start = 0;
						else $start = $_GET['start'];
						
						$limit= 5;

						$tampil2=$tampil." LIMIT $start, $limit";
						$cek2=mysql_query($tampil2) or die (mysql_error());
						while ($data=mysql_fetch_array($cek2))
						{
						?>
						<div class="row">
						<section class="4u 12u(mobile)" align="center">
							<img src="aaa.png" alt="" width="100%" height="150"/>
							<a href="layar/?id_album_vidio=<?php echo $data['id_album_vidio']; ?>" class="button">LIHAT VIDIO</a>
						</section>
						<section class="8u 12u(mobile)">
							<h3><a href="layar/?id_album_vidio=<?php echo $data['id_album_vidio']; ?>" ><?php echo $data['nama_album_vidio']; ?></a></h3>
							<?php echo $data['tanggal_album_vidio']; ?>
							<p align="justify"><?php echo $data['keterangan_album_vidio']; ?></p>
						</section>
						</div>
						<?php
						}
						?>
					
					<div class="row">
						<div class="12u 12u(mobile)" align="right">
						Halaman : 
						<?php
							$b=0;
							
							$jumlahPage = $totalData/$limit;
							for($a=0;$a<$jumlahPage;$a++)
							{
							?>
							<a href="?start=<?php echo $b;?>" class="button" style="padding: 0.2em;">
							<?php echo $a+1;?>
							</a>
							<?php
							$b=$b+5;
							}
							?>
						</div>
					</div>
					
					<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<img align="center" src="../../asset/gambar/Beranda1.png" alt="" />
								<h3><a href="../">Kembali Ke Galeri</a></h3>
								<img align="center" src="../../asset/gambar/Beranda2.png" alt="" />
								</div>
					</div>
					</section>
				</div>

			<!-- Footer -->
				<?php include "../../footer.php"; ?>

		</div>

		<!-- Scripts -->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/jquery.dropotron.min.js"></script>
			<script src="../../assets/js/skel.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../../assets/js/main.js"></script>

	</body>
</html>