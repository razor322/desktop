<?php
include 'koneksi.php';
$mhs = mysqli_query($con, "SELECT * FROM mahasiswa");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    .<div class="container">
        <div class="row">
            <h2>Data Mahasiswa</h2>
            <a href="tambah.php">Tambah data</a>
            <table class="table table-bordered  table-hover table-responsive">
                <tr class="table-primary">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tanggal lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php $i = 1  ?>
                <?php foreach ($mhs as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td> <?= $row["nim"]; ?></td>
                        <td> <?= $row["nama_mhs"]; ?></td>
                        <td><?= $row["tgl_lahir"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td>
                            <a href="edit.php?id_edt=<?= $row["id"]; ?>" class=" btn btn-warning">Edit</a>
                            <a href=" hapus.php?id_hps=<?= $row["id"]; ?>" onclick="return confirm('Yakin hapus data ?');" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++  ?>
                <?php endforeach;  ?>
            </table>
        </div>
    </div>
</body>

</html>