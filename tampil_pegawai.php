<?php
include "../koneksi.php"; 

$sql = "SELECT id_pegawai, NIP, nama, tempat_lahir, tanggal_lahir, kode_jabatan, status FROM pegawai";
$data = mysqli_query($db,$sql);

function tampiljabatan($idjabatan, $db){
		$sql = "SELECT nama_jabatan FROM jabatan WHERE kode_jabatan='$idjabatan'";
		$data = mysqli_query($db,$sql);
		$jenis = mysqli_fetch_assoc($data);
		return $jenis['nama_jabatan'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tampil  Pegawai</title>
</head>
<body>

<h1 align="center">Data Pegawai</h1>

<center>
<a href="tambah_pegawai.php">Tambah Pegawai</a>
<a href="http://localhost/apk_penggajian/fpdf/index.php" target="_blank" style="text-align: right;">Print</a><br>

<table border="1%">
		<tr>
			<th>Nip</th>
			<th>Nama</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Nama Jabatan</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
<?php
	foreach ($data as $pegawai):
?>		
		<tr>
			<td><?php echo $pegawai['NIP']; ?></td>		
			<td><?php echo $pegawai['nama']; ?></td>
			<td><?php echo $pegawai['tempat_lahir']; ?></td>
			<td><?php echo $pegawai['tanggal_lahir'];?></td>
			<td><?php echo tampiljabatan($pegawai['kode_jabatan'],$db);?></td>
			<td><?php echo $pegawai['status']; ?></td>
			<td>
			<a href="edit_pegawai.php?id=<?php echo $pegawai['id_pegawai']?>">Edit</a>
			<a href="hapus_pegawai.php?id=<?php echo $pegawai['id_pegawai']?>">Hapus</a>
			</td>
		</tr>
<?php endforeach; ?>
</center>
</body>
</html>