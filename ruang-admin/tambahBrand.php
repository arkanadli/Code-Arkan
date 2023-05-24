<!DOCTYPE html>
<html>

<head>
	<title>tambah Brand</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
	tr td {
		padding: 20px;
	}
</style>
<!-- geloo -->
<body>
	<div class="container shadow-lg p-3 mb-5 bg-body rounded" style="margin-top:100px; width:70%;">
		<br />
		<form method="POST" action="brand.php">
			<button type="submit" class="btn btn-outline-primary">Kembali</button>

		</form>
		<br />
		<br />
		<h3>TAMBAH BRAND</h3>
		<form method="POST" action="inputBrand.php">
			<table>
				<tr>
					<td>Nama Brand</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Asal Negara</td>
					<td><input type="text" name="asal_Negara"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit"  class="btn btn-success" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>