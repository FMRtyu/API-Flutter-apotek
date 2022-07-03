<?php 
include 'conn.php';
    $data       = mysqli_query($connect, "select * from produk");
    $data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

    echo json_encode($data, JSON_UNESCAPED_SLASHES);
 ?>