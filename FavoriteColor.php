<?php 
session_start();
error_reporting (E_ALL ^ E_NOTICE);
?>
<html>
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>lab 5 php</title>
</head>
<body>
	<?php
	$_SESSION['color1'] = $fcolor1;
	$_SESSION['color2'] = $fcolor2;
	$_SESSION['color3'] = $fcolor3;
	$_SESSION['color4'] = $fcolor4;
	$_SESSION['color5'] = $fcolor5;
	?>
	<div id="myForm">
		<form method="get" action="ResultColors.php">
			<table>
				<tr>
					<td id="colorlabel" colspan="2"> Enter your favorite colors</td>
				</tr>
				<tr>
					<td id="textlabel"> Favorite color 1:</td>
					<td id="colorinput"> <input type="text" name="color1"></td>
				</tr>
				<tr>
					<td id="textlabel"> Favorite color 2:</td>
					<td id="colorinput"> <input type="text" name="color2"></td>
				</tr>
				<tr>
					<td id="textlabel"> Favorite color 3:</td>
					<td id="colorinput"> <input type="text" name="color3"></td>
				</tr>
				<tr>
					<td id="textlabel"> Favorite color 4:</td>
					<td id="colorinput"> <input type="text" name="color4"></td>
				</tr>
				<tr>
					<td id="textlabel"> Favorite color 5:</td>
					<td id="colorinput"> <input type="text" name="color5"></td>
				</tr>
				<tr>
					<td colspan="2" id="colorlabel"><button type="submit">send colors</button></td>
				</tr>
    			
    		</table>
		</form>
	</div>
</body>
<style>
	<?php include "favoritecolor.css"?>
</style>
</html>