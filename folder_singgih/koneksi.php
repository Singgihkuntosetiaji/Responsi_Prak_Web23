<?php

$server = "127.0.0.1";
$username = "root";
$password ="";
$dbname ="table_mahasiswa";

$koneksi = new mysqli($server, $username, $password, $dbname);

if (!$koneksi){
    die("koneksi gagal" . $koneksi->connect_error);
}else{
    echo "php mysql telah tersambung";
}