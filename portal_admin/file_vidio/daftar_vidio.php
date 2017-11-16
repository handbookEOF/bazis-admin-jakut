<div class="row">
<?php
	include ("../asset/sambung_database.php");
	$tampil="SELECT*FROM album_vidio order by id_album_vidio desc";
						
	$cek=mysql_query($tampil) or die (mysql_error());
	$totalData = mysql_num_rows($cek);
						
	if($_GET['start']=='') $start = 0;
	else $start = $_GET['start'];
						
	$limit= 8;
	
	$pemisah_baris=1;
	
	$tampil2=$tampil." LIMIT $start, $limit";
	$cek2=mysql_query($tampil2) or die (mysql_error());
	while ($data=mysql_fetch_array($cek2))
	{
		$hit_ket=strlen($data['keterangan_album_vidio']);
		if($hit_ket >= 45)
			{	$ket=substr($data['keterangan_album_vidio'],0,45)."...";	}
		else
			{	$ket=$data['keterangan_album_vidio']; }
?>
	<div class="col-md-3 col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">
				<div align="center"><strong><?php echo $data['nama_album_vidio']; ?></strong></div>
			</div>
            <div class="panel-body">
			<div align="justify"><?php echo "<strong>".$data['tanggal_album_vidio']." : </strong>".$ket; ?></div>
			</div>
			<div class="panel-footer">
				<div align="center">
                    <a href="?perihal=lihat_vidio&id_vidio=<?php echo $data['id_album_vidio']; ?>" class="btn btn-success btn-xs">LIHAT</a>
                    <a href="?perihal=ubah_vidio&id_vidio=<?php echo $data['id_album_vidio']; ?>" class="btn btn-success btn-xs">UBAH</a>
					<a href="logik/logik_admin.php?perintah=hapus_vidio&id_vidio=<?php echo $data['id_album_vidio']; ?>" class="btn btn-danger btn-xs">HAPUS</a>
				</div>
			</div>
        </div>
	</div>
<?php
	$syarat=$pemisah_baris%4;
	if($syarat==0)
		{	echo"</div><div class='row'>";	}
		
	$pemisah_baris++;
	}
?>
</div>

<div class="row">
	<div class="col-md-2" align="center">
		<a href="?perihal=tambah_vidio" class="btn btn-primary btn-lg">Tambah Vidio</a>
	</div>
	<div class="col-md-10" align="right">
	Halaman : 
	<?php
		$b=0;
							
		$jumlahPage = $totalData/$limit;
		for($a=0;$a<$jumlahPage;$a++)
		{
			?>
			<a href="?start=<?php echo $b;?>" class="button" style="padding: 0.2em;">
							<?php echo $a+1;?>
							</a>
							<?php
							$b=$b+8;
							}
							?>
	</div>
</div>