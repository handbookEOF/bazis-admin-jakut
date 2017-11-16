<?php
	include "../../asset/sambung_database.php";
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
	
	if(strlen($user) > 0)
	{
		$tampil_user="SELECT*FROM anggota where user_anggota = '$user'";
		$cek_user=mysql_query($tampil_user) or die (mysql_error());
		while ($data_user=mysql_fetch_array($cek_user))
		{
			$nama		=	$data_user['nama_anggota'];
			$no_ident	=	$data_user['no_identitas_anggota'];
			$telpon		=	$data_user['telpon'];
			$alamat		=	$data_user['alamat'];
		}
	}
?>

<div class="row">
	<section class="12u 12u(mobile)" align="left">
		<h3>Data Formulir Pembayaran Zakat, Infaq dan Shadaqoh</h3>
		<hr>
	</section>
</div>

<div class="row">
	<section class="12u 12u(mobile)" align="left">
	<table border="2" align="center" width="75%">
	<tr>
		<td>NO Formulir ZIS</td>
		<td>:</td>
		<td><?php echo $zis; ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $nama; ?></td>
		<td>No Identitas (KTP/NPWP)</td>
		<td>:</td>
		<td><?php echo $no_ident; ?></td>
	</tr>
	<tr>
		<td>Telpon</td>
		<td>:</td>
		<td><?php echo $telpon; ?></td>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $alamat; ?></td>
	</tr>
	<tr>
		<td>ZIS yang dibayarkan</td>
		<td>:</td>
		<td><?php echo $jenis_zis; ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Nominal yang dibayarkan</td>
		<td>:</td>
		<td colspan="4"><?php echo "Rp. ".number_format($nominal); ?></td>
	</tr>
	<tr>
		<td>Terbilang</td>
		<td>:</td>
		<td colspan="4"><?php echo $terbilang; ?></td>
	</tr>
	</table>
	</section>
</div>

<div class="row">
	<section class="12u 12u(mobile)" align="left">
		<h3>Formulir Konfirmasi Pembayaran Zakat, Infaq dan Shadaqoh</h3>
		<hr>
	</section>
</div>

		<script type="text/javascript">
		function validasi()
		{  
		var angka = "0123456789"; 
		var x = 0; 
		var tanggal=document.getElementById('tanggal').value; 
		var nama_bank=document.getElementById('nama_bank').value; 
		var rekening_bank=document.getElementById('rekening_bank').value; 
		var pemilik_rekening=document.getElementById('pemilik_rekening').value; 
		var nominal=document.getElementById('nominal').value; 
		var terbilang=document.getElementById('terbilang').value; 
		var ffoto=document.getElementById('ffoto').value; 
		
		
		if (tanggal =="" || nama_bank == "" || rekening_bank == "" || pemilik_rekening == "" || nominal == "" || terbilang == "" || ffoto == "")
		{
			alert("Ada form yang belum terisi");  return false; 
		}  
		for (var i=0; i < rekening_bank.length; i++) 
		{ 
			digitb = "" + rekening_bank.substring(i, i+1); 
			if (angka.indexOf(digitb) == "-1") 
			{ 
				window.alert("Karakter pada Nomer Rekening yang dimasukkan salah (harus angka semua)"); return false; 
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
	</script>
					<form method="post" action="../logik/logik_zis.php" onsubmit="return validasi()" enctype="multipart/form-data">
					<div class="row">
							<section class="3u 12u(mobile)"><p>Tanggal Pembayaran</p></section>
							<section class="9u 12u(mobile)"><input type="date" name="tanggal" id="tanggal" size="100%" placeholder="Input Nomer Outlate Disini..."/></section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Nama Bank</p></section>
							<section class="9u 12u(mobile)"><input type="text" name="nama_bank" id="nama_bank" size="100%" placeholder="Input Nomer Outlate Disini..."/></section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Nomer Rekining Bank</p></section>
							<section class="9u 12u(mobile)"><input type="text" name="rekening_bank" id="rekening_bank" size="100%" placeholder="Input Nomer Outlate Disini..."/></section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Nama Pemelik Rekening</p></section>
							<section class="9u 12u(mobile)"><input type="text" name="pemilik_rekening" id="pemilik_rekening" size="100%" placeholder="Input Nomer Outlate Disini..."/></section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Dibayarkan Sebesar</p></section>
							<section class="9u 12u(mobile)"><input type="text" name="nominal" id="nominal" size="100%" placeholder="Input Nomer Outlate Disini..."/></section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Terbilang</p></section>
							<section class="9u 12u(mobile)"><input type="text" name="terbilang" id="terbilang" size="100%" placeholder="Input Nomer Outlate Disini..."/></section>
					</div>
					<div class="row">
							<section class="3u 12u(mobile)"><p>Bukti Pembayaran</p></section>
							<section class="9u 12u(mobile)">
								<input type="file" name="ffoto" id="ffoto" />
							</section>
					</div>
					<div class="row" align="center">
							<section class="6u 12u(mobile)">
								&nbsp;
							</section>
							<section class="6u 12u(mobile)">
								<input type="hidden" name="logik_perintah" value="konfirmasi">
								<input type="hidden" name="zis" value="<?php echo $zis; ?>">
								<input type="Submit" value="KIRIM" class="button">
							</section>
					</div>
					
					</form>