<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id_barang']) && !empty($_POST['id_barang']) && $_POST['id_barang'] != 'auto' ? $_POST['id_barang'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
    $email = isset($_POST['Masukan_Member']) ? $_POST['Masukan_Member'] : '';
    $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
    $pekerjaan = isset($_POST['Jumlah_barang']) ? $_POST['Jumlah_barang'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id_barang, $nama_barang, $Masukan_Member, $notelp, $Jumlah_barang]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Penjualan Barang</h2>
    <form action="create.php" method="post">
        <label for="id">id_barang</label>
        <label for="nama">nama_barang</label>
        <input type="text" name="id_barang" value="auto" id="id_barang">
        <input type="text" name="nama_barang" id="nama_barang">
        <label for="Masukan_Member">Masukan_Member</label>
        <label for="notelp">No. Telp</label>
        <input type="text" name="Masukan_Member" id="Masukan_Member">
        <input type="text" name="notelp" id="notelp">
        <label for="Jumlah_barang">Jumlah_barang</label>
        <input type="text" name="Jumlah_barang" id="Jumlah_barang">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>