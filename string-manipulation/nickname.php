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


		<title>Cool Nickname Generator</title>

	</head>

<html>
<body>

<div class="container-fluid">

	<div class="wrapper-title">
		<div><h1>Cool Nickname Generator</h1></div>
	</div>

	<div class="wrapper">

		<div class="wrapper-instruction">
			<h4>Enter a nickname in the input field and generate a new one:</h4>
		</div>

		<div class="row">

			<!--Send nickname via POST method--> 
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<input type="text" name="name"> <button type="submit" name="nickname" class="btn btn-primary"/>Generate!</button>
			</form>

		</div>

		<div class="wrapper-instruction">
			<h4>Your cool nicknames are:</h4>
		</div>

		<div class="row">

			<ul>
				<?php 
					if (isset($_POST["name"])) {
  						$str = $_POST["name"];
  						
  						// Reverse name	
  						echo "<li><b>Turn around: </b>" . strrev("$str") . "</li>";
  						// Capitalize name
  						echo "<li><b>Capitalize: </b>" . strtoupper($str) . "</li>";
  						// Shuffle letters in name
  						echo "<li><b>Shuffle: </b>" . str_shuffle($str) . "</li>"; 
  						// Prepend "x"
  						echo "<li><b>Add x: </b>" . substr_replace($str, 'x', 0,0) . "</li>";
  						// Wrapp name between "--"
						$prependStr = "--";
						$appendStr = "--";
						echo "<li><b>Wrap: </b>" . $prependStr.$str.$appendStr . "</li>";
  						// Prepend 1 to 4 random characters
  						$length = rand(1,4);
						$randomStr = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
						echo "<li><b>Prepend 1 to 4 random characters: </b>" . $randomStr.$str . "</li>";
						// Prepend 1 to 4 random characters and wrap them between "[]"
  						$length = rand(1,4);
  						$prependChar = "[";
						$appendChar = "]";
						$randomStr = $prependChar . substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length) . $appendChar;
						echo "<li><b>Prepend 1 to 4 random characters and wrap them between [ ]: </b>" . $randomStr.$str . "</li>";
						// Capitalize random nbr of characters				
						$i = 0;
						while ($i < strlen($str)){
    						$tmp=$str[$i];
    						if(rand() % 2 ==0) $tmp=strtoupper($tmp);
    						else $tmp=strtolower($tmp);
    						$str[$i]=$tmp;
    						$i++;
						}
						echo "<li><b>Randomize upper and lower cases: </b>" . $str . "</li>";
						// Gradient string
						echo "<li><b>Render gradient name: </b><span id='gradientText'>" . $_POST['name'] . "</span></li>";
  					}
        		?>
        	</ul>

			


		</div>



	</div>


	</div>

</div>

</body>
</html>
