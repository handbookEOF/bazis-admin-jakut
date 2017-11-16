<div class="row">
<div class="col-md-12 col-sm-12">
	<div class="panel panel-default">
		<div class="panel-heading">
		<?php
			include "../asset/sambung_database.php";
				$id_album=$_GET['id_album'];
				$tampil="SELECT*FROM album_foto where id_album_foto = '$id_album'";
				$cek=mysql_query($tampil) or die (mysql_error());
			while ($data=mysql_fetch_array($cek))
			{
				$ket=$data['keterangan_album_foto'];
				$tgl=$data['tanggal_album_foto'];
		?>
			<div align="center"><strong><?php echo $data['nama_album_foto']; ?></strong></div>
		<?php 
			} 
		?>
		</div>
		
		<div class="panel-body">
			
			<div class="alert alert-info">
				<strong>Tanggal Album :</strong> <?php echo $tgl; ?>.
				<br>
				<?php echo $ket; ?>.
            </div>
			
		<?php
			$tampil_isi="SELECT*FROM album_foto_isi where id_album_foto = '$id_album' order by id_foto desc";
			$cek_isi=mysql_query($tampil_isi) or die (mysql_error());
			$totalData = mysql_num_rows($cek_isi);
						
			if($_GET['start']=='') $start = 0;
			else $start = $_GET['start'];
						
			$limit= 18;

			$tampil_isi2=$tampil_isi." LIMIT $start, $limit";
			$cek_isi2=mysql_query($tampil_isi2) or die (mysql_error());
			while ($data_isi=mysql_fetch_array($cek_isi2))
			{
		?>
			<div class="col-md-2 col-sm-2" align="center">
			<img src="../album_foto/<?php echo $data_isi['lokasi_foto']; ?>" alt="" width="150" height="150" style="border: 2px solid; border-radius: 10px 10px 10px 10px"/>
			<a href="logik/logik_admin.php?perintah=sampul&foto=<?php echo $data_isi['lokasi_foto'];?>&id_album=<?php echo $id_album; ?>" class="btn btn-success btn-xs">SAMPUL</a>
			<a href="logik/logik_admin.php?perintah=hapus_foto&id_foto=<?php echo $data_isi['id_foto'];?>&id_album=<?php echo $id_album; ?>&nama=<?php echo $data_isi['lokasi_foto']; ?>" class="btn btn-danger btn-xs">HAPUS</a>
			</div>
		<?php 
			} 
		?>
		</div>
		<div class="panel-footer">
			<a href="?perihal=tambah_foto&id_album=<?php echo $id_album; ?>" class="btn btn-primary btn-lg">Tambah Foto</a>
			<a href="?perihal=ubah_album&id_album=<?php echo $id_album; ?>" class="btn btn-info btn-lg">Ubah Album</a>
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
							$b=$b+18;
				}
				?>
		</div>
	</div>
</div>
</div>