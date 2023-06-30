<?php 
session_start();
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
	$fcolor1 = $_GET['color1'];
	$fcolor2 = $_GET['color2'];
	$fcolor3 = $_GET['color3'];
	$fcolor4 = $_GET['color4'];
	$fcolor5 = $_GET['color5'];

	echo "My Favorite Color 1: $fcolor1<br>";
	echo "My Favorite Color 1: $fcolor2<br>";
	echo "My Favorite Color 1: $fcolor3<br>";
	echo "My Favorite Color 1: $fcolor4<br>";
	echo "My Favorite Color 1: $fcolor5<br>";
	?>
</body>
<style>
	<?php include "favoritecolor.css"?>
</style>
</html>