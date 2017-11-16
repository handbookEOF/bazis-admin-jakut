<h3>Info Dasar Anggota</h3>
<?php
include "../asset/sambung_database.php";
$tampil="SELECT*FROM anggota where user_anggota = '$user_anggota'";
$cek=mysql_query($tampil) or die (mysql_error());
while ($data=mysql_fetch_array($cek))
{
	$password_database=$data['password_anggota'];
	$katagori_database=$data['katagori'];
	$js_ident_database=$data['jenis_identitas_anggota'];
?>
<table width="100%" border="0">
<tr>
	<th align="left">User Anggota</th>
	<td>:</td>
	<td><?php echo $data['user_anggota'];?></td>
	<td>&nbsp;</td>
	<th align="left">Nama Anggota</th>
	<td>:</td>
	<td><?php echo $data['nama_anggota'];?></td>
</tr>
<tr>
	<th align="left">Jenis Identitas</th>
	<td>:</td>
	<td><?php echo $data['jenis_identitas_anggota'];?></td>
	<td>&nbsp;</td>
	<th align="left">Nomer Identitas</th>
	<td>:</td>
	<td><?php echo $data['no_identitas_anggota'];?></td>
</tr>
<tr>
	<th align="left">Katagori Anggota</th>
	<td>:</td>
	<td><?php echo $data['katagori'];?></td>
	<td>&nbsp;</td>
	<th align="left">Tanggal Bergabung</th>
	<td>:</td>
	<td><?php echo $data['tanggal_bergabung'];?></td>
</tr>
<tr>
	<th align="left">Email Anggota</th>
	<td>:</td>
	<td><?php echo $data['email_anggota'];?></td>
	<td>&nbsp;</td>
	<th align="left">Telpon Anggota</th>
	<td>:</td>
	<td><?php echo $data['telpon'];?></td>
</tr>
<tr>
	<th align="left">Alamat Anggota</th>
	<td>:</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td colspan="7"><?php echo $data['alamat'];?></td>
</tr>
<tr>
	<td colspan="7" align="center">
	<br>
		<?php if ($_GET['use'] == "") { ?>
		<a class="button" href="?perihal=indasub">Ubah Info Dasar</a>
		<a class="button" href="?perihal=foto">Ubah Foto</a>
		<a class="button" href="?perihal=password">Ubah Password</a>
		<?php } ?>
	</td>
</tr>
</table>
<?php
}

if($_GET['perihal']=="password")
{
?>

<script type="text/javascript">
		function Validasi_Pass()
		{  

		var pass=document.getElementById('pass').value;
		var repass=document.getElementById('repass').value;
		var passlam=document.getElementById('passlam').value;
		var passdb=document.getElementById('passdb').value;

		if (passdb=="" || passlam =="" || pass == "" || repass == "")
		{
			alert("Ada form yang belum terisi");  return false; 
		}  
		if(passdb != passlam)
		{
			alert("Password Lama Anda Tidak Sesuai");  return false; 
		}
		if(pass != repass)
		{
			alert("Password dan Repassword Anda Tidak Sama");  return false; 
		}
		return true;  
		}  
</script>
		
<HR>
<form action="logik_anggota.php" method="POST" onsubmit="return Validasi_Pass();">
<table align="left" width="50%">
	<tr><th colspan="6">Form Ubah Password</th></tr>
	<tr>
		<td>PASSWORD LAMA</td>
		<td><input type="password" name="password" size="20" placeholder="Password Lama..." id="passlam"></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td><input type="password" name="password" size="20" placeholder="Password..." id="pass"></td>
	</tr>
	<tr>
		<td>RE-PASSWORD</td>
		<td><input type="password" name="repassword" size="20" placeholder="Re-Password..." id="repass"></td>
	</tr>
	<tr><th colspan="6">
	
	<input type="hidden" name="passdb" id="passdb" value="<?php echo $password_database ?>">
	<input type="hidden" name="perintah" value="ubah_password_anggota">
	<input type="hidden" value="<?php echo $_SESSION['user_anggota_bazis_jakut']; ?>" name="user">
	<input type="submit" class="button" value="Ubah Password">
	</th></tr>
</table>
<?php
}

else if($_GET['perihal']=="indasub")
{
?>
		<script type="text/javascript">
		function Validasi_Indasub()
		{  
		var angka = "0123456789"; 
		var x = 0; 
		var nama=document.getElementById('nama').value; 
		var email=document.getElementById('email').value;
		var telpon=document.getElementById('telpon').value;
		var alamat=document.getElementById('alamat').value;
		var katagori=document.getElementById('katagori').value;
		var katagori_database=document.getElementById('katagori_database').value;
		var js_ident_database=document.getElementById('js_ident_database').value;
		var js_ident=document.getElementById('js_ident').value;
		var no_ident=document.getElementById('no_ident').value;
		
		if (email=="" && telpon =="" && nama == "" && alamat == "" && no_ident == "" && js_ident == js_ident_database && katagori == katagori_database)
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
		if (no_ident.length > 0) 
		{
				for (var u=0; u < no_ident.length; u++) 
				{ 
					digitc = "" + no_ident.substring(u, u+1); 
					if (angka.indexOf(digitc) == "-1") 
					{ 
						window.alert("Karakter pada No Identitas yang dimasukkan salah (harus angka semua)"); return false; 
					}  
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
		<form action="logik_anggota.php" method="POST" onsubmit="return Validasi_Indasub();">
		<table align="center" width="70%">
			<tr>
				<tr><th colspan="6">Form Ubah Info Dasar Anggota</th></tr>
				<tr>
					<th>Nama Anggota</th>
					<td><input type="text" name="nama" size="30" placeholder="Nama Anggota..." id="nama"></td>
					<th>Anggota Merupakan</th>
					<td>
						<select name="katagori" id="katagori">
							<option value="Individu" <?php if($katagori_database == "Individu") echo"selected='1'"; ?>>Perorangan</option>
							<option value="Kelompok" <?php if($katagori_database == "Kelompok") echo"selected='1'"; ?>>Kelompok/Organisasi Masyarakat</option>
							<option value="CV" <?php if($katagori_database == "CV") echo"selected='1'"; ?>>CV ( Perseroan Komanditer )</option>
							<option value="PT" <?php if($katagori_database == "PT") echo"selected='1'"; ?>>PT ( Perseroan Terbatas )</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>E-mail Anggota</th>
					<td><input type="email" name="email" size="30" placeholder="E-Mail Anggota..." id="email" ></td>
					<th>Telpon Anggota</th>
					<td><input type="text" name="telpon" size="30" placeholder="Telpon Anggota..." id="telpon" maxlength="12"></td>
				</tr>
				<tr>
					<th>Jenis Identitas</th>
					<td>
						<select name="js_ident" id="js_ident">
							<option value="NPWP" <?php if($js_ident_database == "NPWP") echo"selected='1'"; ?>>NPWP ( Nomor Pokok Wajib Pajak )</option>
							<option value="KTP" <?php if($js_ident_database == "KTP") echo"selected='1'"; ?>>KTP ( Kartu Tanda Anggota )</option>
						</select>
					</td>
					<th>No Identitas</th>
					<td><input type="text" name="no_ident" size="30" placeholder="Nama Anggota..." id="no_ident"></td>
				</tr>
				<tr>
					<th colspan="4" align="left">
					Alamat Anggota
					</th>
				</tr>
				<tr>
					<td colspan="4" align="center">
					<textarea cols="100%" rows="2" name="alamat" id="alamat"></textarea>
					</td>
				</tr>
				<tr>
					<th colspan="4" align="center">
					
						<input type="hidden" name="perintah" value="ubah_info_anggota">
						<input type="hidden" name="katagori_database" id="katagori_database" value="<?php echo $katagori_database; ?>">
						<input type="hidden" name="js_ident_database" id="js_ident_database" value="<?php echo $js_ident_database; ?>">
						<input type="hidden" value="<?php echo $_SESSION['user_anggota_bazis_jakut']; ?>" name="user">
						<input type="submit" class="button" value="Simpan Info Baru">
					</th>
				</tr>
				</table>
				</form>
				NB : Kosongkan Kolom Jika Data Tersebut Tidak Ingin Diubah...
<?php
}
?>