<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style2.css" />
</head>
<body>

<form action="" method="post" class="login-form">
<h1>Halaman Registrasi</h1>
  <table>
    <tr>
      <th><label for="username">Username:</label></th>
      <td><input type="text" name="username" id="username"></td>
    </tr>
    <tr>
      <th><label for="password">Password:</label></th>
      <td><input type="password" name="password" id="password"></td>
    </tr>
    <tr>
      <th><label for="password2">Konfirmasi:</label></th>
      <td><input type="password" name="password2" id="password2"></td>
    </tr>
    <tr>
      <td colspan="2"><button type="submit" name="register">Register</button></td>
    </tr>
  </table>

  <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
  
</form>

</body>
</html>