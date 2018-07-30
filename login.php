<?php
$conn=mysqli_connect('localhost','root','achungo18','infinityco');
$_SESSION['message']='';
if(isset($_POST['submit'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$sql="SELECT*FROM signin where username='$user' and password='$pass'";
	$res=mysqli_query($conn, $sql);
	if(mysqli_num_rows($res)==1){
		header('location:mycart.php');
	}
	else{
		header('location:checkin.php');
		$_SESSION['message']="ENTER CORRRECT USERNAME AND PASSWORD";
		echo $_SESSION['message'];
	}
}
?>