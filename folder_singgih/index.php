<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require 'koneksi.php';

    $sql = "SELECT * FROM mahasiswa";
    $hasil = $koneksi->query($sql);
?>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
     </tr>
<?php
if($hasil->num_rows > 0){
    While ($baris = $hasil->fetch_assoc()){
        ?>
        <tr>
            <td></td>
            <td><?=$baris['NIM'] ?></td>
            <td><?=$baris['NAMA']?></td>
            <td>
                <href="edit.php?nim=<?= $baris['nim']?><">edit</a>
                <a href="delete.php?nim=<?= $baris['nim']?>" onclick="alert('apakah anda yakin ingin menghapus?)"
        </tr>
        <?php
    }
}
?>
</table>
</body>
</html>