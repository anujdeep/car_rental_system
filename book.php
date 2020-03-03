
<?php
session_start();
if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
    echo $_SESSION['msg'];
  	header('location: index.php');
  }
  
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Savaari</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->

			
        
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">


<!--	<link rel="stylesheet" type="text/css" href="css/main.css">-->
        <style>
                body{
                    
            background-image: url(images/banner2.jpg);
            display: block;
            

                };
                
            
            .txt-field{
                color: yellow;
                
                padding-top: 50px;
                
                padding-bottom: 50px;
            };
            .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #008CBA; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

            
            #your a{
     
     text-decoration:none;
                color: yellow;
                display: inline;
}

#your a:hover {
    color: yellow;
    text-decoration: underline;
    display: inline;
}
            .linked{
                color: yellow;
            }
            li a {
                color: yellow;
            }
            input[type=text] {
  
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #D3D3D3;
  color: black;
                text-transform: capitalize;
}
            input[type=email] {
  
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #D3D3D3;
  color: black;
}
            input[type=tel] {
  
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #D3D3D3;
  color: black;
}
            input[type=date] {
  
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #D3D3D3;
  color: black;
}
            select {
  
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #D3D3D3;
}
            #wex{
                text-transform: uppercase;
            }
            #sad{
                text-align: center;
                font-family: serif;
                font-weight: 500;
                color: #4CAF50;
                font-size: 30px;
                border: 5px solid white;
                background: lightgrey;
            }
            
        </style>

		</head>
		<body>	

			  <header>
        <div class="logo" style="text-align: center;color:yellow;margin-top: 20px;font-size: 40px;"><a href="enter.php" class="logo" style="text-align: center;color:yellow;margin-top: 20px;font-size: 60px;">Savaari</a>
            <span style="font-size: 20px;text-align: center; color: white">we take you places</span>
    </div></header>
                        <nav id="your">
				<ul class="linked">
					<li><a href="enter.php">Home</a></li>
					<li>
                    <a href="logout.php" >logout</a> 
                    </li>
				</ul>
			</nav>
			<!-- start banner Area -->
            
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
                    
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 ">
							<h6 class="text-white " style="word-spacing:5px;">Need a ride? just call</h6>
							<h1 class="text-uppercase" style="color:yellow;letter-spacing:5px;">
								7004011477				
							</h1>
							<p class="pt-10 pb-10 text-white" style="word-spacing:10px;">
								Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.
							</p>
							<a href="#" class="primary-btn text-uppercase" style="color:yellow;">Call for taxi</a>
						</div>
						<div class="col-lg-4  col-md-6 header-right">
							<h4 class="pb-30" style="color:yellow;">Book Your Taxi Online!</h4>
							<form class="form" action="book.php" method="post">
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="name" placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'"  required>
							    	
							    	<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'"pattern="[1-9]{1}[0-9]{3}[0-9]{2}[0-9]{4}" required>
							    </div>								
							    <div class="form-group">
							       	<div class="default-select" id="default-select">
										<select required>
											<option value="" disabled selected hidden>From Destination</option>
											<option value="1">Destination One</option>
											<option value="2">Destination Two</option>
											<option value="3">Destination Three</option>
										</select>
									</div>
							    </div>
							    <div class="form-group">
							       	<div class="default-select" id="default-select2">
										<select required>
											<option value="" disabled selected hidden>To Destination</option>
											<option value="1">Destination One</option>
											<option value="2">Destination Two</option>
											<option value="3">Destination Three</option>
										</select>
									</div>
							    </div>							    
							    <div class="form-group">
									<div class="input-group dates-wrap">                                              
										<input id="datepicker2" class="dates form-control"   type="date" required>                        
<!--
										
-->
									</div>
							    </div>							    
							    <div class="form-group">

							            <button class="btn btn-default btn-lg btn-block text-center text-uppercase button button1" name="book_btn">Make reservation</button>

							    </div>
							</form>
						</div>
                        <?php 
            $book_msg="";
            if(isset($_POST['book_btn'] )){
                $wex=$_POST['name'];
                $book_msg="<div id='sad'>Hi,<span id='wex'>$wex</span> You have successfully booked a cab with us.</br>
                It will be soon at your door step</div>";
            }
            echo $book_msg;?>
					</div>
				</div>					
			</section>
            
			<!-- End banner Area -->	

			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>								
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>