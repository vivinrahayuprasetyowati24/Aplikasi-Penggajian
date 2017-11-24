<!DOCTYPE html>
<html>
<head>
	<title>thickbox</title>
	<link rel="stylesheet" type="text/css" href="../content/css/thickbox.css">
</head>
<body>
<div class="bg-thick">
<div class="in-thickbox">
	<h1>Tambah data Pegawai</h1>
	<h3 onclick="thickbox('','tutup')"> X </h3>
	
	<p>NIP</p>
	<p><input type="text" name="NIP" placeholder="Masukan Nip">
	</p>
	<p>Nama</p>
	<p><input type="text" name="nama" placeholder="Masukan Nama">
	</p>
	<p>Tempat Lahir</p>	
	<p><input type="text" name="tempat_lahir" placeholder="Masukan Nama">
	</p>
	<p>Tanggal Lahir</p>
	<p><input type="date" name="tanggal_lahir">
	</p>
	<p>Kode Jabatan</p>
	<p><select name="kode_jabatan">
			<option value="JB001">JB001</option>
			<option value="JB001">JB002</option>
		</select>
	</p>
	<p>Status</p>
	<p><select name="status">
			<option value="Sudah Menikah">Sudah Menikah</option>
			<option value="Belum Menikah">Belum Menikah</option>
			<option value="Duda">Duda</option>
			<option value="Janda">Janda</option>	
		</select>
	</p>

	<p>
		<input type="submit" name="kirim" value="SIMPAN"></button>
	</p>	

</div>
</div>
</div>
</body>
</html>