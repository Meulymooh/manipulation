<!DOCTYPE html>

	<html lang="en">


	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Jquery js -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<!--Bootstrap--> 	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<!--Ajax--> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!--My CSS--> 	
		<link href="stylesheet.css" rel="stylesheet" type="text/css">

		<!--Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 


		<title>Object Manipulation</title>

	</head>

<html>
<body>

<div class="container-fluid">

	<div class="wrapper-title">
		<div><h1>Object / Array Manipulation</h1></div>
	</div>

	<div class="wrapper">

		<div class="row">
			<div>
				<h4>What are the differences between an array, an associative array and an object?</h1>
				<ul>
					<li>An array is an ordered map with values.</li>
					<li>An associative array is an ordered map that associates keys and values.</li>
					<li>An object belongs to a class and its properties are defined by that class.</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<h4>Output</h1>

			<div id="array">

				<?php 

					// Regular array
					$pets = array("cat", "dog", "ferret");
					// Add item in array
					array_push($pets, "mouse"); 
					foreach ($pets as $pet){
						echo "$pet ";
					 } 
					echo "<br/>";

					// Associative array
					$farmAnimals = array("oink" => "pig", "mooh" => "cow", "quack" => "duck");
					// Add item in associative array
					$farmAnimals["hee-haw"] = "donkey";
					foreach ($farmAnimals as $petSound => $farmAnimal){  
    					echo "$farmAnimal "; 
					}  

					echo "<br/>";

					// Object
					$wildAnimal = new stdClass();
					$wildAnimal->type = "reptile";
    				$wildAnimal->species = "rattlesnake";
    				$wildAnimal->habitat = "desert";
    				// Add item in array
					foreach ($wildAnimal as $characteristics) {
						$wildAnimal->dangerousness = "venomous";
						echo "$characteristics ";
					}
					echo "<br/>";

				?>

	</div>

</div>

</body>
</html>
