<?php
 include "../koneksi.php";

 $sql = "SELECT * FROM gaji ORDER BY no_slip DESC LIMIT 0,1";
 
 $gaji = mysqli_query($sql, $db);
 $kodeawal=substr($gaji['no_slip'],3,4)+1;
 if($kodeawal<10){
  $kode='SLP00'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='SLP0'.$kodeawal;
 }else{
  $kode='SLP0'.$kodeawal;
 }	
?>

<!DOCTYPE html>
<html>
<head>
	<title>pegawai</title>
</head>
<body>
<center>	
<h1>Penggajian</h1>
<center>
<table>	
	<form method="POST">
	<tr>
		<td>No Slip</td>
		<td>:</td>
		<td><input type="text" name="no_slip" value="<?php echo $kode;?>"  readonly="onkenyup"></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td>:</td>
		<td><input type="date" name="Tanggal"></td>
	</tr>
	<tr>
		<td>Nip</td>
		<td>:</td>
		<td><input type="text" name="NIP" placeholder="Masukan NIP"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" placeholder="Masukan Nama"></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><input type="text" name="nama_jabatan" placeholder="Nama Jabatan"></td>
	</tr>	
	<tr>
		
		<td>Gaji Pokok</td>
		<td>:</td>
		<td><input type="text" name="gaji_pokok" placeholder="Gaji Pokok"></td>
	</tr>
	<tr>
		<td>Kode Petugas</td>
		<td>:</td>
		<td><input type="text" name="kode_petugas"></td>
	</tr>	
	<td><input type="submit" name="kirim" value="Cetak"></td>
	</form>
</table>
</center>
</body>
</html>
