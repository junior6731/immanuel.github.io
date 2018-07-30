<?php
session_start();
include 'cart.php';
?>
<!Doctype html>
 <html>
<head>
	<title>cart</title>
	<style type="text/css">
		td{ padding: 8px; }
		
		table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
	</style>
</head>
<body style="background-color: cyan">
	<div style="background-color: lightgrey;border: solid black 1px;">
	<table  style="width:100%; ">
		<tr><th>PRODUCTS</th><th>PRICE</th></tr>
		<tr><td>Blender</td><td><?php include 'cart.php'; echo 1500; ?></td></tr> 
		<tr><td>Fridge</td><td><?php include 'cart.php'; echo 7500; ?></td></tr>
		<tr><td>Sumsang TV</td><td><?php include 'cart.php'; echo 12000; ?></td></tr>
		<tr><td>Toaster</td><td><?php include 'cart.php'; echo 1000; ?></td></tr>
		<tr><td>Jiko</td><td><?php include 'cart.php'; echo 800; ?></td></tr>
		<tr><td>Kettle</td><td><?php include 'cart.php'; echo 900; ?></td></tr>
		<tr><td>Microwave</td><td><?php include 'cart.php'; echo 4500; ?></td></tr>
		<tr><td>Gas Cooker</td><td><?php include 'cart.php'; echo 3000; ?></td></tr>
		<tr><td>IronBox</td><td><?php include 'cart.php'; echo 700; ?></td></tr>
		<tr><td>Radio</td><td><?php include 'cart.php'; echo 1200; ?></td></tr>
	</table>
	<div><form method="post" action="cart.php"><button style="width:100%; padding: 8px;" name="purchase">PROCEED TO PURCHASE</button></form></div> 
	
</div>
</body>
</html>