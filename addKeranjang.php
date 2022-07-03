<?php 
include 'conn.php';
$idPe = $_POST['idPengguna'];
$idP = $_POST['idProduk'];
$jumlah = $_POST['jumlah'];
$namaProduk = $_POST['namaProduk'];
$harga = $_POST['hargaProduk'];
$gambar = $_POST['gambarProduk'];
$operation = $_POST['operation'];

echo($idPe);
echo($idP);
echo($jumlah);
echo($operation);
echo("\n");

//check ada tidak + tambah
if($operation == "tambah"){
$result = $connect->query("SELECT * FROM keranjang WHERE IDPengguna = $idPe AND produkID = $idP");
$fetchData=mysqli_fetch_array($result);

if($fetchData > 0){
    $sql = "UPDATE keranjang SET jumlah = jumlah + $jumlah WHERE IDPengguna = $idPe AND produkID = $idP";
    $result = $connect->query($sql);
    echo("berhasil");
}else{
    $sql2 = "INSERT INTO `keranjang` (`ID`, `IDPengguna`, `produkID`, `jumlah`, `namaProduk`, `harga`, `gambarProduk`, `date`) VALUES (NULL, '$idPe', '$idP', '$jumlah', '$namaProduk', '$harga', '$gambar', current_timestamp())";
    $result = $connect->query($sql2);
    echo("berhasil tambah");
}
}else if($operation == "kurang"){
    $sql = "UPDATE keranjang SET jumlah = jumlah - $jumlah WHERE IDPengguna = $idPe AND produkID = $idP AND jumlah > 1";
    $result = $connect->query($sql);
    echo("berhasil kurang");
}else if($operation == "hapus"){
    $sql = "DELETE FROM keranjang WHERE IDPengguna = $idPe AND produkID = $idP";
    $result = $connect->query($sql);
    echo("berhasil kurang");
}
echo("lewat")

//$connect->query($sql) === TRUE
//$query2 = mysqli_query($connect, "UPDATE keranjang SET jumlah += '$jumlah' WHERE IDPengguna = '$idPe' AND podukID = '$idP'");

//$query2 = mysqli_query($connect, "INSERT INTO `keranjang` (`ID`, `IDPengguna`, `produkID`, `jumlah`, `date`) VALUES (NULL, '$idPe', '$idP', '$jumlah', current_timestamp());");
?>