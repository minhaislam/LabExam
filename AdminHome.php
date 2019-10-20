<?php

session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">
	
		<h1>Welcome <?= $_SESSION['name']?> </h1>
		
		<a href="profile.php">Profile</a><br>
		<a href="Changepass.php">Change Password</a><br>
		<a href="userview.php">View USer</a><br>
		<a href="logout.php">Logout</a><br>


</body>
</html>