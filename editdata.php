<?php
include "connection.php";

$id = $_POST['id_mahasiswa'];
$nama_mahasiswa = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];


if (empty($nama_mahasiswa)) {
	echo "<script>alert('Nama mahasiswa tidak boleh kosong');location.href='data_mahasiswa.php';</script>";
} elseif (empty($nim)) {
	echo "<script>alert('NIM mahasiswa tidak boleh kosong');location.href='data_mahasiswa.php';</script>";
} elseif (empty($alamat)) {
	echo "<script>alert('Alamat mahasiswa tidak boleh kosong');location.href='data_mahasiswa.php';</script>";
} elseif (empty($username)) {
	echo "<script>alert('Username tidak boleh kosong');location.href='data_mahasiswa.php';</script>";
} elseif (empty($password)) {
	echo "<script>alert('Password tidak boleh kosong');location.href='data_mahasiswa.php';</script>";
} else {
	$update = mysqli_query($koneksi, "UPDATE t_mahasiswa set nama_mahasiswa='$nama_mahasiswa', nim='$nim', alamat='$alamat',username= '$username',password= '$password' where id_mahasiswa='$id'") or die(mysqli_error($koneksi));
	if ($update) {
		echo "<script>alert('Data berhasil diedit');location.href='data_mahasiswa.php';</script>";
	} else {
		echo "<script>alert('Data gagal diedit');location.href='data_mahasiswa.php';</script>";
	}
}
