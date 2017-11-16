<div class="row">
<?php
	include ("../asset/sambung_database.php");
	
	$peringkat	=	1;
	
	$tampil="SELECT*FROM anggota order by point_anggota desc";
						
	$cek=mysql_query($tampil) or die (mysql_error());
	$totalData = mysql_num_rows($cek);
						
	if($_GET['start']=='') $start = 0;
	else $start = $_GET['start'];
						
	$limit= 15;
	
	$pemisah_baris=1;
	$tampil2=$tampil." LIMIT $start, $limit";
	$cek2=mysql_query($tampil2) or die (mysql_error());
	while ($data=mysql_fetch_array($cek2))
	{
?>
	<div class="col-md-4 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
				<div align="center"><strong>Peringkat : <?php echo $peringkat; ?></strong></div>
			</div>
            <div class="panel-body">
			<div align="center"><img src="../album_anggota/<?php echo $data['foto_anggota']; ?>" alt="" width="150" height="150" style="border: 2px solid; border-radius: 10px 10px 10px 10px"/></div>
			<br>
			<div align="justify">
				<table width="100%">
				<tr>
					<th>Nama</th>
					<td>:</td>
					<td><?php echo $data['nama_anggota']; ?></td>
				</tr>
				<tr>
					<th>User</th>
					<td>:</td>
					<td><?php echo $data['user_anggota']; ?></td>
				</tr>
				<tr>
					<th>Identitas</th>
					<td>:</td>
					<td><?php echo $data['no_identitas_anggota']; ?> ( <?php echo $data['jenis_identitas_anggota']; ?> )</td>
				</tr>
				<tr>
					<th>Katagori</th>
					<td>:</td>
					<td><?php echo $data['katagori']; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td>:</td>
					<td><?php echo $data['email_anggota']; ?></td>
				</tr>
				<tr>
					<th>Telpon</th>
					<td>:</td>
					<td><?php echo $data['telpon']; ?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td>:</td>
					<td><?php echo $data['alamat']; ?></td>
				</tr>
				<tr>
					<th>Point</th>
					<td>:</td>
					<td><?php echo $data['poiint_anggota']; ?></td>
				</tr>
				<tr>
					<th>Bergabung</th>
					<td>:</td>
					<td><?php echo $data['tanggal_bergabung']; ?></td>
				</tr>
				</table>
			</div>
			</div>
			<div class="panel-footer">
				<div align="center">
                    <a href="?perihal=album_foto&id_album=<?php echo $data['id_album_foto']; ?>" class="btn btn-success btn-xs">LIHAT</a>
				</div>
			</div>
        </div>
	</div>
<?php
	$syarat=$pemisah_baris%3;
	if($syarat==0)
		{	echo"</div><div class='row'>";	}
		
	$pemisah_baris++;
	$peringkat++;
	}
?>
</div>

<div class="row">
	<div class="col-md-12" align="right">
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
							$b=$b+16;
							}
							?>
	</div>
</div>