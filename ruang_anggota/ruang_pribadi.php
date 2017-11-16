<? session_start(); ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>RUANG PRIBADI ANGGOTA BAZIS || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
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

					<div class="row">
							<section class="12u 12u(mobile)">
							<h2>RUANG PRIBADI ANGGOTA</h2>
							</section>
					</div>
					
					<div class="row">
							<section class="3u 12u(mobile)">
							<?php
							include "../asset/sambung_database.php";
							
							$user_anggota=$_SESSION['user_anggota_bazis_jakut'];
							
							$deret_peringkat = 1;
							$sql="SELECT*FROM anggota ORDER BY point_anggota DESC";
							$query=mysql_query($sql) or die (mysql_error());
							while ($find=mysql_fetch_array($query))
							{
								if($find['user_anggota'] == $user_anggota)
									{	$peringkat = $deret_peringkat;	}
								$deret_peringkat++;
							}
							
							$tampil="SELECT*FROM anggota where user_anggota = '$user_anggota'";
							$cek=mysql_query($tampil) or die (mysql_error());
							while ($data=mysql_fetch_array($cek))
							{
								$user_anggota=$data['user_anggota'];
							?>
							
							<h3><?php echo $data['nama_anggota'];?></h3>
							<a href="?perihal=foto"><img src="../album_anggota/<?php echo $data['foto_anggota'];?>" class="image full" height="300px"></a>
							<table>
							<tr><th align="left">User</th><td>:</td><td><?php echo $data['user_anggota'];?></td></tr>
							<tr><th align="left">Telpon</th><td>:</td><td><?php echo $data['telpon'];?></td></tr>
							<tr><th align="left">Alamat</th><td>:</td><td><?php echo $data['alamat'];?></td></tr>
							<tr><th align="left">Peringkat</th><td>:</td><td><strong><?php echo $peringkat;?></strong></td></tr>
							<tr><th align="left">Point</th><td>:</td><td><strong><?php echo $data['point_anggota'];?></strong></td></tr>
							</table>
							<?php
							}
							?>
							<a href="logik_anggota.php?perintah=keluar_anggota&kon=pri" class="button">KELUAR</a>
							</section>
							<section class="9u 12u(mobile)">
							<a class="button" href="ruang_pribadi.php?perihal=indas">Info Dasar</a>
							<a class="button" href="ruang_pribadi.php?perihal=inpej">Info Penanggung Jawab</a>
							<a class="button" href="ruang_pribadi.php?perihal=inpoi">Info Point</a>
							<a class="button" href="ruang_pribadi.php?perihal=rizis">Riwayat ZIS</a>
							<hr>
							<?php include "perihal_logik.php" ;?>
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