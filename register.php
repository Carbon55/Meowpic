<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" />
	<title>Meowpic New Account</title>
</head>
<body>
<div class="content">

	<h2>  <h1 class="logo">Meowpic!</h1> Registartion </h2>
	<br>
	<a href="OVtRTA.php"> Back  </a> <br> <br>


	<form action="register.php" method="post">
		Enter Username: <input type="text" name="username" required="required"/> <br>
	    Enter Password: <input type="Password" name="password" required="required"/> <br>
	    <input type="submit" value="Register"/>
	</form>
		
</div>

<!-- OOF -->
<!-- OOF -->
<!-- OOF -->
<!-- OOF -->
<!-- OOF -->
<!-- OOF -->
<!-- OOF --><!-- OOF -->
<!-- OOF -->
<!-- OOF -->
<!-- OOF -->
<!-- OOF -->
<!-- OOF -->
<!-- OOF -->
<!-- OOF -->


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$con = mysqli_connect("localhost", "root", "", "OVtRTA");
 	if(mysqli_connect_errno()){ 

echo "Failed to Connect You to MYSQL:" . mysqli_connect_error();
}
	$username = mysqli_real_escape_string($con, $_POST['username']);

	$password = mysqli_real_escape_string($con, $_POST['password']);

$bool = true;

$query = mysqli_query($con, "Select * from users");
while( $row = mysqli_fetch_array($query)) {
$table_users = $row['username'];
if($username == $table_users) {
$bool= false;
Print '<script>alert("Username Has Been Taken!"); </script>';
Print '<script>window.location.assign("register.php"); </script>';


}
}




if ($bool) {
mysqli_query($con, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
Print '<script>alert("MEOW!."); </script>';
Print '<script>window.location.assign("register.php"); </script>';


}

	echo "Usernsame entered is: <b>" . $username . "</b><br>";
	echo "Password entered is: <b>" . $password . "</b>";
}







?>



</body>
</html>