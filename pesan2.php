<?php
include 'conn.php';

$jumlah = $_POST['jumlah'];
$idpro = $_POST['IDProduk'];

$sql = "UPDATE produk SET produkStok = produkStok - $jumlah WHERE produkID = $idpro";
$result3 = $connect->query($sql);
echo("berhasil tiga");
?>