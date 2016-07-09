<?php

session_start();

if(isset($_POST) && !empty($_POST)){
	$userName = $_POST['username'];
	$password = $_POST['password'];

	if(isset($userName) && isset($password) && !empty($userName) && !empty($password)){
		$_SESSION['username'] = $userName;
	}else{
		echo "please enter valid details";
	}
}

if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
	echo "<label>LOGOUT</label>";
}else{
	echo "<label>LOGIN</label>"; 
}
?>
<html>
	<form method="post">
		<input type="text" name ="username"/>
		<br />
		<input type="password" name ="password"/>
		<br />
		<input type="submit" name="submit" />
		<br />
		<input type="reset" name="RESET" />
	</form>
</html>