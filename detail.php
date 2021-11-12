<?php 
session_start();
include('php/config.php');

if (isset($_GET['uniqueid']) && isset($_GET['id'])) {
  
  $uniqueid = mysqli_real_escape_string($conn, $_GET['uniqueid']);
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  
  $sql = "SELECT * FROM products WHERE unique_product_id = '$uniqueid' && product_id = '$id'";
  
  $query = mysqli_query($conn,$sql);
  $products = mysqli_fetch_all($query, MYSQLI_ASSOC);
  
  foreach ($products as $product) {
    $product_name = $product['product_name'];
    $product_description = $product['description'];
    $product_image = $product['image'];
    $product_price = $product['price'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/product.css"></link>
  <script src="https://kit.fontawesome.com/0615dc2069.js" crossorigin="anonymous"></script>
  <title>AUDIO PHI - DETAILS</title>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page title</title>
</head>
<body>
	
</body>
</html>
	
	<!-- DETAILS CONTAINER -->
	
	<div class="details-container">
		<span class="back"><i class="fas fa-long-arrow-alt-left"></i> Go Back</span>
		<div class="details-image">
			<img src="images/<?php echo $product_image ?>" alt="">
		</div>
		<div class="details-content">
			<h1><?php echo $product_name ?></h1>
			<p><?php echo $product_description ?></p>
			<h2>$ <?php echo $product_price ?></h2>
			<form action="php/action.php" method="POST">
			<span class="minus">-</span>
			<input id="quantity" type="text" name="quantity" value="" readonly>
			<span class="add">+</span>
			<div class="details-form">
					<input type="hidden" name="product_name" value="<?php echo $product_name ?>">
					<input type="hidden" name="product_price" value="<?php echo $product_price ?>">
					<input type="hidden" name="product_image" value="<?php echo $product_image ?>">
					<button type="submit" name="add_cart" class="add-cart">Add to Cart</button>
				</form>
			</div>
		</div>
	</div>
	
	
	
	
	
	<script src="js/details.js"></script>
</body>
</html>
