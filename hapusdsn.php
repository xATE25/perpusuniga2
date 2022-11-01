<?php
$id = $_GET['id_dosen'];

include "connection.php";
$delete = mysqli_query($koneksi, "DELETE FROM t_dosen Where id_dosen = $id") or die(mysqli_error($koneksi));
if ($delete) {
    echo "<script>alert('Data berhasil dihapus');location.href='data_dosen.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus');location.href='data_dosen.php';</script>";
}
