<?php 
session_start();
include 'php/config.php';
include 'php/action.php';

if (isset($_GET['cartid']) && isset($_GET['userid'])) {
  $cartid = mysqli_real_escape_string($conn,$_GET['cartid']);
  $userid = mysqli_real_escape_string($conn, $_GET['userid']);
  
  $sql = "SELECT * FROM carts WHERE cart_item_id = '$cartid' && user_id = '$userid'";
  $query = mysqli_query($conn, $sql);
  $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
  
  foreach ($results as $result) {
    $product_name = $result['product_name'];
    $total = $result['total'];
  }
}

if (isset($_POST['cod_btn'])) {
  $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $tel = mysqli_real_escape_string($conn, $_POST['telephone']);
  $cel = mysqli_real_escape_string($conn,$_POST['cellphone']);
  $adress = mysqli_real_escape_string($conn, $_POST['adress']);
  $zip = mysqli_real_escape_string($conn, $_POST['zip_code']);
  $product = mysqli_real_escape_string($conn,$_POST['product']);
  $total = mysqli_real_escape_string($conn,$_POST['total']);
  
  $sql = "INSERT INTO cod_payment(fullname,email,tel_num,phone_num,adress,zip_code,product,total) VALUES('$fullname','$email','$tel','$cel','$adress','$zip','$product','$total')";
  
    if (mysqli_query($conn,$sql)) {
      echo "<script>alert('Your order successfully added.')</script>";
    } else {
      echo "ERROR QUERY:" . mysqli_error($conn);
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css"></link>
  <script src="https://kit.fontawesome.com/0615dc2069.js" crossorigin="anonymous"></script>
  <title>AUDIO PHI - CHECKOUT</title>
</head>
<body>
	
	<span class="back">
			<i class="fas fa-long-arrow-alt-left"></i> Go Back
	</span>
	
	<div class="checkout-container">
		<div class="firstdiv-checkout">
			<div class="product-checkout">
				<h1><?php echo $product_name ?></h1>
				<h3>Total: $<?php echo $total ?></h3>
			</div>
			<div class="payment-option">
				<h3>PAYMENT METHOD</h3>
				<button class="cod">CASH ON DELIVERY</button>
			</div>
		</div>
		
		<div class="seconddiv-checkout first">
		  <h3>Cash on Delivery</h3>
			<form action="checkout.php" method="POST">
				<div class="short-inputs">
					<input type="hidden" name="fullname" value="<?php echo $_SESSION['fullname']?>">
					<input type="hidden" name="product" value="<?php echo $product_name?>">
					<input type="hidden" name="total" value="<?php echo $total ?>">
				</div>
				<div class="short-inputs">
					<input type="hidden" name="email" value="<?php echo $_SESSION['email']?>">
					<input type="text" name="telephone" placeholder="Telephone # - not required">
					<input type="tel" name="cellphone" placeholder="Contact #" required>
				</div>
				<div class="short-inputs">
					<input type="text" name="adress" placeholder="Adress" required>
					<input type="text" name="zip_code" placeholder="Zip Code" required>
				</div>
				<button name="cod_btn" type="submit" class="place-order">Place Order</button>
				<p><bold>NOTE:</bold> Please write correct data in input fields.</p>
			</form>
		</div>
		
	</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<span class="cart-message"></span>
	<script src="js/checkout.js"></script>
</body>
</html>
