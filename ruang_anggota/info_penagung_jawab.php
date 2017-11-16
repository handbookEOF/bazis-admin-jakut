<h3>Info Dasar Penangung Jawab Anggota</h3>
<?php
include "../asset/sambung_database.php";

	$user_login	=	$_SESSION['user_anggota_bazis_jakut'];

$tampil="SELECT*FROM pj_anggota where user_anggota = '$user_anggota'";
$cek=mysql_query($tampil) or die (mysql_error());
while ($data=mysql_fetch_array($cek))
{
	$nama_database		=	$data['nama_pj_anggota'];
	$telpon_database	=	$data['telpon_pj_anggota'];
	$email_database		=	$data['email_pj_anggota'];
	$alamat_database	=	$data['alamat_pj_anggota'];
	$user_database		=	$data['user_anggota'];
	$id					=	$data['id_pj_anggota'];
}
?>
<table width="100%" border="0">
<tr>
	<th align="left">Nama</th>
	<td>:</td>
	<td><?php echo $nama_database;?></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<th align="left">Email</th>
	<td>:</td>
	<td><?php echo $email_database;?></td>
	<td>&nbsp;</td>
	<th align="left">Telpon</th>
	<td>:</td>
	<td><?php echo $telpon_database;?></td>
</tr>
<tr>
	<th align="left">Alamat</th>
	<td>:</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td colspan="7"><?php echo $alamat_database;?></td>
</tr>
<tr>
	<td colspan="7" align="center">
	<br>
		<?php
		if ($user_database == $user_login){
		?>
		<a class="button" href="?perihal=inpejub">Ubah Info</a>
		<?php
		}
		else
		{
		?>
		<a class="button" href="?perihal=inpejta">Tambah Info</a>
		<?php
		}
		?>
	</td>
</tr>
</table>

<?php
if($_GET['perihal']=="inpejub")
{
?>
		<script type="text/javascript">
		function Validasi_ubah()
		{  
		var angka = "0123456789"; 
		var x = 0; 
		var nama=document.getElementById('nama').value; 
		var email=document.getElementById('email').value;
		var telpon=document.getElementById('telpon').value;
		var alamat=document.getElementById('alamat').value;
		
		if (email=="" && telpon =="" && nama == "" && alamat == "")
		{
			alert("Info tidak ada yang diubah");  return false; 
		}  
		if (email.length > 0) 
		{
			if ((email.indexOf('@',0)==-1) || (email.indexOf('.',0)==-1))
			{ 
			alert("Email Kurang Tepat");  return false; 
			}
		}
		if (telpon.length > 0) 
		{
			if (telpon.length!=12) 
			{ 
				alert("no telepon harus 12 karakter"); return false; 
			}  
				for (var i=0; i < telpon.length; i++) 
				{ 
					digitb = "" + telpon.substring(i, i+1); 
					if (angka.indexOf(digitb) == "-1") 
					{ 
						window.alert("Karakter pada No Telepon yang dimasukkan salah (harus angka semua)"); return false; 
					}  
				} 
		}
		return true;  
		}  
		</script>
		
		<hr>
		<form action="logik_anggota.php" method="POST" onsubmit="return Validasi_ubah();">
		<table align="center" width="70%">
			<tr>
				<tr><th colspan="6">Form Ubah Info Penangung Jawab Anggota</th></tr>
				<tr>
					<th>Nama</th>
					<td><input type="text" name="nama" size="30" placeholder="Nama..." id="nama"></td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td><input type="email" name="email" size="30" placeholder="E-Mail..." id="email" ></td>
					<th>Telpon</th>
					<td><input type="text" name="telpon" size="30" placeholder="Telpon..." id="telpon" maxlength="12"></td>
				</tr>
				<tr>
					<th colspan="4" align="left">
					Alamat
					</th>
				</tr>
				<tr>
					<td colspan="4" align="center">
					<textarea cols="100%" rows="2" name="alamat" id="alamat"></textarea>
					</td>
				</tr>
				<tr>
					<th colspan="4" align="center">
					
						<input type="hidden" name="perintah" value="pj_ubah">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<input type="hidden" value="<?php echo $user_database; ?>" name="user_database">
						<input type="submit" class="button" value="Simpan Info Baru">
					</th>
				</tr>
				</table>
				</form>
				NB : Kosongkan Kolom Jika Data Tersebut Tidak Ingin Diubah...
<?php
}

if($_GET['perihal']=="inpejta")
{
?>
		<script type="text/javascript">
		function Validasi_tambah()
		{  
		var angka = "0123456789"; 
		var x = 0; 
		var nama=document.getElementById('nama').value; 
		var email=document.getElementById('email').value;
		var telpon=document.getElementById('telpon').value;
		var alamat=document.getElementById('alamat').value;
		
		if (email=="" || telpon =="" || nama == "" || alamat == "")
		{
			alert("Ada Form Yang Belum Diisi");  return false; 
		}  
		if (email.length > 0) 
		{
			if ((email.indexOf('@',0)==-1) || (email.indexOf('.',0)==-1))
			{ 
			alert("Email Kurang Tepat");  return false; 
			}
		}
		if (telpon.length > 0) 
		{
			if (telpon.length!=12) 
			{ 
				alert("no telepon harus 12 karakter"); return false; 
			}  
				for (var i=0; i < telpon.length; i++) 
				{ 
					digitb = "" + telpon.substring(i, i+1); 
					if (angka.indexOf(digitb) == "-1") 
					{ 
						window.alert("Karakter pada No Telepon yang dimasukkan salah (harus angka semua)"); return false; 
					}  
				} 
		}
		return true;  
		}  
		</script>
		
		<hr>
		<form action="logik_anggota.php" method="POST" onsubmit="return Validasi_tambah();">
		<table align="center" width="70%">
			<tr>
				<tr><th colspan="6">Form Tambah Info Penangung Jawab Anggota</th></tr>
				<tr>
					<th>Nama</th>
					<td><input type="text" name="nama" size="30" placeholder="Nama..." id="nama"></td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td><input type="email" name="email" size="30" placeholder="E-Mail..." id="email" ></td>
					<th>Telpon</th>
					<td><input type="text" name="telpon" size="30" placeholder="Telpon..." id="telpon" maxlength="12"></td>
				</tr>
				<tr>
					<th colspan="4" align="left">
					Alamat
					</th>
				</tr>
				<tr>
					<td colspan="4" align="center">
					<textarea cols="100%" rows="2" name="alamat" id="alamat"></textarea>
					</td>
				</tr>
				<tr>
					<th colspan="4" align="center">
					
						<input type="hidden" name="perintah" value="pj_tambah">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<input type="hidden" value="<?php echo $_SESSION['user_anggota_bazis_jakut']; ?>" name="user_login">
						<input type="submit" class="button" value="Simpan Info">
					</th>
				</tr>
				</table>
				</form>
<?php
}
?>