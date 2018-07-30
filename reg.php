<?php
session_start(); 
include 'regsign.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<style type="text/css">
 input[type=text]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password]{
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
    border-radius: 4px;
}
form{ text-align: center; }

 </style>  
    

</head>
<body style="background-color:cyan ">
	<div style="text-align: center"><h3>Please Register Here</h3></div>

	<form  action="regsign.php" method="POST"> 

			<input type="text" name="username1" placeholder="Enter Username" required="required">
			<input type="password" name="password2" placeholder="Enter password"required="required">
			<button type="submit" name="submit">Sign In</button>
	</form>

</body>
</html>