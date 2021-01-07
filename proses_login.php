<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username = '$username' AND password = md5('$password')";
	$query = mysqli_query($con, $sql);
	$cek = mysqli_num_rows($query);

	if($cek == 1){
		//echo "Berhasil Login";
		$_SESSION['username'] = $username;
		header("Location: index.php?pesan=sukseslogin");
	}else{
		//echo "Gagal Login";
		header("Location: login.php?pesan=gagallogin");
	}
}

?>