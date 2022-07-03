<?php
include 'conn.php';

$ctt = $_POST['catatan'];
$sts = $_POST['status'];
$idpes = $_POST['idpesanan'];

$sql = "UPDATE pesanan SET status = '$sts', catatan = '$ctt'  WHERE IDPesanan = $idpes";
$result3 = $connect->query($sql);
echo("berhasil tiga");
?>