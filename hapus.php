<?php
$id = $_GET['id_mahasiswa'];

include "connection.php";
$delete = mysqli_query($koneksi, "DELETE FROM t_mahasiswa Where id_mahasiswa = $id") or die(mysqli_error($koneksi));
if ($delete) {
	echo "<script>alert('Data berhasil dihapus');location.href='data_mahasiswa.php';</script>";
} else {
	echo "<script>alert('Data gagal dihapus');location.href='data_mahasiswa.php';</script>";
}
