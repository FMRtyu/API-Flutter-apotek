<?php 
$connect = new mysqli("localhost","root","","apotek");
if($connect){
}else{
	echo "Connection Failed";
	exit();
}
 ?>