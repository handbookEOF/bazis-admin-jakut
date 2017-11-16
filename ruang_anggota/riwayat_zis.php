<? session_start(); ?>
<h3>Riwayat ZIS</h3>

<table>
<tr>
	<th>Nomer</th>
	<th>Tanggal</th>
	<th>ZIS</th>
	<th>Sebesar</th>
	<th>Point</th>
	<th>Status</th>
	<th>&nbsp;</th>
</tr>

<?php
	include "../asset/sambung_database.php";
	
	$tampil="SELECT*FROM zis_keranjang where user_anggota='$user_anggota' ORDER BY id_zis_keranjang DESC";
						
	$limit= 10;
						
	$cek=mysql_query($tampil) or die (mysql_error());
	$totalData = mysql_num_rows($cek);
						
	if($_GET['start']=='') $start = 0;
	else $start = $_GET['start'];

	$tampil2=$tampil." LIMIT $start, $limit";
	$cek2=mysql_query($tampil2) or die (mysql_error());
	while ($data=mysql_fetch_array($cek2))
	{
?>
<tr>
	<td>
	<?php echo $data['no_zis']; ?>
	</td>
	<td>
	<?php echo $data['tanggal']; ?>
	</td>
	<td>
	<?php echo $data['jenis_zis']; ?>
	</td>
	<td>
	<?php echo "Rp. ".number_format($data['nominal']); ?>
	</td>
	<td>
	<?php echo $data['point']; ?>
	</td>
	<td>
	<?php 
	if($data['status'] == 0)
		echo "Belum Melalkukan Konfirmasi Pembayaran";
	else if($data['status'] == 1)
		echo "Konfirmasi Pembayaran Telah Dilakukan";
	else if($data['status'] == 2)
		echo "Telah Disahkan Oleh Pihak Bazis Kota Administrasi Jakarta Utara";
	?>
	</td>
	<td width="3%">
	<a class="button" style="padding:0.1em" href="../ruang_memberi_zis/riwayat_zis/lihat/?zis=<?php echo $data['no_zis']; ?>">Lihat</a>
	</td>
</tr>
<?php
	}
?>
</table>
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
		$b=$b+10;
	}
	?>