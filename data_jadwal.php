<?php include "navbar.php";
include "connection.php";
?>
<!DOCTYPE html>

<html>

<head>
    <title>Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome.min.css">
</head>

<body style="width: 1300px; margin: auto; margin-top: 10px">
    <a style="margin-bottom: 10px" href="tambahdsn.php" type="button" class="btn btn-success">Tambah Data</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
                <th scope="col">Dosen</th>
                <th scope="col">Matkul</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include "connection.php";
            $query = mysqli_query($koneksi, "SELECT * FROM t_jadwal ");
            $no = 0;
            while ($data = mysqli_fetch_array($query)) {
                $no++; ?>
                <tr>
                    <th><?= $no ?></th>
                    <td><?= $data['hari'] ?></td>>
                    <td><?= $data['jam'] ?></td>
                    <td><?= $data['id_dosen'] ?></td>
                    <td><?= $data['id_matkul'] ?></td>


                    <td style="color: #fff">
                        <a href='edit.php?id_jadwal=<?= $data['id_jadwal'] ?>' type="button" class="btn btn-warning">Edit</a>
                        <a href="hapusdsn.php?id_dosen=<?= $data['id_jadwal'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')" type="button" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

</html>