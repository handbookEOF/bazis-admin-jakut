<!DOCTYPE HTML>

<html>
	<head>
		<title>GALERI FOTO || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="../../../asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../../../asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../../asset/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../../../asset/css/ie8.css" /><![endif]-->
		
		<!-- prettyPhoto -->
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery_1.4.2.js"></script>
		<script type="text/javascript" src="js/jqueryui.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/tooltip/jquery.tools.min.js"></script>
		<script type="text/javascript" src="js/jquery.tabs/jquery.tabs.pack.js"></script>
		<script type="text/javascript" src="js/filterable.pack.js"></script>
		<script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="js/chirp.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/jQuery.equalHeights.js"></script>
		<!-- ENDS JS -->
		
		<!-- superfish -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/superfish-custom.css" /> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script> 
		<!-- ENDS superfish -->
		
		<!-- tabs -->
        <link rel="stylesheet" href="css/jquery.tabs.css" type="text/css" media="print, projection, screen" />
        <!-- Additional IE/Win specific style sheet (Conditional Comments) -->
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="css/jquery.tabs-ie.css" type="text/css" media="projection, screen">
        <![endif]-->
  		<!-- ENDS tabs -->
		
		<!-- Cufon -->
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/bebas_400.font.js" type="text/javascript"></script>
        <!-- /Cufon -->
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
							
							$id_album=$_GET['id_album_foto'];
							$tampil="SELECT*FROM album_foto where id_album_foto = '$id_album'";
							$cek=mysql_query($tampil) or die (mysql_error());
							while ($data=mysql_fetch_array($cek))
							{
							?>
								<h2><?php echo $data['nama_album_foto']; ?></h2>
							<?php } ?>
							</section>
					</div>
					
					<div class="row">
					<!-- Thumbnails -->
						<?php
						$tampil_isi="SELECT*FROM album_foto_isi where id_album_foto = '$id_album' order by id_foto desc";
						$cek_isi=mysql_query($tampil_isi) or die (mysql_error());
						$totalData = mysql_num_rows($cek_isi);
						
						if($_GET['start']=='') $start = 0;
						else $start = $_GET['start'];
						
						$limit= 6;

						$tampil_isi2=$tampil_isi." LIMIT $start, $limit";
						$cek_isi2=mysql_query($tampil_isi2) or die (mysql_error());
						while ($data_isi=mysql_fetch_array($cek_isi2))
						{
						?>
						<section class="4u 12u(mobile)" align="center">
							<a href="../../../album_foto/<?php echo $data_isi['lokasi_foto']; ?>" title="<?php echo $data_isi['keterangan_foto']; ?>" rel="prettyPhoto[gallery]">
							<img src="../../../album_foto/<?php echo $data_isi['lokasi_foto']; ?>" width="100%" height="280px" alt="<?php echo $data_isi['keterangan_foto']; ?>" title="<?php echo $data_isi['keterangan_foto']; ?>" style="border: 2px solid; border-radius: 10px 10px 10px 10px"/></a>
							<em><?php echo $data_isi['keterangan_foto']; ?></em>
						</section>
						<?php 
						} 
						?>
			<!-- ENDS Thumbnails -->
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
							<a href="?id_album_foto=<?php echo $id_album ;?>&start=<?php echo $b;?>" class="button" style="padding: 0.2em;">
							<?php echo $a+1;?>
							</a>
							<?php
							$b=$b+6;
							}
							?>
						</div>
					</div>
					
					<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<img align="center" src="../../../asset/gambar/Beranda1.png" alt="" />
								<h3><a href="javascript:history.back()">Kembali Ke Galeri Foto</a></h3>
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
			
	<!-- start cufon -->
	<script type="text/javascript"> Cufon.now(); </script>
	<!-- ENDS start cufon -->

	</body>
</html>