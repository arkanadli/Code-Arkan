<!DOCTYPE html>
<html>

<head>
	<title>tambah data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
	tr td {
		padding: 20px;
	}
</style>

<body>
	<div class="container shadow-lg p-3 mb-5 bg-body rounded" style="margin-top:100px; width:70%;">
		<br />
		<form method="POST" action="jenis.php">
			<button type="submit" class="btn btn-outline-primary">Kembali</button>

		</form>
		<br />
		<br />
		<h3>TAMBAH JENIS</h3>
		<form method="POST" action="inputJenis.php">
			<table>
				<tr>
					<td>Id Brand</td>
					<td><input type="text" name="id_Brand"></td>
				</tr>

				<tr>
					<td>Nama Jenis</td>
					<td><input type="text" name="nama_Jenis"></td>
				</tr>
				<tr>
					<td>Jumlah Kursi</td>
					<td><input type="number" name="jumlah_Kursi"></td>
				</tr>
				<tr>
					<td>Tahun Keluaran</td>
					<td><input type="number" name="tahun_Keluaran"></td>
				</tr>
				<tr>
					<td>Tarif per Hari</td>
					<td><input type="text" name="tarif"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-success" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>