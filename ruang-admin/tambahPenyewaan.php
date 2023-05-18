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
		<form method="POST" action="penyewaan.php">
			<button type="submit" class="btn btn-outline-primary">Kembali</button>

		</form>
		<br />
		<br />
		<h3>TAMBAH PENYEWAAN</h3>
		<form method="POST" action="inputPenyewaan.php">
			<table>
				<tr>
					<td>Id Pelanggan</td>
					<td><input type="text" name="id_Pelanggan"></td>
				</tr>
				<tr>
					<td>Id Supir</td>
					<td><input type="text" name="id_Supir"></td>
				</tr>
				<tr>
					<td>Id Mobil</td>
					<td><input type="text" name="id_Mobil"></td>
				</tr>

				<tr>
					<td>Tanggal Awal Sewa</td>
					<td><input type="date" name="tanggal_Sewa"></td>
				</tr>
				<tr>
					<td>Tanggal Akhir Sewa</td>
					<td><input type="date" name="akhir_Sewa"></td>
				</tr>
				<tr>
					<td>Status Pembayaran</td>
					<td><input type="text" name="status"></td>
				</tr>
				<tr>
					<td>Total Bayar</td>
					<td><input type="number" name="total_Bayar"></td>
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