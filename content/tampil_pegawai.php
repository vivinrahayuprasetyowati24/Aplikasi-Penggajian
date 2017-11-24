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
	<link rel="stylesheet" type="text/css" href="../content/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h1 align="center">Data Pegawai</h1>

<center>
<a href="index.php?page=tambah_pegawai" class="btn btn-info btn lg">Tambah Pegawai</a>
<div class="kanan">
<a href="http://localhost/apk_penggajian/fpdf/index.php" target="_blank" style="text-align: right;" class="btn btn-success btn-md">Print</a><br>
</div>
 <table class="table">
 	<thead>
		<tr>
			<th>Nip</th>
			<th>Nama</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Nama Jabatan</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		</thead>
		 <tbody>
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

			<a href= "index.php?page=edit_pegawai&id=<?php echo $pegawai['id_pegawai']?>"><button class="btn btn-warning btn-md"> Edit</button></a>
			<a href="hapus_pegawai.php?id=<?php echo $pegawai['id_pegawai']?>"><button class="btn btn-danger btn-md">Hapus</button></a>

			</td>
		</tr>

<?php endforeach; ?>
</center>
</tbody>
</body>
</html>
