<?php

$conn=mysqli_connect('localhost','root','achungo18','infinityco');
$_SESSION['message']='';
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
$sql="INSERT INTO customers (first_name, last_name,address,email,contact)
      VALUES('$fname','$lname','$address','$email','$contact')";
    mysqli_query($conn, $sql);
   // header('location:confirm.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer details</title>
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
form{ text-align: center; background-color: transparent; }
	</style>

</head>
<body style="background-color: cyan">
	<form action="customer.php" method="POST">
		<div style="text-align: center;"><h3>Enter Your details</h3></div>
	        <div><input type="text" name="fname" placeholder="Enter First Name" required="required"></div>
			<div><input type="text" name="lname" placeholder="Enter Last Name" required="required"></div>
			<div><input type="text" name="address" placeholder="Enter Address" required="required"></div>
			<div><input type="text" name="email" placeholder="Enter Email" required="required"></div>
			<div><input type="text" name="contact" placeholder="Enter Contact" required="required"></div>
			<button type="submit" name="submit" onclick="alert('PURCHASE CONFIRMED')">Submit To Confirn  Purchase</button>
		<br>
	</form>

</body>
</html>