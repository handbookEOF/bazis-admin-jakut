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
		
		<script type="text/javascript">
		function Validasi()
		{  
		var angka = "0123456789"; 
		var x = 0; 
		var nama=document.getElementById('nama').value; 
		var email=document.getElementById('email').value;
		var telpon=document.getElementById('telpon').value;
		var pass=document.getElementById('pass').value;
		var repass=document.getElementById('repass').value;
		var alamat=document.getElementById('alamat').value;
		var noidentitas=document.getElementById('noidentitas').value;
		if (email=="" || telpon =="" || nama == "" || pass == "" || repass == "" || alamat == "" || noidentitas == "")
		{
			alert("Ada form yang belum terisi");  return false; 
		}  
		if(pass != repass)
		{
			alert("Password dan Repassword Anda Tidak Sama");  return false; 
		}
		if ((email.indexOf('@',0)==-1) || (email.indexOf('.',0)==-1))
		{ 
			alert("Email Kurang Tepat");  return false; 
		} 
		if (telpon.length!=12) 
		{ 
			alert("no telepon harus 12 karakter"); return false; 
		} 
		for (var u=0; u < noidentitas.length; u++) 
		{ 
			digitc = "" + noidentitas.substring(u, u+1); 
			if (angka.indexOf(digitc) == "-1") 
			{ 
				window.alert("Karakter pada No Identitas yang dimasukkan salah (harus angka semua)"); return false; 
			}  
		} 
		for (var i=0; i < telpon.length; i++) 
		{ 
			digitb = "" + telpon.substring(i, i+1); 
			if (angka.indexOf(digitb) == "-1") 
			{ 
				window.alert("Karakter pada No Telepon yang dimasukkan salah (harus angka semua)"); return false; 
			}  
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
							
							<h2>Form Daftar Anggota</h2>
							<form action="logik_anggota.php" method="POST" onsubmit="return Validasi();">
							<table align="center" width="85%">
							<tr>
								<th colspan="4">
									DATA DASAR
									<HR>
								</th>
							</tr>
							<tr>
								<th>NAMA ANGGOTA</th>
								<td><input type="text" name="nama" size="45" placeholder="Nama Anggota..." id="nama"></td>
								<th>ANGGOTA MERUPAKAN</th>
								<td>
									<select name="katagori">
										<option value="Individu">Perorangan</option>
										<option value="Kelompok">Kelompok/Organisasi Masyarakat</option>
										<option value="CV">CV ( Perseroan Komanditer )</option>
										<option value="PT">PT ( Perseroan Terbatas )</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>JENIS IDENTITAS</th>
								<td>
									<select name="js_ident">
										<option value="NPWP">NPWP ( Nomor Pokok Wajib Pajak )</option>
										<option value="KTP">KTP ( Kartu Tanda Penduduk )</option>
									</select>
								</td>
								<th>NO IDENTITAS</th>
								<td><input type="text" name="no_ident" size="45" placeholder="Nomer Identitas..." id="noidentitas"></td>
							</tr>
							<tr>
								<th>PASSWORD</th>
								<td><input type="password" name="password" size="45" placeholder="Password..." id="pass"></td>
								<th>RE-PASSWORD</th>
								<td><input type="password" name="repassword" size="45" placeholder="Re-Password..." id="repass"></td>
							</tr>
							<tr>
								<th>E-MAIL ANGGOTA</th>
								<td><input type="email" name="email" size="45" placeholder="E-Mail Anggota..." id="email" ></td>
								<th>TELPON ANGGOTA</th>
								<td><input type="text" name="telpon" size="45" placeholder="Telpon Anggota..." id="telpon" maxlength="12"></td>
							</tr>
							<tr>
								<th colspan="4" align="left">
									ALAMAT ANGGOTA
								</th>
							</tr>
							<tr>
								<td colspan="4" align="center">
									<textarea cols="120%" rows="2" name="alamat" id="alamat"></textarea>
								</td>
							</tr>
							<tr>
								<th colspan="4" align="center">
								
								<input type="hidden" name="perintah" value="daftar_anggota">
								<input type="submit" class="button" value="Daftar Anggota Baru">
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