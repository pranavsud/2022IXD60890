<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

	<?php

	echo "Hello World";
	echo "<div>Hello World</div>";
	echo "<h2>Hello World</h2>";

	$number = "number123";
	$a = 5;
	$bool = true;

	$float = 0.678;

	echo '<p>'.$number.'</p>';
	echo '<p>'.$number.'</p>';
	echo "This $number is equal to 5";
	echo "<p>This is a 'quote'</p>";

	echo (15-3)%7;

	$firstname = "Pranav";
	$lastname = "Sud";
	$fullname = $firstname.' '.$lastname;

	echo '<br>' .$fullname;

	echo $_GET['name']. '<br>';

	echo "My name is {$_GET['name']}!".'<br';


	$colors = array("Red","Yellow","Blue");

	echo $colors[0].'<br>';
	print-r($colors);

	?>

	<?

	$colorsAssociative = [
		"red" => "#f00",
		"yellow" => "#ff0",
		"blue" => "#00f"
		];

		echo $colorsAssociative['yellow'];

	?>

	<?

		$a = 5;
		$c = $a;

		$d = $c*2;
		echo $d;

		echo '<p>This is a paragraph.</p>';
		echo "<p>This is a paragraph.</p>";

		function print_p($v) {
			echo "<pre",print_r($v),"</pre>";
		} 

		print_p($_GET);
		print_p($colors);
		print_p($colorsAssociative);






	?>



</body>
</html>