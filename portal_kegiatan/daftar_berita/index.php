<!DOCTYPE HTML>

<html>
	<head>
		<title>PORTAL KEGIATAN || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="../../asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../../asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../asset/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../../asset/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage" style="box-shadow: 0px 0px 15px 15px green;">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header" style="background-image: url('../../asset/gambar/foto.png'); background-repeat: no-repeat; background-position:55% 15%;">
					<div class="container">

						<!-- Logo -->
						<section>
							<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<a href="index.php"><img src="../../asset/gambar/logojakarta.png" width="85px" height="80px"></a>
								<br>
								<br>
								<a href="index.php"><img src="../../asset/gambar/portalberita.png" width="560px" height="200px"></a>
								</div>
							</div>
						</section>
					</div>
				</div>
				
			<!-- Main -->
				<div id="main" style="background-image: url('../../asset/gambar/latar.jpg');">
					<section class="container">
					
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2><a href="portal_berita/">Daftar Artikel Berita Bazis Kota Administrasi Jakarta Utara</a></h2>
							</section>
					</div>
					
					<div class="row">
					<?php
						include ("../../asset/sambung_database.php");
						$tampil="SELECT*FROM artikel_berita order by id_berita desc";
						$cek=mysql_query($tampil) or die (mysql_error());
						$totalData = mysql_num_rows($cek);
						
						if($_GET['start']=='') $start = 0;
						else $start = $_GET['start'];
						
						$limit= 9;
	
						$pemisah_baris=1;
	
						$tampil2=$tampil." LIMIT $start, $limit";
						$cek2=mysql_query($tampil2) or die (mysql_error());
						while ($data=mysql_fetch_array($cek2))
						{
							$hit_ket=strlen($data['isi_berita']);
							if($hit_ket >= 45)
								{	$ket=substr($data['isi_berita'],0,45)."...";	}
							else
								{	$ket=$data['isi_berita']; }
					?>
							<section class="4u 12u(mobile)">
								<div class="box">
								<h3><a href="lihat_berita/?id_berita=<?php echo $data['id_berita']; ?>"><?php echo $data['judul_berita']; ?></a></h3>
								<div class="diskrip">
								<a href="lihat_berita/?id_berita=<?php echo $data['id_berita']; ?>" class="image full"><img src="../../album_berita/<?php echo $data['foto_berita']; ?>" alt="" width="150" height="150"/></a>
								<?php echo $data['tanggal_berita']." : ".$ket; ?>
								<a href="lihat_berita/?id_berita=<?php echo $data['id_berita']; ?>" class="button">Selengkapnya</a>
								</div>
								</div>
							</section>
					<?php
							$syarat=$pemisah_baris%3;
							if($syarat==0)
								{	echo"</div><div class='row'>";	}
		
							$pemisah_baris++;
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
							<a href="?start=<?php echo $b;?>" class="button" style="padding: 0.2em;">
							<?php echo $a+1;?>
							</a>
							<?php
							$b=$b+9;
							}
							?>
						</div>
					</div>
					
					<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<img align="center" src="../../asset/gambar/Beranda1.png" alt="" />
								<h3><a href="../">Kembali Ke Portal Kegiatan</a></h3>
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