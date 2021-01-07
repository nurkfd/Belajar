<?php
session_start();

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	echo "Berhasil masuk dengan username $username";
	echo "<br><br>";
	echo "Hai $username! Apa yang sedang kamu pikirkan?";
}else{
	//echo "Ada yang iseng mencoba masuk tanpa login";
	header("Location: login.php");
}
?>
<?php
include "koneksi.php";

$sql = "SELECT * FROM sate;";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Sate</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Data Sate</h1>
	<hr>

	<a href = "tambahsate.php"><button class="tambah">Tambah Data</button></a><br><br>

	<table border="2">
		<tr>
			<th>ID</th>
			<th>Jenis Daging</th>
			<th>Jumlah Daging</th>
			<th>Harga</th>
			<th class="edit">Aksi</th>
		</tr>

		<?php
			while($sate = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>" . $sate[0] . "</td>";
				echo "<td>" . $sate[1] . "</td>";
				echo "<td>" . $sate[2] . "</td>";
				echo "<td>" . $sate[3] . "</td>";
				echo "<td class='edit'>
						<a href= 'editsate.php?id=$sate[0]'>Edit</a>
						<a href= 'deletesate.php?id=$sate[0]'>Hapus</a>
					</td>";
				echo "</tr>";
			}

		?>
	</table>

	<br>
	<button class="cetak" onclick="window.print()">Cetak</button>
</body>
</html>
<br><br>
<a href="proses_logout.php" class="logout">Logout</a>