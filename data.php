<? php
$con=mysql_connect('localhost','root','achungo18','infinityco');
if(!$con){
	die("connection failed".mysqli_connect_error())
}
else{
	echo "string";
}
?>