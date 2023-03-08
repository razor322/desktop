<?php
include 'koneksi.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    body {
        background-color: aliceblue;
    }
</style>

<body>

    <div class="container mt-3 ">
        <div class="col-md-4">
            <?php
            include 'koneksi.php';

            $edit = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id='$_GET[id_edt]'");
            $data = mysqli_fetch_array($edit);



            ?>
            <h2>Form Edit Mahasiswa</h2>
            <a href="index.php">Lihat data</a>
            <div class="row">
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">NIM </label>
                        <input type="text" class="form-control" name="nim" value="<?= $data["nim"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama </label>
                        <input type="text" class="form-control" name="nama" value="<?= $data["nama_mhs"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?= $data["tgl_lahir"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea rows="3" name="alamat" class="form-control"><?= $data["alamat"]; ?>
                    </textarea>
                    </div>
                    <div class="mb-3">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <input type="submit" class="btn btn-primary" name="update" value="Submit">
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['update'])) {
                    $id = $_GET['id_edt'];
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $tgl_lahir = $_POST['tgl_lahir'];
                    $alamat = $_POST['alamat'];


                    //query
                    $sql = mysqli_query($con, "UPDATE  mahasiswa  SET
                            nim = '$nim', 
                            nama_mhs = '$nama', 
                            tgl_lahir = '$tgl_lahir', 
                            alamat = '$alamat' 
                            WHERE id = '$id'");


                    if ($sql) {
                        echo "
            <script>
                alert('Data Berhasil Diubah!');
                 document.location.href = 'index.php';
            </script>";
                    } else {
                        echo "
            <script>
                alert('Data Gagal Diubah!');
            </script>";
                    }
                }

                ?>

            </div>
        </div>
    </div>
</body>

</html>