<?php
$conn=mysqli_connect('localhost','root','achungo18','infinityco');
if(isset($_POST['submit'])){
$user=$_POST['username1'];
$pass=$_POST['password2'];
$pass=md5($pass);
$sql="INSERT INTO signin (username, password)
      VALUES('$user','$pass')";
    mysqli_query($conn, $sql);
    header('location:checkin.php');
    
}

?> 