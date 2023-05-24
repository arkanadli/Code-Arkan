<!DOCTYPE html>
<head>
	<title>tampil data</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
	.container {
		padding: 20px;
		padding-bottom: 100px;
		position: relative;
	}
	form {
		margin-bottom :25px;
	}
	table tr {
		padding-bottom :100px;
	
	} 
	/* hahaahah */
</style>
<body>
	<div class="container shadow-lg p-3 mb-5 bg-body rounded" style=" margin-top:100px; width:65%;">
    <form method="POST" action="tambah.php">
    <button type="input" class="btn btn-outline-primary">Tambah</button>

    </form>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Pengguna</th>
			<th>Aksi</th>
		</tr>
	</div>
		<?php 
		include 'konek.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pelanggan");
		while($d = mysqli_fetch_array($data)){	
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td>
					<a role ="button" class="btn btn-info" href="edit.php?id=<?php echo $d['id_Pelanggan']; ?>">UBAH</a> </button>
					<a role ="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id_Pelanggan']; ?>">HAPUS</a></button>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>