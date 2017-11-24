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
	if ($pegawai) {
		echo "<script>alert('Berhasil Tambah Data')</script>";
    echo "<script>location = 'index.php?page=tampil_pegawai'</script>";

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pegawai</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1>Tambah Data Pegawai</h1>
<center>
<table>	

	<div class="row">
	<form role="form" method="POST">
	<div class="form-group">
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><input class="form-control" type="text" name="NIP" placeholder="Masukan Nip"></td>
	</tr>
	<tr>
		<td>Nama </td>
		<td>:</td>
		<td><input class="form-control" type="text" name="nama" placeholder="Masukan Nip"></td>
	</tr>
	<tr>
		
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input class="form-control" type="text" name="tempat_lahir" placeholder="Masukan Nip"></td>
	</tr>
	<tr>
	<td>Tanggal lahir</td>
		<td>:</td>
		<td><input class="form-control" type="date" name="tanggal_lahir"></td>
	</tr>
	<tr>
		<td>Kode Jabatan</td>
		<td>:</td>
		<td><select class="form-control" name="kode_jabatan">
			<option value="JB001">JB001</option>
			<option value="JB001">JB002</option>
		</select></td>
	</tr>	
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><select class="form-control" name="status">
			<option value="Sudah Menikah">Sudah Menikah</option>
			<option value="Belum Menikah">Belum Menikah</option>
			<option value="Duda">Duda</option>
			<option value="Janda">Janda</option>	
		</select></td>
	</tr>
	<td><input type="submit" name="kirim" value="Simpan" class="btn btn-primary btn-lg"></td>
	</form>
</table>
</center>
</body>
</html>
