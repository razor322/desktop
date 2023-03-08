<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
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
            <h2>Form Input Mahasiswa</h2>
            <a href="index.php">Lihat data</a>
            <div class="row">
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">NIM </label>
                        <input type="text" class="form-control" name="nim">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama </label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea rows="3" name="alamat" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                            </div>
                            <div class="col-md-3">
                                <input type="reset" class="btn btn-secondary" name="reset" value="Reset">
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $tgl_lahir = $_POST['tgl_lahir'];

                    //query
                    $sql = mysqli_query($con, "INSERT INTO mahasiswa (nim,nama_mhs,tgl_lahir,alamat)
                                            VALUES ('$nim','$nama','$tgl_lahir','$alamat')
                                        ");
                    if ($sql) {
                        echo "
                        <script>
                            alert('data berhasil disimpan !');
                        </script>";
                    } else {
                        echo "
                        <script>
                            alert('data gagal  disimpan !');
                        </script>";
                    }
                }
                ?>

            </div>
        </div>
    </div>




</body>

</html>