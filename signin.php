<?php
	session_start();
if(isset($_POST['login'])){
		$id = $_POST['id'];
		$pass = $_POST['pass'];
		
		
		if(empty($id) == true || empty($pass) == true){
			echo "fill all!";
		}
		else{
            $name='user.txt';
	$read = fopen($name, 'r');
	
		$fetch = fread($read, filesize($name));
	fclose($read);
	$lines=explode("\n", $fetch);
	foreach ($lines as $line) {
		$user = explode("|", $line);
	
		if($user[0] == $id && $user[1] == $pass){
				if($user[4]=='Admin'){
			$_SESSION['name']=$user[3];
			header('location: AdminHome.php');
		}
		elseif($user[4]=='User')
			{
			$_SESSION['name']=$user[3];
			header('location: UserHome.php');
		}
		}	

	}
	
	}
		
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="signin.php">
		<fieldset>	
			<legend><b>LOG IN</b></legend>
			<table cellpadding="5px">
			<tr>
				<td>
			User Id<br><input type="text" name="id" value="">
			</td>
			</tr>
			<tr>
				<td>
			Password <br><input type="password" name="pass" value="">
			</td>
			</tr>
			
			
			<td style="border-top:1px solid #888;">
			<input type="submit" name="login" value="Login"/>
			<a href="Registration.php">Register</a>
			</td>
			</tr>
			
			</table>

		</fieldset>	


	</form>


</body>
</html>
