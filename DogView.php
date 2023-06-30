<html>
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>lab 6 php</title>
</head>
<body>
	<?php
	define("DB_HOST", "localhost");
  	define("DB_USER", "root");
  	define("DB_PASSWORD", "");
  	define("DB_DATABASE", "activity6");

	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	$selectvalues = "SELECT * FROM doginfo";
	$result = mysqli_query($conn, $selectvalues);

	if (mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)){
			echo "<div id='display'>";
			echo "Dog ".$row['id']."<br>";
			echo "Name: ".$row['dog_name']."<br>";
			echo "Breed: ".$row['dog_breed']."<br>";
			echo "Age: ".$row['dog_age']."<br>";
			echo "Address: ".$row['dog_address']."<br>";
			echo "Color: ".$row['dog_color']."<br>";
			echo "Height: ".$row['dog_height']."<br>";
			echo "Weight: ".$row['dog_weight']."<br>";
			echo "</div>";
		}
	}

	mysqli_close($conn);

	?>
</body>
<style>
	<?php include "DogView.css"?>
</style>
</html>