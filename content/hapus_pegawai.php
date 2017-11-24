<?php
include "../koneksi.php";

$id_pegawai = $_GET['id'];
$sql = "DELETE from pegawai WHERE id_pegawai='$id_pegawai'";

$pegawai = mysqli_query($db,$sql);
	if ($pegawai) {
	echo "<script>alert('Berhasil Hapus Data')</script>";
    echo "<script>location = 'index.php?page=tampil_pegawai'</script>";
	}else{
		echo "Barang Gagal di Hapus<br>";
		echo mysqli_error($db);
	}
?>