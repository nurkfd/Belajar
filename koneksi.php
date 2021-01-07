<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db_sate";

$con = mysqli_connect($servername, $username, $password, $db_name);

if($con){
	echo "Berhasil terkoneksi ke database <br><br>";
}else{
	echo "Gagal terkoneksi";
}

?>