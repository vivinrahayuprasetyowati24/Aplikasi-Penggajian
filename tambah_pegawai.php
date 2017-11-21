<?php

	if (isset($_POST['kirim'])){
	include "../koneksi.php";

	$NIP = $_POST['NIP'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$kode_jabatan = $_POST['kode_jabatan'];
	$status = $_POST['status'];

	$sql = "INSERT INTO pegawai(NIP, nama, tempat_lahir, tanggal_lahir, kode_jabatan, status) VALUES ('$NIP','$nama','$tempat_lahir','$tanggal_lahir','$kode_jabatan','$status') ";

	$pegawai = mysqli_query($db,$sql);


}

?>
<!DOCTYPE html>
<html>
<head>
	<title>pegawai</title>
</head>
<body>
<h1>Tambah Data Pegawai</h1>
<center>
<table>	
	<form method="POST">
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><input type="text" name="NIP" placeholder="Masukan Nip"></td>
	</tr>
	<tr>
		<td>Nama </td>
		<td>:</td>
		<td><input type="text" name="nama" placeholder="Masukan Nip"></td>
	</tr>
	<tr>
		
		<td>tempat lahir</td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir" placeholder="Masukan Nip"></td>
	</tr>
	<tr>
	<td>tanggal lahir</td>
		<td>:</td>
		<td><input type="date" name="tanggal_lahir"></td>
	</tr>
	<tr>
		<td>Kode Jabatan</td>
		<td>:</td>
		<td><select name="kode_jabatan">
			<option value="JB001">JB001</option>
			<option value="JB001">JB002</option>
		</select></td>
	</tr>	
	<tr>
		<td>status</td>
		<td>:</td>
		<td><select name="status">
			<option value="Sudah Menikah">Sudah Menikah</option>
			<option value="Belum Menikah">Belum Menikah</option>
			<option value="Duda">Duda</option>
			<option value="Janda">Janda</option>	
		</select></td>
	</tr>
	<td><input type="submit" name="kirim" value="Simpan"></td>
	</form>
</table>
</center>
</body>
</html>
