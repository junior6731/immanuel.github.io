<?php 
session_start();
include('login.php');
$_SESSION['message']='';
?>
<!DOCTYPE html>
<html>
<head>
	<title>checkin</title>
	<style type="text/css">
 input[type=text]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
button{
	width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;"

}
form,h3,a{ text-align: center; }
	</style>


</head>
<body style="background-color: cyan">
	<div><h3 style="color:black";>ALREADY HAVE AN ACCOUNT? LOG IN HERE</h3></div>
<form action="login.php" method="POST">
	<div ><p><?php include 'login.php'; echo  $_SESSION['message']; ?></p></div>
	        <div><input type="text" name="username" placeholder="Enter Username" required="required"></div>
			<div><input type="text" name="password" placeholder="Enter password" required="required"></div>
			<button type="submit" name="submit">log in</button>
		<br>
	</form>
		<div style="padding: 14px"><h3>DON'T HAVE AN ACCOUNT? SIGN IN HERE </h3><a href="reg.php"><h3>Register</h3></a></div>
</body>
</html>