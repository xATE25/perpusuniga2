<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_perpusuniga');

if (mysqli_connect_error()) {
	printf("connect failed:", mysqli_connect_error());
	exit();
}
