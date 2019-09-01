<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Contact Us | Dr. Ambedkar's Electrohomoeopathy Medical Institute | Developed By Rayedox Technologies</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <meta name="description" content="Rayedox Technologies" />
	    <meta name="keywords" content="Nothing like us, free website, free software, free CMS, free Security, Software, Web, Website, Technologies" />
	    <meta name="author" content="Rayedox" />
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">
			<header class="site-header" data-bg-image="">
				<div class="container">
					<div class="header-bar">
						<a href="index.php" class="branding">
							<img src="images/logo.png" alt="" class="logo">
							<div class="logo-type">
								<h1 class="site-title">Dr. Ambedkar's Electrohomoeopathy Medical Institute</h1>
							</div>
						</a>

						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="home menu-item current-menu-item"><a href="index.php"><img src="images/home-icon.png" alt="Home"></a></li>
								<li class="menu-item"><a href="about.php">About Us</a></li>
								<li class="menu-item"><a href="gallery.php">Gallery</a></li>
								<li class="menu-item"><a href="courses.php">Courses</a></li>
                                <li class="menu-item"><a href="mission.php">Mission &amp; Vision</a></li>
								<li class="menu-item"><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

			<div class="page-head" data-bg-image="images/slider-1.jpg">
				<div class="container">
					<h2 class="page-title">Contact us</h2>
				</div>
			</div>

			<main class="main-content">				
				<div class="fullwidth-block">
					<div class="container">
						 <div class="row">
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Address</h2>
						 			<address>
						 				<p>LANDRAN ROAD<br>
                                        140301 Kharar, Punjab, India</p>
									</address>
						 		</div>
						 	</div>
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Phone No</h2>
                                    <address>+91 7519150001<br>+91 7519060001</address><br>
						 		</div>
						 	</div>
						 </div>

						 <div class="row contact-form">
						 	<form action="contact.php" method="post">
						 		<div class="col-md-4">
						 			<p><input type="text" name="name" placeholder="Your name..."></p>
						 			<p><input type="text" name="email" placeholder="Email..."></p>
						 			<p><input type="text" name="phnumber" placeholder="Phone No..."></p>
						 		</div>
						 		<div class="col-md-8">
						 			<p>
						 				<textarea type="text" name="message" placeholder="Message"></textarea>
						 			</p>
						 			<p class="text-right">
						 				<input type="submit" value="Send message">
						 			</p>
						 		</div>
                                <?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$fn =$_POST["name"];
$email =$_POST["email"];
$queryque =$_POST["message"];
$querysend=date("Y/m/d H:i:s");
$phone=$_POST["phnumber"];
    echo "Thank you for your request we will be in touch with you, soon";
    $proceed=1;
if(strlen($phone)!=10){$proceed=2;}
if (preg_match('/[\^£$%*()}{#~><>|=_+-]/', $fn)){$proceed=0;}
if (preg_match('/[\^£$%*()}{#~><>|=_+-]/', $email)){$proceed=0;}
if (preg_match('/[\^£$%*()}{#~><>|=_+-]/', $queryque)){$proceed=0;}
if (preg_match('/[\^£$%*()}{#~><>|=_+-]/', $querysend)){$proceed=0;}
if (preg_match('/[\^£$%*()}{#~><>|=_+-]/', $phone)){$proceed=0;}
    if($proceed==2)
{
?>
 <script>alert('Please Check the Phone No.')</script>
<?php
}
if($proceed==0)
{
?>
 <script>alert('Invalid Data\n We do not accept any special charachter')</script>
<?php
}
    if($proceed==1)
    {
$conn = new mysqli("localhost","daionlin_rayedox","Rayedox1234!","daionlin_aie");
if($conn->connect_error){
die("Connection failed :".$conn->connect_error);
}
$queryE="insert into institute(email,username,message,datetime,phoneno) values('$email','$fn','$queryque','$querysend','$phone');";
if($conn->query($queryE)==true)
{
?>
<script>alert('We have received your message and would like to thank you for writing to us.\nOne of our colleagues will get back to you shortly. \n\nHave a great day! - Dr Ambedkars electrohomoeopathy medical institute')</script>
<?php

}
else
{
echo "Something went wrong while sending mail.";

}
}
}
?>
						 	</form>
						 </div>
					</div>
				</div>

				
			</main> <!-- .main-content -->

			<?php include 'footerPage.php';?>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>