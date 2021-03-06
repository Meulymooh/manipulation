<html>

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

					// REGULAR ARRAY
					// Create array
					$pets = array("cat", "dog", "ferret", "rabbit", "hamster", "goldfish", "turtle");
					// Add item
					array_push($pets, "mouse");
					// Edit random item
					$chance = rand(1,5);
					if ($chance == 1) {
						$randomItem = array_rand($pets);
						$pets[$randomItem] = "rat";
					}
					echo "<b>List of pets (simple array):</b><br/>";
					// Render array
					foreach ($pets as $pet){
						echo "$pet ";
					 } 
					echo "<br/><br/>";


					// ASSOCIATIVE ARRAY
					// Create array
					$farmAnimals = array("oink" => "pig", "mooh" => "cow", "quack" => "duck", "gobble" => "turkey", "cock-a-doodle-doo" => "chicken", "baa" => "sheep");
					// Add item
					$farmAnimals["hee-haw"] = "donkey";
					echo "<b>List of farm animals (associative array):</b><br/>";
					// Render array
					foreach ($farmAnimals as $animalSound => $farmAnimal){  
    					echo "$farmAnimal "; 
					}  
					echo "<br/><br/>";
					// Divide array in two
					list($firsthalf, $secondhalf) = array_chunk($farmAnimals, ceil(count($farmAnimals) / 2), true);
					echo "<b>Farm animals divided in halves:</b><br/>";
					foreach ($firsthalf as $animalSound => $farmAnimal){
						echo "$farmAnimal ";
					}
					echo "<br/>";
					foreach ($secondhalf as $animalSound => $farmAnimal){
						echo "$farmAnimal ";
					}
					echo "<br/><br/>";
					// Remove last item
					$lastItem = array_pop($farmAnimals);
					echo "<b>Farm animals without last item:</b><br/>";
					foreach ($farmAnimals as $animalSound => $farmAnimal){
						echo "$farmAnimal ";
					}
					echo "<br/><br/>";

					// OBJECT
					$wildAnimals = new stdClass();
						$wildAnimals->reptile = "rattlesnake";
    					$wildAnimals->mammal = "tiger";
    					$wildAnimals->bird = "eagle";
    					$wildAnimals->fish = "shark";
    				echo "<b>List of wild animals (object):</b><br/>";
    				// Render array
    				foreach ($wildAnimals as $wildAnimal) {
						echo "$wildAnimal ";
					}
					echo "<br/><br/>";
					// Add array 1 & 2
					echo "<b>Arrays 1 and 2 in objec (see content below for details):</b><br/>";
					$wildAnimals->arr1 = $pets;
					foreach ($wildAnimals->arr1 as $wildAnimal) {
						echo "$wildAnimal ";
					}
					echo "<br/>";
					$wildAnimals->arr2 = $farmAnimals;
					foreach ($farmAnimals as $key => $value) {
						$wildAnimals->$arrow2 = $value;
						echo "$value ";
					}
					echo "<br/><br/>";
					// Set cookie for object
					$animals = JSON_ENCODE($wildAnimals);
    				$_COOKIE["Animals"] = $animals;
					echo "<b>Is cookie set for object?</b><br/>";
					if(count($_COOKIE) > 0) {
   						echo "Cookie 'Animal' is enabled.";
					} else {
    					echo "Cookie 'Animal' is disabled.";
					}
					echo "<br/><br/>";
					echo "<b>The content of the cookie is:</b><br/>";
					var_dump(JSON_DECODE($_COOKIE["Animals"]));
				?>

      

	</div>

</div>

</body>
</html>
