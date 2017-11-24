<?php
include "../koneksi.php";

$id_pegawai = $_GET['id'];

if (isset($_POST['kirim'])) {
	$NIP = $_POST['NIP'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$kode_jabatan = $_POST['kode_jabatan'];
	$status = $_POST['status'];

	$sql = "UPDATE pegawai set NIP='$NIP',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',kode_jabatan='$kode_jabatan',status='$status' WHERE id_pegawai='$id_pegawai' ";

	$pegawai = mysqli_query($db,$sql);

	if ($pegawai) {

	echo "<script>alert('Berhasil Di Simpan')</script>";
    echo "<script>location = 'index.php?page=tampil_pegawai'</script>";
	}else{
		echo "Barang tersimpan<br>";
		echo mysqli_error($db);
	}
}

$id_barang = $_GET['id'];

$sql = "SELECT NIP,nama,tempat_lahir,tanggal_lahir,kode_jabatan,status FROM pegawai WHERE id_pegawai = '$id_pegawai'";
$data = mysqli_query($db,$sql);

$pegawai = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
	<title>pegawai</title>
</head>
<body>
<h1 align="center">Edit Pegawai</h1>
<link rel="stylesheet" type="text/css" href="../content/css/style.css">
<center>
<table>	
	<div class="row">
	<form role="form" method="POST">
	<div class="form-group">
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><input class="form-control" type="text" name="NIP" Nip" value="<?php echo $pegawai['NIP'] ?>"></td>
	</tr>
</div>
<div class="form-group">
	<tr>
		<td>Nama </td>
		<td>:</td>
		<td><input class="form-control" type="text" name="nama" value="<?php echo $pegawai['nama'] ?>"></td>
	</tr>
</div>
<div class="form-group">
	<tr>
		
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input class="form-control" type="text" name="tempat_lahir" value="<?php echo $pegawai['tempat_lahir'] ?>"></td>
	</tr>
</div>
<div class="form-group">
	<tr>
	<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input class="form-control" type="date" name="tanggal_lahir" value="<?php echo $pegawai['tanggal_lahir'] ?>"></td>
	</tr>
</div>
<div class="form-group">
	<tr>
		<td>Kode Jabatan</td>
		<td>:</td>
		<td><select class="form-control" name="kode_jabatan">
			<option value="<?php echo $pegawai['kode_jabatan'] ?>"><?php echo $pegawai['kode_jabatan'] ?></option>
				<option value="JB001">JB001</option>
				<option value="JB002">JB002</option>
		</select></td>
	</tr>	
</div>
<div class="form-group">
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><select class="form-control" name="status">
				<option value="<?php echo $pegawai['status'] ?>"><?php echo $pegawai['status'] ?></option>
				<option value="Belum Menikah">Belum Menikah</option>
				<option value="Sudah Menikah">Sudah Menikah</option>
				<option value="Duda">Duda</option>
				<option value="Janda">Janda</option>
		</select></td>
	</tr>
</div>
<div class="form-group">
	<td><input type="submit" name="kirim" value="Simpan"  class="btn btn-primary btn-lg"></td>
	</div>
	</form>
</table>
</center>
</body>
</html>
