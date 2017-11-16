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
						
						if($_GET['tip']=="")
							{	$tampil="SELECT*FROM anggota ORDER BY point_anggota DESC";	}
						else if ($_GET['tip']=="ind")
							{	$tampil="SELECT*FROM anggota where katagori='Individu' ORDER BY point_anggota DESC";	}
						else if ($_GET['tip']=="kel")
							{	$tampil="SELECT*FROM anggota where katagori='Kelompok' ORDER BY point_anggota DESC";	}
						else if ($_GET['tip']=="cv")
							{	$tampil="SELECT*FROM anggota where katagori='CV' ORDER BY point_anggota DESC";	}
						else if ($_GET['tip']=="pt")
							{	$tampil="SELECT*FROM anggota where katagori='PT' ORDER BY point_anggota DESC";	}
						
						$limit= 12;
						
						$cek=mysql_query($tampil) or die (mysql_error());
						$totalData = mysql_num_rows($cek);
						
						if($_GET['start']=='') $start = 0;
						else $start = $_GET['start'];
						
						$peringkat = 1;
						
						$tampil2=$tampil." LIMIT $start, $limit";
						$cek2=mysql_query($tampil2) or die (mysql_error());
						while ($data=mysql_fetch_array($cek2))
						{
					?>
							<section class="2u 12u(mobile)">
								<div class="box">
								<div class="diskrip">
								<h3><?php echo $data['nama_anggota'];?></h3>
								<a href="lihat_anggota.php?use=<?php echo $data['user_anggota']; ?>" class="image full"><img src="../album_anggota/<?php echo $data['foto_anggota']; ?>" height="120" alt="" /></a>
								<h3>Peringkat <?php echo $peringkat;?></h3>
								<a href="lihat_anggota.php?use=<?php echo $data['user_anggota']; ?>" class="button">Lihat</a>
								</div>
								</div>
							</section>
					<?php
						$peringkat++;
						}
					?>
					</div>
					
					<div class="row">
						<div class="12u 12u(mobile)" align="right">
						Halaman : 
						<?php
							$b=0;
							
							$jumlahPage = $totalData/$limit;
							for($a=0;$a<$jumlahPage;$a++)
							{
							?>
							<a href="?start=<?php echo $b;?>" class="button">
							<?php echo $a+1;?>
							</a>
							<?php
							$b=$b+5;
							}
							?>
						</div>
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
								<a href="?tip=" class="button">TAMPIL SEMUA</a>
								<a href="?tip=ind" class="button">HANYA INDIVIDU</a>
								<a href="?tip=kel" class="button">HANYA KELOMPOK</a>
								<a href="?tip=cv" class="button">HANYA CV</a>
								<a href="?tip=pt" class="button">HANYA PT</a>
							</section>
					</div>
					
					<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<img align="center" src="../asset/gambar/Beranda1.png" alt="" />
								<h3><a href="javascript:history.back()">Kembali Ke Ruang Anggota</a></h3>
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