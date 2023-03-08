<?php
include 'koneksi.php';

$hapus = mysqli_query($con, "DELETE FROM mahasiswa WHERE id ='$_GET[id_hps]'");

if ($hapus) {
    # code...
    echo "
        <script>
            alert('Data Berhasil Dihapus !');
            document.location.href = 'index.php';
        </script>";
}
