<?php

include "koneksi.php";
$id = $_POST['id'];
$sql = "SELECT * FROM sate WHERE id ='$id'";
$query = mysqli_query($con, $sql);

while ($sate = mysqli_fetch_array($query)){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Sate</title>
</head>
<body>

	<h1>Edit Sate</h1>
	<hr>

	<form action="updatesate.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $sate[0] ?>">

		<label>Jenis Daging</label><br>
		<input type="text" name="jenis_daging" value="<?php echo $sate[1] ?>" required><br>

		<label>Jumlah Daging</label><br>
		<input type="text" name="jumlah_daging" value="<?php echo $sate[2] ?>" required><br>

		<label>Harga</label>
		<input type="text" name="harga" value="<?php echo $sate[3] ?>" required><br><br>

		<input type="submit" name="update" value="Update">
	</form>

</body>
</html>

<?php
}
?>