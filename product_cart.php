 <?php
		
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart_items = getCartItems();
$cart = getCart();

// print_p($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<title>Cart Page</title>
	<? include "parts/meta.php"; ?>

</head>

<body>
	<? include "parts/navbar.php"; ?>

	<div class="container">
		<h2>In Your Cart</h2>

		<? 
		if(count($cart)) {
			?>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items,'cartListTemplate')?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>

					<div class="card-section">
						<a href="product_checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
		<? } else {  ?>
		<div class="card soft">
			<p>No Items in Cart</p>
		</div>
		<h3>Other Recommendations</h3>
		<? recommendedAnything(3); ?>


	    <? } ?>
	</div>

</body>
</html>


