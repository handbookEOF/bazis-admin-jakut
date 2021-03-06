<html>
	<head>
		<title>RUANG MEMBERI ZIS || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
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
				
			<!-- Main -->
				<div id="main" style="background-image: url('../../asset/gambar/latar.jpg');">
					<section class="container">
					
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<h2 id="rzis">Riwayat ZIS Bazis Kota Administrasi Jakarta Utara</h2>
							</section>
					</div>
					
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet egestas eros. Sed venenatis est nunc, id convallis tellus venenatis non. Proin id nisi euismod, molestie nisl vel, accumsan sem. Integer felis sem, lacinia eu auctor eget, dapibus feugiat elit. Duis lectus justo, ultrices ac placerat non, sollicitudin at massa. Integer pulvinar ipsum a posuere consectetur. Aenean placerat, quam sed varius congue, felis lectus ullamcorper massa, nec posuere ante massa finibus tortor. Nulla facilisi. Maecenas porttitor felis et tempor vulputate. Fusce ligula ante, venenatis hendrerit semper at, posuere vel velit. Pellentesque commodo nulla vel nisi fringilla, id malesuada sapien dictum. Morbi eget lobortis nulla. Suspendisse id aliquet felis.</p>
							</section>
					</div>
					
					<div class="row">
							<section class="12u 12u(mobile)" align="left">
								<HR>
								<br>
							</section>
					</div>
					
					<?php
						include "../../asset/sambung_database.php";
						$tampil="SELECT*FROM zis_keranjang ORDER BY id_zis_keranjang DESC";
						
						$limit= 20;
						
						$cek=mysql_query($tampil) or die (mysql_error());
						$totalData = mysql_num_rows($cek);
						
						if($_GET['start']=='') $start = 0;
						else $start = $_GET['start'];

						$tampil2=$tampil." LIMIT $start, $limit";
						$cek2=mysql_query($tampil2) or die (mysql_error());
						while ($data=mysql_fetch_array($cek2))
						{
					?>
					<a href="../print?perihal=pembayaran_zis&zis=<?php echo $data['no_zis']; ?>"></a>
					<div class="row">
					<section class="12u 12u(mobile)" align="left">
					<div style="
								margin-top: -2px;
								padding: 0.2em;
								border-radius: 8px 8px 8px 8px;
								border: 2px solid;
								border-color: #ccc;
								border-color: rgba(0, 0, 0, 0.2);
								background: #00923F;
								text-align: center!important;
								color:white;
					">
					<table width="100%">
						<tr>
							<td width="4%">
								<?php echo $data['no_zis']; ?>
							</td>
							<td width="5%">
								<?php echo $data['tanggal']; ?>
							</td>
							<td width="16%">
								<?php echo $data['jenis_zis']; ?>
							</td>
							<td width="8%">
								<?php echo "Rp. ".number_format($data['nominal']); ?>
							</td>
							<td width="15%">
								<?php echo $data['terbilang']; ?>
							</td>
							<td width="3%">
								<a class="button" style="padding:0.2em" href="lihat/?zis=<?php echo $data['no_zis']; ?>">Lihat</a>
							</td>
						</tr>
					</table>
					</div>
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
							<a href="?start=<?php echo $b;?>#rzis" class="button" style="padding:0.2em">
							<?php echo $a+1;?>
							</a>
							<?php
							$b=$b+20;
							}
							?>
						</div>
					</div>
					
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