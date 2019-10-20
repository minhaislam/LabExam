<?php
if(isset($_POST['signup'])){
		$id = $_POST['id'];
		$pass = $_POST['pass'];
		$pass1 = $_POST['pass1'];
		$name = $_POST['name'];
		$utype = $_POST['utype'];
		
		if(empty($id) == true || empty($pass) == true ||empty($pass1) == true||empty($name) == true || empty($utype) == true){
			echo "fill all!";
		}
		else{
            //$_POST['name'] = $name;
			$user = fopen('user.txt', 'a+');
			$data=fwrite($user, "$id"."|"."$pass"."|"."$pass1"."|"."$name"."|"."$utype");
			
	fclose($user);
		header('location: signin.php');
	
			}
		}
		
		
		
		


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="Registration.php">
		<fieldset>	
			<legend><b>REGISTRATION</b></legend>
			<table cellpadding="5px">
			<tr>
				<td>
			Id<br><input type="text" name="id" value="">
			</td>
			</tr>
			<tr>
				<td>
			Password <br><input type="password" name="pass" value="">
			</td>
			</tr>
			<tr>
				<td>
			Confirm Password<br><input type="password" name="pass1" value="">
			</td>
			</tr>
			<tr>
				<td>
			Name<br><input type="text" name="name" value="">
			</td>
			</tr>
			<tr>
			<td>
			User Type
			</td>
			
			</tr>
			<tr>
			<td style="border-top:1px solid #888;">
			<input type="radio" name="utype" value="user"/>User
			<input type="radio" name="utype" value="admin"/>Admin
			
			</td>
			
			</tr>
			<tr>
			<td style="border-top:1px solid #888;">
			<input type="submit" name="signup" value="Sign Up"/>
			<a href="signin.php">Sign In</a>
			</td>
			</tr>
			
			</table>

		</fieldset>	


	</form>


</body>
</html>