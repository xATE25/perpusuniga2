<?php
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome.min.css">
</head>

<body style="width: 500px; margin: auto; margin-top: 10px">
    <form action="prosestambahdsn.php" method="POST">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id_dosen" id="id_dosen">
            <label>Nama Dosen</label>
            <input type="text" class="form-control" name="nama" id="nama_Dosen">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat"></textarea>
        </div>
        <div class="form-group">
            <label>Telepon</label>
            <textarea class="form-control" name="telpon" id="telpon"></textarea>
        </div>
        </div>

        <button style="float: right;" type="submit" class="btn btn-success">Simpan</button>
        <a style="float: right; margin-right: 10px" href="data_dosen.php" type="button" class="btn btn-danger">Batal</a>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

</html>