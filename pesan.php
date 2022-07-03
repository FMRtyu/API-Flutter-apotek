<?php
include 'conn.php';

$idpen = $_POST['IDPengguna'];
$jumlah = $_POST['jumlah'];
$nama = $_POST['nama'];
$total = $_POST['total'];

//cek stok kelebihan tidak
try{
$result1 = $connect->query("INSERT INTO `pesanan` (`IDPesanan`, `IDPengguna`, `namaProduk`, `total`, `date`, `status`) VALUES (NULL, '$idpen', '$nama', '$total', current_timestamp(), 'mengunggu proses')");
echo("berhasil satu");
if($result1){
    
    $result2 = $connect->query("DELETE FROM keranjang WHERE IDPengguna = $idpen");
    echo("berhasil dua");
}
}catch(e){
    echo(e);
}

?>