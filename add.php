<!DOCTYPE html>
<html>
<head
<link rel="stylesheet" type="text/css" href="stylesheet2.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" />	<title>Add</title>
</head>
<body>

</body>
</html>


<?php
session_start();
if(!$_SESSION['user']){

header("location:login.php");
}
$con = mysqli_connect("localhost", "root", "", "OVtRTA");
$details = mysqli_real_escape_string($con, $_POST['details']);
$time = strftime("%X");
$date = strftime("%B %d, %Y");

Print "$time - $date - $details";

?>