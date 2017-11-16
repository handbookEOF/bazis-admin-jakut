<!DOCTYPE HTML>

<html>
	<head>
		<title>RUANG MEMBERI ZIS || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
		<link rel="shortcut icon" href="../../asset/gambar/Logo.png" type="image/x-icon" />
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../../asset/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../asset/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../../asset/css/ie8.css" /><![endif]-->
		
		<script type="text/javascript">
		function validasi_awal()
		{  
		var zis=document.getElementById('zis').value; 
		
		if (zis =="")
		{
			alert("Nomor ZIS yang belum terisi");  return false; 
		}
		return true; 
		}
		
		</script>
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
				
			<!-- Main -->
				<div id="main" style="background-image: url('../../asset/gambar/latar.jpg');">
					
					<section class="container">
					
					
					<div class="row">
							<section class="12u 12u(mobile)">
							<h2>Formulir Konfirmasi Pembayaran Zakat, Infaq dan Shadaqah</h2>
							<hr>
							</section>
					</div>
					
					<?php if($_GET['logik'] == "" || $_GET['logik'] == "awal"){?>
					<div class="form_settings">
					<div class="row">
						<form method="post" action="?logik=form" onsubmit="return validasi_awal();">
							<section class="12u 12u(mobile)">
							<table width="100%">
							<tr><td><p>Nomer Formulir Pembayaran ZIS</p></td></tr>
							<tr><td><input type="text" name="zis" id="zis" size="100%" placeholder="Input Nomer Pembayaran ZIS..."/></td></tr>
							<tr><td>&nbsp;</td></tr>
							<tr><td><input type="Submit" value="CARI" class="button"/>&nbsp;</td></tr>
							</table>
							</section>
						</form>
					</div>
					</div>
					<?php } 
					
					if($_GET['logik'] == "form")
					{
						include "../../asset/sambung_database.php";
						
						$zis=$_POST['zis'];
						
						$tampil="SELECT*FROM zis_keranjang where no_zis = '$zis'";
						$cek=mysql_query($tampil) or die (mysql_error());
						while ($data=mysql_fetch_array($cek))
						{
							$user		=	$data['user_anggota'];
							$nama		=	$data['nama'];
							$no_ident	=	$data['no_identitas'];
							$telpon		=	$data['telpon'];
							$alamat		=	$data['alamat'];
							$jenis_zis	=	$data['jenis_zis'];
							$nominal	=	$data['nominal'];
							$terbilang	=	$data['terbilang'];
						}
						
						if(strlen($nominal) == 0)
						echo "<script> alert('Maaf Nomer ZIS ".$zis." Tidak Ada atau Salah');location.href='?logik=awal'</script>";
						
						include"form.php";
						
					}
					?>
					
					<div class="row">
								<div class="12u 12u(mobile)" align="center">
								<img align="center" src="../../asset/gambar/Beranda1.png" alt="" />
								<h3><a href="javascript:history.back()">Kembali</a></h3>
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