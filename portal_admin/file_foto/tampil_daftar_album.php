<div class="row">
<?php
	include ("../asset/sambung_database.php");
	$tampil="SELECT*FROM album_foto order by id_Album_foto desc";
						
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
		$hit_ket=strlen($data['keterangan_album_foto']);
		if($hit_ket >= 45)
			{	$ket=substr($data['keterangan_album_foto'],0,45)."...";	}
		else
			{	$ket=$data['keterangan_album_foto']; }
?>
	<div class="col-md-3 col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">
				<div align="center"><strong><?php echo $data['nama_album_foto']; ?></strong></div>
			</div>
            <div class="panel-body">
			<div align="center"><img src="../album_foto/<?php echo $data['sampul_album_foto']; ?>" alt="" width="150" height="150" style="border: 2px solid; border-radius: 10px 10px 10px 10px"/></div>
			<br>
			<div align="justify"><?php echo $ket; ?></div>
			</div>
			<div class="panel-footer">
				<div align="center">
                    <a href="?perihal=album_foto&id_album=<?php echo $data['id_album_foto']; ?>" class="btn btn-success btn-xs">LIHAT</a>
					<a href="logik/logik_admin.php?perintah=hapus_album&id_album=<?php echo $data['id_album_foto']; ?>" class="btn btn-danger btn-xs">HAPUS</a>
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
		<a href="?perihal=tambah_album" class="btn btn-primary btn-lg">Tambah Album</a>
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