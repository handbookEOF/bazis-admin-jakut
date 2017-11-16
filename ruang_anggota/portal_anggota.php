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

					<div class="row">
							<section class="12u 12u(mobile)">
							<div class="box">
							<div class="diskrip">
							
							<h2>Portal Anggota</h2>
							<form action="logik_anggota.php" method="POST">
							<table align="center" width="45%">
							<tr>
								<th>USER ANGGOTA</th>
								<td><input type="text" name="user" size="45" placeholder="User Anggota..." <?php if ($_GET['user'] != "") echo "value='".$_GET['user']."'"; ?>></td>
							</tr>
							<tr>
								<th>PASSWORD ANGGOTA</th>
								<td><input type="password" name="password" size="45" placeholder="Password..."></td>
							</tr>
							<tr>
								<th colspan="2">
								<a class="button" href="">Lupa Password</a>
								
								<input type="hidden" name="perintah" value="masuk_anggota">
								<input type="hidden" name="dif" value="<?php echo $_GET['dif']; ?>">
								<input type="submit" class="button" value="Masuk">
								</th>
							</tr>
							</table>
							</form>
							
							</div>
							</div>
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