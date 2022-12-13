<?
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";


?>

<html>
<head>
	
	<title>store home page</title>
	<? include "parts/meta.php"; ?>
</head>
<body class="flush">
	<? include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image:url(img/lake.jpg)">
	<div class="fill-parent display-flex flex-align-center flex-justify-center">
		<!-- <div class="card soft">
			Products
		</div> -->
	</div>
		
	</div>
<div class="container">
	<div class="card soft">
		<h2>Home Page</h2>


		</div>
	</div>	

		<div class="container">
			<h2>Speaker of the week</h2>
			<? recommendedCategory("speakers") ?>
			<h2>Headphone of the week</h2>
			<? recommendedSimilar("headphones",8) ?>
		</div>

	
</body>
</html>