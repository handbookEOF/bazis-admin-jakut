<? session_start(); ?>

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
		function validasi_zis()
		{  
		var angka = "0123456789"; 
		var x = 0; 
		var nama=document.getElementById('nama').value; 
		var telpon=document.getElementById('telpon').value;
		var alamat=document.getElementById('alamat').value;
		var no_ident=document.getElementById('no_ident').value;
		var nominal=document.getElementById('nominal').value;
		var terbilang=document.getElementById('terbilang').value;
		
		if (telpon =="" || nama == "" || alamat == "" || no_ident == "" || nominal == "" || terbilang == "")
		{
			alert("Ada form yang belum terisi");  return false; 
		}  
		if (telpon.length!=12) 
		{ 
			alert("no telepon harus 12 karakter"); return false; 
		} 
		for (var u=0; u < no_ident.length; u++) 
		{ 
			digitc = "" + no_ident.substring(u, u+1); 
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
		for (var o=0; o < nominal.length; o++) 
		{ 
			digita = "" + nominal.substring(o, o+1); 
			if (angka.indexOf(digita) == "-1") 
			{ 
				window.alert("Karakter pada Nominal yang dimasukkan salah (harus angka semua)"); return false; 
			}  
		} 
		return true;  
		}

		function validasi_zis_anggota()
		{  
		var angka = "0123456789"; 
		var x = 0; 
		var nominal=document.getElementById('nominal').value;
		var terbilang=document.getElementById('terbilang').value;
		
		if (nominal == "" || terbilang == "")
		{
			alert("Ada form yang belum terisi");  return false; 
		}  
		for (var o=0; o < nominal.length; o++) 
		{ 
			digita = "" + nominal.substring(o, o+1); 
			if (angka.indexOf(digita) == "-1") 
			{ 
				window.alert("Karakter pada Nominal yang dimasukkan salah (harus angka semua)"); return false; 
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
								<a href="index.php"><img src="../../asset/gambar/logo.png" width="420px" height="220px"></a>
								</div>
							</div>
						</section>
					</div>
				</div>
				
			<!-- Main -->
				<div id="main" style="background-image: url('../../asset/gambar/latar.jpg');">
					
					<section class="container">
					
					<div class="tombol_masuk" style="position:fixed; display:block; top:20px; right:20px; z-index:9999;">
					<?php
					if(empty($_SESSION['user_anggota_bazis_jakut'])){?>
						<a href="../../ruang_anggota/portal_anggota.php?dif=zisba" class="button" style="padding: 0.2em;">MASUK</a>
						<a href="../../ruang_anggota/form_daftar_anggota.php" class="button" style="padding: 0.2em;">DAFTAR</a>
					<?php
					}
					else{?>
						<a href="../../ruang_anggota/ruang_pribadi.php" class="button" style="padding: 0.2em;">RUANG ANDA</a>
						<a href="../../ruang_anggota/logik_anggota.php?perintah=keluar_anggota" class="button" style="padding: 0.2em;">KELUAR</a>
					<?php
					}
					
							$user_anggota=$_SESSION['user_anggota_bazis_jakut'];
							
							include "../../asset/sambung_database.php";
							$tampil="SELECT*FROM anggota where user_anggota = '$user_anggota'";
							$cek=mysql_query($tampil) or die (mysql_error());
							while ($data=mysql_fetch_array($cek))
							{
								$nama		=	$data['nama_anggota'];
								$telpon		=	$data['telpon'];
								$alamat		=	$data['alamat'];
								$no_ident	=	$data['no_identitas_anggota'];
								$js_ident	=	$data['jenis_identitas_anggota'];
							}
					?>
					</div>
					
					<div class="form_settings">
					<div class="row">
							<section class="12u 12u(mobile)">
							<h2>Formulir Pembayaran Zakat, Infaq dan Shadaqah</h2>
							<hr>
							</section>
					</div>
					
					<?php
					if($_GET['b'] == ""){?>
					<div class="row">
							<section class="12u 12u(mobile)" align="center">
								<a class="button" href="?b=za">Bayar ZAKAT</a>
								<a class="button" href="?b=is">Bayar INFAQ dan SHADAQAH</a>
							</section>
					</div>
					<?php }
					
					if(strlen($_GET['b']) > 0){
					
						if(strlen($_SESSION['user_anggota_bazis_jakut']) > 0)
							{	$validasi = "validasi_zis_anggota()";	}
						else if(strlen($_SESSION['user_anggota_bazis_jakut']) == 0)
							{	$validasi = "validasi_zis()";	}
						
					?>
					<form method="post" action="../logik/logik_zis.php" onsubmit="return <?php echo $validasi; ?>;">
					
					<div class="row">
							<section class="3u 12u(mobile)"><p>Nama</p></section>
							<section class="9u 12u(mobile)">
							<?php
							if(empty($_SESSION['user_anggota_bazis_jakut'])){?>
							<input type="text" name="nama" id="nama" size="100%" placeholder="Input Nomer Outlate Disini..."/>
							<?php
							}
							else{
								echo $nama;
							}
							?>
							</section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>NPWP / No. KTP</p></section>
							<section class="9u 12u(mobile)">
							<?php
							if(empty($_SESSION['user_anggota_bazis_jakut'])){?>
							<input type="text" name="no_ident" id="no_ident" size="100%" placeholder="Input Nomer Outlate Disini..."/>
							<?php
							}
							else{
								echo $no_ident." (".$js_ident.")";
							}
							?>
							</section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Telpon</p></section>
							<section class="9u 12u(mobile)">
							<?php
							if(empty($_SESSION['user_anggota_bazis_jakut'])){?>
							<input type="text" name="telpon" id="telpon" maxlength="12" size="100%" placeholder="Input Nomer Outlate Disini..."/>
							<?php
							}
							else{
								echo $telpon;
							}
							?>
							</section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Alamat</p></section>
							<section class="9u 12u(mobile)">
							<?php
							if(empty($_SESSION['user_anggota_bazis_jakut'])){?>
							<input type="text" name="alamat" id="alamat" size="100%" placeholder="Input Nomer Outlate Disini..."/>
							<?php
							}
							else{
								echo $alamat;
							}
							?>
							</section>
					</div>
					
					<?php
					
					if($_GET['b'] == "za"){?>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Bersedia mengeluarkan zakat harta</p></section>
							<section class="9u 12u(mobile)">
								<select name="jenis_zis">
									<option value="Zakat Perusahaan">Perusahaan</option>
									<option value="Zakat Perdagangan">Perdagangan</option>
									<option value="Zakat Pertanian">Pertanian</option>
									<option value="Zakat Pertenakan">Pertenakan</option>
									<option value="Zakat Emas Perak">Emas Perak</option>
									<option value="Zakat Profesi dan Rikaz">Profesi dan Rikaz</option>
								</select>
							</section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Menurut nishap dan haulnya sebesar</p></section>
							<section class="9u 12u(mobile)">
								<input type="text" name="nominal" id="nominal" size="100%" placeholder="Input Nomer Outlate Disini..."/>
							</section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Terbilang</p></section>
							<section class="9u 12u(mobile)">
								<input type="text" name="terbilang" id="terbilang" size="100%" placeholder="Input Nomer Outlate Disini..."/>
							</section>
					</div>
					<?php
					}
					else if($_GET['b'] == "is"){?>
					<input type="hidden" name="jenis_zis" value="Infak, Shadaqoh dan Amal Sosial">
					<div class="row">
							<section class="3u 12u(mobile)"><p>infaq/shadaqah/amal sosial senilai</p></section>
							<section class="9u 12u(mobile)">
								<input type="text" name="nominal" id="nominal" size="100%" placeholder="Input Nomer Outlate Disini..."/>
							</section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Terbilang</p></section>
							<section class="9u 12u(mobile)">
								<input type="text" name="terbilang" id="terbilang" size="100%" placeholder="Input Nomer Outlate Disini..."/>
							</section>
					</div>
					<?php
					}
					
					?>
					
					<div class="row" align="center">
							<section class="6u 12u(mobile)">
								&nbsp;
							</section>
							<section class="6u 12u(mobile)">
								<input type="hidden" name="logik_perintah" value="pembayaran">
								<input type="hidden" name="user_anggota" value="<?php echo $_SESSION['user_anggota_bazis_jakut'] ?>">
								<input type="Submit" value="KIRIM ZIS" class="button"/>
								&nbsp;
							</section>
					</div>
					
					</form>
					<?php
					}
					
					?>
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