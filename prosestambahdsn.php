<?php
if ($_POST) {
    $nama_dosen = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telpon'];

    if (empty($nama_dosen)) {
        echo "<script>alert('Nama  tidak boleh kosong');location.href='tambahdsn.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat  tidak boleh kosong');location.href='tambahdsn.php';</script>";
    } elseif (empty($telepon)) {
        echo "<script>alert('telpon  tidak boleh kosong');location.href='tambahdsn.php';</script>";
    } else {
        include "connection.php";
        $insert = mysqli_query($koneksi, "iNSERT INTO t_dosen (nama_dosen, alamat, telpon)
				value ('" . $nama_dosen . "','" . $alamat . "','" . $telpon . "')") or die(mysqli_error($koneksi));
        if ($insert) {
            echo "<script>alert('Data berhasil ditambahkan');location.href='data_dosen.php';</script>";
        } else {
            echo "<script>alert('Data gagal ditambahkan');location.href='tambahdsn.php';</script>";
        }
    }
}
