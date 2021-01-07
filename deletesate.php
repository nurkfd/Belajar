<?php

include "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM sate WHERE id = '$id'";
$query = mysqli_query($con, $sql);
if($query){
	header("Location: index.php?hapus=sukses");
}else{
	header("Location: index.php?hapus=gagal");
}

?>