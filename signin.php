<?php
	session_start();
if(isset($_POST['login'])){
		$id = $_POST['id'];
		$pass = $_POST['pass'];
		
		
		if(empty($id) == true || empty($pass) == true){
			echo "fill all!";
		}
		else{
            //$_POST['name'] = $name;
	$read = fopen('user.txt', 'r');
	$fetch = fgets($read);
	fclose($read);

	$user = explode("|", $fetch);
	
	if($user[0] == $id && $user[1] == $pass){
		if($user[4]=="admin"){
$_SESSION['name']=$user[3];
		header('location: AdminHome.php');
	}
	elseif($user[4]=="user"){
	header('location: UserHome.php');
	}
		
	
	}else{
		echo "invalid user";
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