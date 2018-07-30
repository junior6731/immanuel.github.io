<?php
session_start();
include'cart.php';

  ?>
<!DOCTYPE html>
<html>
<head>
	<title>mycart</title>
	<div style="background-color: pink;  border:solid 2px;"><h2 style="text-align: center;"><strong> Welcome to Mycart Choose an item of your choice</strong></h2></div>
	<style type="text/css">
		button{
			color: black;
		}
		button:hover{color: green;}
		button:active{color: yellow;}
		button:visited{color: red;}
		div.imgs{ background-color: transparent; width:30%; border-radius: 0px 0px 10px 10px; }

	</style>
</head>
<body style="background-color: cyan">
	<div class="img" style="width: 100%">

	<ul style="float:left; text-align: left; list-style: none;">
		<li><img src="Blender.jpg" height="100" width="100"  style="margin: 5px; border-radius: 50%"></li><form action="cart.php" method="post"><button name="bl">Add To Cart</button></form><br>
		<li><img src="Fridge.jpg" height="100" width="100" style="margin: 5px; border-radius: 50%"></li><form action="cart.php" method="post"><button name="fd">Add To Cart</button></form><br>
		<li><img src="ironBox.jpg" height="100" width="100" style="margin: 5px; border-radius: 50%"></li></li><form action="cart.php" method="post"><button name="ib">Add To Cart</button></form><br>
		<li><img src="Jiko.jpg" height="100" width="100"  style="margin: 5px; border-radius: 50%"></li><form action="cart.php" method="post">><button name="jk">Add To Cart</button></form><br>
		<li><img src="Microwave.jpg" height="100" width="100" style="margin: 5px; border-radius: 50%" ></li><form action="cart.php" method="post"><button name="mw">Add To Cart</button></form><br>
		</ul>
	</div>
<div class="imgs" style="text-align: center; width: 100%">

	<ul  style="text-align: center;text-decoration: none; list-style: none;">
		
		<li><img src="Kettle.jpg" height="100" width="100" style="margin: 5px; border-radius: 50%"></li><form action="cart.php" method="post"><button name="kt">Add To Cart</button></form><br>
		<li><img src="Radio.jpg" height="100" width="100" style="margin: 5px; border-radius: 50%"></li><form action="cart.php" method="post">><button name="rd">Add To Cart</button></form><br>
		<li><img src="Toaster.jpg" height="100" width="100" style="margin: 5px; border-radius: 50%"></li><form action="cart.php" method="post"><button name="tt">Add To Cart</button></form><br>
		<li><img src="tvsum.jpg" height="100" width="100" style="margin: 5px; border-radius: 50%"></li><form action="cart.php" method="post">><button name="tv">Add To Cart</button></form><br>
		<li><img src="Gascooker.jpg" height="100" width="100" style="margin: 5px; border-radius: 50%"></li><form action="cart.php" method="post"><button name="gs">Add To Cart</button></form><br>
		</ul>
	</div>
	
</body>
</html>