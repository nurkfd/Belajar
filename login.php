<?php
session_start();
if(isset($_SESSION['username'])){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>

	<form method="POST" action="proses_login.php">
		<label>Username</label><br>
		<input type="text" name="username"><br><br>
		<label>Password</label><br>
		<input type="password" name="password"><br><br>
		<input type="submit" name="login" value="Login">
	</form>

</body>
</html>