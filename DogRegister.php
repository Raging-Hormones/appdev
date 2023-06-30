<html>
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>lab 6 php</title>
</head>
<body>
	<div id="myForm">
		<form action="DogRegister.php" method="post">
			Dog Information <br>
			Name <br>
			<input id="uinput" type="text" name="d_name" required><br>
			Breed <br>
			<input id="uinput" type="text" name="d_breed" required><br>
			Age <br>
			<input id="uinput" type="text" name="d_age" required><br>
			Address <br>
			<input id="uinput" type="text" name="d_address" required><br>
			Color <br>
			<input id="uinput" type="text" name="d_color" required><br>
			Height <br>
			<input id="uinput" type="text" name="d_height" required><br>
			Weight <br>
			<input id="uinput" type="text" name="d_weight" required><br>
			<button id="submitbutton" type="submit" name="submit">save</button>
		</form>
	</div>

	<?php
	define("DB_HOST", "localhost");
  	define("DB_USER", "root");
  	define("DB_PASSWORD", "");
  	define("DB_DATABASE", "activity6");

	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	

	if (isset($_POST['submit'])){
		$dogname = $_POST['d_name'];
		$dogbreed = $_POST['d_breed'];
		$dogage = $_POST['d_age'];
		$dogaddress = $_POST['d_address'];
		$dogcolor = $_POST['d_color'];
		$dogheight = $_POST['d_height'];
		$dogweight = $_POST['d_weight'];

		$insertvalues = "INSERT INTO doginfo (dog_name, dog_breed, dog_age, dog_address, dog_color, dog_height, dog_weight) VALUES ('$dogname', '$dogbreed', '$dogage', '$dogaddress', '$dogcolor', '$dogheight', 
			'$dogweight')";

		if (mysqli_query($conn, $insertvalues)){
			header('location: DogRegister.php');
		} else {
			echo "error: ".$insertvalues."<br>".mysqli_error($conn);
		}
		
	} 

	mysqli_close($conn);
	?>


</body>
<style>
	<?php include "DogRegister.css"?>
</style>
</html>