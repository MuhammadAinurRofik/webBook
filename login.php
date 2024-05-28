<?php 
session_start();

if( isset($_SESSION["login"]) ) {
	header("Location: buku.php");
	exit;
}

require 'functions.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			header("Location: buku.php");
			exit;
		}
	}

	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style2.css" />
</head>
<body>



<?php if( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>

<form action="" method="post" class="login-form">
<h1>Halaman Login</h1>
<table>
	<tr>
		<td><label for="username">Username:</label></td>
		<td><input type="text" name="username" id="username"></td>
	</tr>
	<tr>
		<td><label for="password">Password:</label></td>
		<td><input type="password" name="password" id="password"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="login">Login</button></td>
	</tr>
	
</table>
<p>Already have an account? <a href="registrasi.php">Register here</a>.</p>
</form>


</body>
</html>