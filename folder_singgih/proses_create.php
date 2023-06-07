<?php

require 'koneksi.php';

$Nama = $_POST['input_nama'];
$Nim = $_POST['input_nim'];

$sql = "INSERT INTO tabel_mahasiswa VALUES ('$nama','$nim')";
$koneksi->query($sql);

header("localion: index.php");
?>