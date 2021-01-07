<?php

include "koneksi.php";

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$jenis = $_POST['jenis_daging'];
	$jumlah = $_POST['jumlah_daging'];
	$harga = $_POST['harga'];

	$sql = "UPDATE sate SET jenis_daging = '$jenis', jumlah_daging = '$jumlah', harga = '$harga' WHERE id ='$id'";

	$query = mysqli_query($con, $sql);

	if($query){
		header("Location: index.php?update=sukses");
	}else{
		echo "Ada kesalahan update database";
	}

}else{
	header ("Location: index.php?pesan=adapenyusup");
}

?>