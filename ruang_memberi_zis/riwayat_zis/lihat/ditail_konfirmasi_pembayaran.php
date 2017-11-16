<?php
	$tampil_kon="SELECT*FROM zis_konfirmasi where no_zis = '$zis'";
	$cek_kon=mysql_query($tampil_kon) or die (mysql_error());
	while ($data_kon=mysql_fetch_array($cek_kon))
	{
		$konzis		=	$data_kon['no_zis_konfirmasi'];
		$tgl_kon	=	$data_kon['tanggal'];
		$nm_bank	=	$data_kon['nama_bank'];
		$rek_bank	=	$data_kon['rekening_bank'];
		$pem_bank	=	$data_kon['pemilik_bank'];
		$nom_kon	=	$data_kon['nominal'];
		$ter_kon	=	$data_kon['terbilang'];
	}
	
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
		<h3>Data Formulir Konfirmasi Pembayaran Zakat, Infaq dan Shadaqoh</h3>
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
		<td>NO Formulir Konfirmasi ZIS</td>
		<td>:</td>
		<td><?php echo $konzis; ?></td>
	</tr>
	<tr>
		<td>Tanggal Pembayaran</td>
		<td>:</td>
		<td><?php echo $tgl_kon; ?></td>
		<td>Nama Bank</td>
		<td>:</td>
		<td><?php echo $nm_bank; ?></td>
	</tr>
	<tr>
		<td>Pemilik Rekening</td>
		<td>:</td>
		<td><?php echo $pem_bank; ?></td>
		<td>Rekening Bank</td>
		<td>:</td>
		<td><?php echo $rek_bank; ?></td>
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