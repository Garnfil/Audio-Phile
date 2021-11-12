<?php 
session_start();
include 'config.php';
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../style.css"></link>
  <script src="https://kit.fontawesome.com/0615dc2069.js" crossorigin="anonymous"></script>
  <title>AUDIO PHI - CART</title>
</head>
<body>
	<!-- CART CONTAINER -->
	<div class="cart-container">
		<span class="back">
			<i class="fas fa-long-arrow-alt-left"></i> Go Back
		</span>
		
		<!-- CART CONTENT -->
		<?php foreach ($carts as $cart): ?>
  		<div class="cart-content">
  			<div class="cart-image">
  				<img src="/images/<?php echo $cart['product_image'] ?>" alt="">
  			</div>
  			<div class="cart-text">
  				<h1><?php echo $cart['product_name'] ?></h1>
  				<h4>Price: $<?php echo $cart['price'] ?></h3>
  				<h4>Quantity: <?php echo $cart['quantity'] ?></h4>
  				<h3>TOTAL: $ <?php echo $cart['total'] ?></h3>
  			</div>
  			<div class="cart-buttons">
  				<a href="/checkout.php?cartid=<?php echo $cart['cart_item_id']?>&userid=<?php echo $cart['user_id']?>" class="buy-btn">Buy Now</a>
  			</div>
        <form action="action.php" method="POST">
  			    <input type="hidden" name="id" value="<?php echo $cart['cart_item_id'] ?>" /><br>
  				  <button type="submit" class="delete-cart" name="delete"><i class="fas fa-trash-alt"></i></button>
  				</form>
  		</div>
		<?php endforeach; ?>
	
	  <p class="cart-message">NO ITEM HERE</p>
	</div>
	
	<!-- FOOTER -->
	<footer>
		<div class="footer-1">
			<h3>AudioPhi</h3>
			<p>maiestatis cubilia ludus interdum percipit doctus ridens constituam conceptam laoreet quot feugait gloriatur eripuit sit referrentur rutrum.</p>
		</div>
		<div class="footer-2">
			<ul>
  				<li><a href="">Home</a></li>
  				<li><a href="/airpods.html">Airpods</a></li>
  				<li><a href="/headphones.html">Headphones</a></li>
  				<li><a href="/speakers.html">B Speakers</a></li>
  			</ul>
  			<ul class="social-media">
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="far fa-paper-plane"></i></a></li>
      </ul>
		</div>
	</footer>
	
	<script src="../js/cart.js"></script>
	</body>
	</html>