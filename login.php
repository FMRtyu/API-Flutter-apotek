<?php 
include 'conn.php';
$username = $_POST['notlp'];
$password = $_POST['password'];

$query = mysqli_query($connect, "SELECT * FROM admin WHERE notlp = '$username' AND password = '$password' ");

$result=array();
while($fetchData=$query->fetch_assoc()){
	$result[]=$fetchData;
}
echo json_encode($result);
 ?>