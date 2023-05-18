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
		<form method="POST" action="mobil.php">
			<button type="submit" class="btn btn-outline-primary">Kembali</button>

		</form>
		<br />
		<br />
		<h3>TAMBAH MOBIL</h3>
		<form method="POST" action="inputMobil.php">
			<table>
				<tr>
					<td>Id Jenis</td>
					<td><input type="text" name="id_Jenis"></td>
				</tr>

				<tr>
					<td>Warna Mobil</td>
					<td><input type="text" name="warna_Mobil"></td>
				</tr>
				<tr>
					<td>nopol_Mobil</td>
					<td><input type="text" name="nopol_Mobil"></td>
				</tr>
				<tr>
					<td>Status Peminjaman</td>
					<td><input type="text" name="status"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-success" value="SIMPAN"></td>
					<?php echo "<script>alert('Data Berhasil Diubah!');window.location='penyewaan.php';</script>"; ?>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>