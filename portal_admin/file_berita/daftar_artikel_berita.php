<div class="row">
<?php
	include ("../asset/sambung_database.php");
	$tampil="SELECT*FROM artikel_berita order by id_berita desc";
						
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
		$hit_ket=strlen($data['isi_berita']);
		if($hit_ket >= 45)
			{	$ket=substr($data['isi_berita'],0,45)."...";	}
		else
			{	$ket=$data['isi_berita']; }
?>
	<div class="col-md-3 col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">
				<div align="center"><strong><?php echo $data['judul_berita']; ?></strong></div>
			</div>
            <div class="panel-body">
			<div align="center"><img src="../album_berita/<?php echo $data['foto_berita']; ?>" alt="" width="150" height="150" style="border: 2px solid; border-radius: 10px 10px 10px 10px"/></div>
			<br>
			<div align="justify"><?php echo "<strong>".$data['tanggal_berita']." : </strong>".$ket; ?></div>
			</div>
			<div class="panel-footer">
				<div align="center">
                    <a href="?perihal=lihat_berita&id_berita=<?php echo $data['id_berita']; ?>" class="btn btn-success btn-xs">LIHAT</a>
                    <a href="?perihal=ubah_berita&id_berita=<?php echo $data['id_berita']; ?>" class="btn btn-success btn-xs">UBAH</a>
					<a href="logik/logik_admin.php?perintah=hapus_berita&id_berita=<?php echo $data['id_berita']; ?>&foto_berita=<?php echo $data['foto_berita']; ?>" class="btn btn-danger btn-xs">HAPUS</a>
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
		<a href="?perihal=tambah_berita" class="btn btn-primary btn-lg">Tambah Artikel Berita</a>
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