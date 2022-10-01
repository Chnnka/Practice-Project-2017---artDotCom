<?php
session_start();
if(isset($_POST['bttLogin'])){
	require 'connect.php';
	$username=$_POST['username'];
	$password=$_POST['psswrd'];
	$result=mysqli_query($con, 'select * from logindet where UserName="'.$username.'" and Password="'.$password.'"');
	if(mysqli_num_rows($result)==1){
		$_SESSION['username']=$username;
		header('Location:welcome.php');
	}
	else
		echo "Account is invalid";
}
if(isset($_GET['logout'])){
	session_unregister('username');
}
?>

<form method="POST">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="psswrd"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="bttLogin" value="Log in"></td>
		</tr>
	</table>
</form>