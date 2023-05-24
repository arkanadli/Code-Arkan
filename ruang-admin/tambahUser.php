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
<!-- ngga tauu  -->
<body>
	<div class="container shadow-lg p-3 mb-5 bg-body rounded" style="margin-top:100px; width:70%;">
		<br />
		<form method="POST" action="index.php">
			<button type="submit" class="btn btn-outline-primary">Kembali</button>

		</form>
		<br />
		<br />
		<h3>TAMBAH USER</h3>
		<form method="POST" action="inputuser.php">
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>no handphone</td>
					<td><input type="text" name="no_Handphone"></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>umur</td>
					<td><input type="number" name="umur"></td>
				</tr>
				<tr>
					<td>role</td>
					<td><input type="text" name="role"></td>
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