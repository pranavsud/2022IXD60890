<?

include_once "lib/php/functions.php";

include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

$images = explode(",",$product->images);

$image_elements = array_reduce($images, function($r,$o){
	return $r."<img src='img/store/$o'>";
})

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<title>Store Product Item</title>
	<? include "parts/meta.php"; ?>
	<script src="js/product_thumbs.js"></script>

</head>

<body>

	<? include "parts/navbar.php"; ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
						<img src="img/store/<?= $product->thumbnail ?>" alt="<?= $product->title ?>">
					</div>
					<div class="images-thumbs">
						<?= $image_elements ?>
					</div>
				</div>
			</div>


			<div class="col-xs-12 col-md-5">
				<form class="card soft" method="post" action="cart_actions.php?action=add-to-cart">

					<input type="hidden" name="product-id" value="<?= $product->id?>">
					<div class="card-selection">
						<div class="product-title product-detail-product-name"><?= $product->title?></div>
						<div class="product-price product-detail-price">&dollar;<?= $product->price?></div>
					</div>
					<div class="card-selection">
						<div class="form-control">
							<label for="product-amount" class="form-label">Amount</label>
							<div class="form-select">
								<select id="product-amount" name="product-amount">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
								</select>
							</div>
						</div>
						<div class="form-control">
							<label for="product-color" class="form-label">Color</label>
							<div class="form-select">
								<select name="product-color" id="product-color">
									<option>Black</option>
									<option>White</option>
									<option>Grey</option>
								</select>
							</div>
						</div>
					</div>
					<div class="card-selection">
						<input type="submit" value="Add to Cart"class="form-button">
					</div>
				</form>
			</div>
		</div>

		<div class="card soft dark">
			<p><?= $product->description ?></p>
		</div>

		<h2>Recommended Products</h2>
		<? recommendedSimilar($product->category,$product->id) ?>
	</div>
	<script src="js/products_thumbs.js"></script>
</body>
</html>