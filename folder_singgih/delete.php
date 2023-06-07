<?php

require 'koneksi.php';

$nim = $_GET['nim'];

$sqln = "DELET FROM mahasiswa WHERE nim = '$nim'";

$koneksi 