<html>

<head>
    <title> Warkop Ku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<!-- coba -->
<!-- sadsad -->
<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded" style=" margin-top:100px; width:65%;">
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Jenis Mobil</th>
                <th>Warna Mobil</th>
                <th>No Polisi Mobil</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
    </div>
    <?php
    include 'konek.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from mobil");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['id_Jenis']; ?></td>
            <td><?php echo $d['warna_Mobil']; ?></td>
            <td><?php echo $d['nopol_Mobil']; ?></td>
            <td><?php echo $d['status']; ?></td>
            <td>
                <a role="button" class="btn btn-primary" href="booking.php?id=<?php echo $d['id_Mobil']; ?>">BOOKING</a></button>
            </td>
        </tr>
    <?php
    }
    ?>
    </table>

</body>

</html>