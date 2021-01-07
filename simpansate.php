 <?php
session_start();
include "koneksi.php";

if(isset($_SESSION['username']) AND isset($_POST['simpan'])){
	$jenis = $_POST['jenis_daging'];
	$jumlah = $_POST['jumlah_daging'];
	$harga = $_POST['harga'];

	$sql = "INSERT INTO sate (jenis_daging, jumlah_daging, harga) VALUES ('$jenis', '$jumlah', '$harga')";
	$query = mysqli_query($con, $sql);

	if($query){
		header("Location: index.php?simpan=sukses");
	}else{
		header("Location: index.php?pesan=adapenyusup");
	}
}else{
	header("Location: login.php");
}

?>