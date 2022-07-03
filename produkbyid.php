<?php 
include 'conn.php';

$id = $_POST['id'];

$data       = mysqli_query($connect, "SELECT * from produk WHERE produkID = '$id'");
$data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

    echo json_encode($data, JSON_UNESCAPED_SLASHES);
 ?>