<!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" type="text/css" href="stylesheet2.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" />
	<title> MEOWPIC HOME</title>
	</head>
			<?php

				session_start();

						if(!$_SESSION['user']) {
						header("location:OVtRTA");
						}

					$user = $_SESSION['user'];

			?>
			<body>
			<h2 class="logo"> MEOWPIC </h2> 
			<p class="main" > Meow! <?php Print "$user"?></p>
			<a href="logout.php"> Logout</a><br> <br>
			<!-- <form action="add.php" method="post">
			Add More To List : <input type="text" name="details" /> <br>
			Public post? <input type="checkbox" name="public[]" value="yes"/> <br>
			<input type="submit" value="Add to list"/>
			</form>
			<h2 align="center"> My List</h2>
				<table bord="1px" width="100%">
					<tr>
					<th>ID</th>
					<th>Details</th>
					<th>Post Time</th>
					<th>Edit Time</th>
					<th>Edit</th>
					<th> Delete</th>
					<th> Public Post </th>
					</tr>
		<?php
		$con = mysqli_connect("localhost", "root", "", "OVtRTA");
		$query = mysqli_query($con, "Select * from list");
		while($row = mysqli_fetch_array($query)) {
		Print "<tr>";
	Print '<td align="center">' . $row['id'] . "</td>";
	Print '<td align="center">' . $row['details'] . "</td>";
	Print '<td align="center">' . $row['date_posted'] . " _ " . $row['time_posted'] . "</td>" ;
	Print '<td align="center">' . $row['date_edited'] . " _ " . $row['time_edited'] . "</td>" ;
	Print '<td align="center"><a href="edit.php">edit</a></td>';
	Print '<td align="center"><a href="delete.php">delete</a></td>';
	Print '<td align="center">' . $row['public'] . "</td>";
	Print "</tr>";



		}

			?>
 -->









				</table>
			</body>



	</html>