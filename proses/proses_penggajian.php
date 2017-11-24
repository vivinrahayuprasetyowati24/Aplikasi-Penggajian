<?php 
	include '../koneksi/crud.php';
	$simpan=$proses->simpan("gaji","'$_POST[no_slip]',
										'$_POST[tanggal]',
										'$_POST[pendapatan]',
										'$_POST[potongan]',
										'$_POST[gaji_bersih]',
										'$_POST[nip]',
										'$_POST[kode_petugas]'");
	echo "<script>document.location = '../content/tampil_print.php'</script>";
 ?>