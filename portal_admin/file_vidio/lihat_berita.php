<div class="row">
<?php
	include ("../asset/sambung_database.php");
	$id_berita	=	$_GET['id_berita'];
	$tampil="SELECT*FROM artikel_berita where id_berita='$id_berita'";
						
	$cek=mysql_query($tampil) or die (mysql_error());
	while ($data=mysql_fetch_array($cek))
	{
?>
	<div class="col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<div align="center"><strong><?php echo $data['judul_berita']; ?></strong></div>
			</div>
            <div class="panel-body">
			<div align="center"><img src="../album_berita/<?php echo $data['foto_berita']; ?>" alt="" width="150" height="150" style="border: 2px solid; border-radius: 10px 10px 10px 10px"/></div>
			<br>
			<div align="justify"><?php echo "<strong>".$data['tanggal_berita']." : </strong>".$data['isi_berita']; ?></div>
			</div>
			<div class="panel-footer">
				<div align="center">
                    <a href="?perihal=ubah_berita&id_berita=<?php echo $data['id_berita']; ?>" class="btn btn-success btn-xs">UBAH</a>
					<a href="logik/logik_admin.php?perintah=hapus_berita&id_berita=<?php echo $data['id_berita']; ?>" class="btn btn-danger btn-xs">HAPUS</a>
				</div>
			</div>
        </div>
	</div>
<?php
	}
?>