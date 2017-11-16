<?php
	$zis	=	$_GET['zis'];
	
	include "../../../asset/sambung_database.php";
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
		$tanggal	=	$data['tanggal'];
		$status		=	$data['status'];
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
		<td>Tanggal</td>
		<td>:</td>
		<td><?php echo $tanggal; ?></td>
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
	<tr>
		<td>Status</td>
		<td>:</td>
		<td colspan="4">
		<?php 
			if($status == 0)
				echo "Belum Melalkukan Konfirmasi Pembayaran";
			else if($status == 1)
				echo "Konfirmasi Pembayaran Telah Dilakukan";
			else if($status == 2)
				echo "Telah Disahkan Oleh Pihak Bazis Kota Administrasi Jakarta Utara";
		?>
		</td>
	</tr>
	</table>
	</section>
</div>

<?php
	if($status == 1 or $status == 2)
		include "ditail_konfirmasi_pembayaran.php";
?>