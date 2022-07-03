<?php 
include 'conn.php';

$nama = $_POST['nama'];

try{
    $query = "SELECT * from produk where produkNama like '%".$nama."%'";
    $data = mysqli_query($connect,$query);
    $data = mysqli_fetch_all($data, MYSQLI_ASSOC);
    
    echo json_encode($data, JSON_UNESCAPED_SLASHES);
}catch(e){
    echo(e);
}
 ?>