<?php
$conn=mysqli_connect('localhost','root','achungo18','infinityco');
if(isset($_POST['bl'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=1";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 1500;
		header('location:calc.php');
	
	}
}
	if(isset($_POST['fd'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=4";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 7500;
		header('location:calc.php');
	
	}
}

if(isset($_POST['ib'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=5";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 700;
		header('location:calc.php');
	
	}
}
if(isset($_POST['jk'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=4";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 800;
		header('location:calc.php');
	
	}
}
if(isset($_POST['mw'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=8";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 4500;
		header('location:calc.php');
	
	}
}
if(isset($_POST['kt'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=10";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 900;
		header('location:calc.php');
	
	}
}
if(isset($_POST['rd'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=6";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 1200;
		header('location:calc.php');
	
	}
}
if(isset($_POST['tt'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=7";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 1000;
		header('location:calc.php');
	
	}
}
if(isset($_POST['tv'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=4";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 1200;
		header('location:calc.php');
	
	}
}
if(isset($_POST['gs'])){
	$b=1500;
	$sq="SELECT price FROM products WHERE id=4";
    $res=mysqli_query($conn, $sq);
	if(mysqli_query($conn, $sq)==true)
	{
		echo 3000;
		header('location:calc.php');
	
	}
}

if(isset($_POST['purchase'])){
	header('location:customer.php');
}







?>