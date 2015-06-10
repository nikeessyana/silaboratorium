<!DOCTYPE html>
<html>
<head>
	<title>laboratorium unesa</title>
</head>
<body>
	<h2>JURUSAN TEKNIK INFORMATIKA</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Aset</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>id_dtl_aset</td>
				<td>:</td>
				<td><input type="text" name="id_dtl_aset" required></td>
			</tr>
			<tr>
				<td>no_seri</td>
				<td>:</td>
				<td><input type="text" name="no_seri" size="30" required></td>
			</tr>
			<tr>
				<td>merk</td>
				<td>:</td>
				<td><input type="text" name="merk" size="30" required></td>
			</tr>
			<tr>
				<td>sumber_dana</td>
				<td>:</td>
				<td><input type="text" name="sumber_dana" size="30" required></td>
			</tr>
			<tr>
				<td>nama_aset</td>
				<td>:</td>
				<td><input type="text" name="nama_aset" size="30" required></td>
			</tr>
			<tr>
				<td>qty</td>
				<td>:</td>
				<td><input type="text" name="qty" size="30" required></td>
			</tr>
			<tr>
				<td>id_aset</td>
				<td>:</td>
				<td><input type="text" name="id_aset" size="30" required></td>
			</tr>
			<tr>
				<td>spec</td>
				<td>:</td>
				<td><input type="text" name="spec" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>