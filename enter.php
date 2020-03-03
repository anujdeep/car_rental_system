<?php
session_start();
if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }

  
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>SAVAARI</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
        
          	
          	
        <!-- logged in user information -->
          
    
		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="enter.php"><font size="+5" color="#66FF00" face="Comic Sans MS, cursive">SAVAARI&emsp;</font><span id="loghead">we take you places</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
                 <h1>Welcome<br>
                <?php echo $_SESSION['email']?></h1>
				<ul class="links">
                    
					<li><a href="enter.php">Home</a></li>
                    <li><a href="book.php">Book now</a></li>
                    <li><a href="#form1">Contact us</a></li>
                    <li><a href="#content12">About us</a></li>
                    <li name="logq">
                    <a href="logout.php" >logout</a> 
                    </li>

                   
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="cab4.jpg">
				<div class="inner">
					<header>
						<h1>A cab for every occassion</h1>
                        <h4>savaari offers city taxis,inter-city cabs and local cabs at hourly cabs</h4>
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="cab3.jpg">
				<div class="inner" style="float:inherit">
					<article class="box">
						<header >
							<p style="font-size:25px;"><b>Why ride with savaari?</b></p>
                            <img src="/wamp/www/my_project/images/cab6.jpg" alt="cab">
							<ul>
                            <li>Cabs for every pocket</li>
                            <li>Secure and safer rides</li>
                            <li>In cab enterainment</li>
                            <li>Be in the real time wherever you want</li>
                            </ul>
						</header>
						<div id="content12">
							<p> From Sedans and SUVs to Luxury cars for special occasions, we have cabs to suit every pocket<br>
Verified drivers, an emergency alert button, and live ride tracking are some of the features that we have in place to ensure you a safe travel experience.<br>
Play music, watch videos and a lot more with Ola Play! Also stay connected even if you are travelling through poor network areas with our free wifi facility.<br>
Want to attend an important meeting or a relatives' marriage,we drop you any anywhere in the blink of seconds.

</p>
						</div>
						<footer>
							<a href="login.php" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#two" class="more">Learn More</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="cab2.jpg">
				<div class="inner">
					<article class="box">
						<header>
                            <h2><a href="book.php">book your ticket now</a></h2>
                        </header>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.8875848927782!2d88.4348418150333!3d22.620672685158066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89e2c4c56e9a9%3A0xdc950e642294ebd2!2sHeaven%20Plaza%20BOI%20ATM!5e0!3m2!1sen!2sin!4v1583059086158!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </article>
                </div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper post bg-img" data-bg="banner4.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Varius a cursus aliquet</h2>
							<p>11.11.2016</p>
						</header>
						<div class="content">
							<p>Ride with pride</p>
						</div>
						<footer>
							<a href="login.php" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#four" class="more">Learn More</a>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper post bg-img" data-bg="banner3.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Luctus blandit mi lectus in nascetur</h2>
							<p>10.30.2016</p>
						</header>
						<div class="content">
							<p>Ride with pride</p>
						</div>
						<footer>
							<a href="login.php" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contact Us</h2>

					<form id="form1"action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
						&copy; Untitled. Design
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>