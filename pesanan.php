<?php 
include 'conn.php';

$query = mysqli_query($connect, "SELECT * FROM pesanan");

$result=array();
while($fetchData=$query->fetch_assoc()){
	$result[]=$fetchData;
}
echo json_encode($result, JSON_UNESCAPED_SLASHES);
 ?>