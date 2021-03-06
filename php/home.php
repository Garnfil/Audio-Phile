<?php 
session_start();
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/style.css"></link>
  <script src="https://kit.fontawesome.com/0615dc2069.js" crossorigin="anonymous"></script>
  <title>AUDIO PHI</title>
</head>
<body>
	
	<!-- NAV CONTAINER -->
  <nav>
  	<a class="logo" href="index.html"><img src="/images/logo.jpg" alt="logo-audio">  </a>
  	
	<div class="menu">
  		<div class="line line1"></div>
  		<div class="line line2"></div>
  		<div class="line line3"></div>
  	</div>
  	
  	<ul>
  		<li><a href="home.php">Home</a></li>
  		<li><a href="/airpods.html">Airpods</a></li>
  		<li><a href="/headphones.html">Headphones</a></li>
  		<li><a href="/speakers.html">B Speakers</a></li>
  	</ul>
  	<div>
  		<a class="cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
  		<a class="signin-link" href="action.php?action=logout">Sign out</a>
  	</div>
  </nav>
	
	<!-- HERO CONTAINER -->
	<div class="hero-container">
		<div class="hero-content">
			<h1>Fulfill your music <br> needs.</h1>
			<p>intellegebat curae principes petentium vero non sed error ac inimicus molestie iisque netus tantas.</p>
			<a href="#allprod-container">Shop Now</a>
		</div>
	</div>
	
	<!-- FEATURED CONTAINER -->
	<div class="featured-container">
		<div class="featured-content">
			<div class="featured-text aos">
				<h3>Airpod XII</h3>
				<p>theophrastus tincidunt quidam dicunt donec senserit utroque fugit laudem sagittis natoque agam maecenas docendi expetenda ridens ultrices partiendo dolorem nec accumsan euismod viverra vitae sociosqu prodesset eget aliquet maluisset mandamus mediocritatem perpetua sea vero scelerisque</p>
				<a href="/detail.php?uniqueid=1001&id=1">See Product</a>
			</div>
		</div>
		<div class="featured-image aos">
			<img class="featured" src="/images/airpods1.png" alt="">
		</div>
	</div>
	
	<!-- SEE ALL PRODUCTS CONTAINER -->
	<div class="allprod-container" id="allprod-container">
		<div class="product aos">
			<img src="/images/airpods1.png" alt="">
			<div><a href="/airpods.html">See All Products</a></div>
		</div>
		<div class="product aos">
			<img src="/images/headphone1.png" alt="">
			<div><a href="/headphones.html">See All Products</a></div>
		</div>
		<div class="product aos">
			<img src="/images/speaker1.png" alt="">
			<div><a href="/speakers.html">See All Products</a></div>
		</div>
	</div>
	
	<!-- REVIEWS CONTAINER -->
	 <div class="review-container aos">
      
      <div class="text-rates">
        <div class="text aos">
         <h1>5,000+ of our customers love our Products.</h1>
         <p>We also provide a quality and more effort in our service. We give all of our love to our customers. Be gentle and good is our vision.</p>
        </div>
        <div class="rates">
          <div class="rate rate-1 aos">
            <h3>5 star for Henson Paras</h3>
            <h2>July 19, 2020</h2>
          </div>
          <div class="rate rate-2 aos">
            <h3>5 star for Jolibenee</h3>
            <h2>September 8, 2020</h2>
          </div>
          <div class="rate rate-3 aos">
            <h3>5 star for Victoria Divine</h3>
            <h2>December 15, 2020</h2>
          </div>
        </div>
      </div>
      
      <div class="cards">
        <div class="card aos">
          <h1>George Henton</h1>
          <h2>"Lorem ipsum hensoni jaoe jzuisju. hwetybu. hsiix jiowqui siiidhd xjuxiisisxhb gerun hsiwodhd. gqeopb."</h2>
        </div>
        <div class="card aos">
          <h1>Alex Teryson</h1>
          <h2>"Lorem ipsum hensoni jaoe jzuisju. hwetybu. hsiix jiowqui siiidhd xjuxiisisxhb gerun hsiwodhd. gqeopb."</h2>
        </div>
        <div class="card aos">
          <h1>Fatima Yusone</h1>
          <h2>"Lorem ipsum hensoni jaoe jzuisju. hwetybu. hsiix jiowqui siiidhd xjuxiisisxhb gerun hsiwodhd. gqeopb."</h2>
        </div>
      </div>
      
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
	
	<script src="/js/script.js"></script>
</body>
</html>
