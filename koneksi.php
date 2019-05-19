<?php 

$host = "localhost";
$user = "root";
$pass = "root";
$dbnm = "pweb";

$conn = mysqli_connect($host,$user,$pass,$dbnm);

if ($conn) {
	//echo "Database terhubung";
}
else{
	die("Server MySQL tidak terhubung");
}

 ?>