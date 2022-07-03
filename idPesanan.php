<?php 
include 'conn.php';

$id = $_POST['id'];

$query = mysqli_query($connect, "SELECT * FROM pesanan WHERE IDPesanan =  $id");

$result=array();
while($fetchData=$query->fetch_assoc()){
	$result[]=$fetchData;
}
echo json_encode($result, JSON_UNESCAPED_SLASHES);
 ?>