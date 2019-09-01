<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Our Mission and Vision | Dr. Ambedkar's Electrohomoeopathy Medical Institute | Developed By Rayedox Technologies</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

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
					<h2 class="page-title">Mission &amp; Vision</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="project-list">
							<div class="container">
                            Dr. Ambedkar Institute, one of the leading institutes in Punjab and only such Institute, where medical and paramedical professions’ have been excelling their sharp edges of global competencies meeting all the world class quality parameters, is located at Kharar, towards Landran, just 7 Kmtrs. away from Mohali. Started in 2003,the Institute could mould thousands of younger and talented minds into world class professionals.<br><br><br>
Operating in a fast developing township like Kharar, our Vision is to become a world class leader imparting technical know-how integrating scientific knowledge & spirit evolving artistic and research skills igniting the younger-minds to take challenging responsibilities and accountabilities with great enthusiasm and ease meeting quality professional values, ethics ensuring both personal and professional growth, contributing to technological, economic and social development of the our Nation.<br>
We, at Dr. Ambedkar Institute, believe in Our Mission, which has always been to impart updated knowledge along with practical training at affordable cost so as to generate such a pool of world class talents who can render their relentless professional acumen and quality services to the world community with great reliability, trust and confidence meeting ever-changing, increasing and challenging healthcare requirements.<br><br><br>
Keeping all these facts in mind and as the part of our continuous and untiring efforts to further expand and excel in other areas of allied professions and services, besides the medical and paramedical courses, we have initiated the following new courses at our Institute. Besides the courses offered being recognized by and affiliated to various technical institutes and Universities across the Country, the Institute has now been affiliated to Shobhit University and conducting various courses under the University.

                            </div>
							
						</div>
					</div>
				</div>
			

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h2>Join our newsletter</h2>
							<form action="mission.php" method="post">
								<input type="email" name="email" placeholder="Enter your email">
								<input type="submit" value="Subscribe">
<?php          
if($_SERVER["REQUEST_METHOD"] == "POST")
{
        $email =$_POST["email"];
        echo "Thank you for subscribing us";
        $proceed=1;
        if (preg_match('/[\^£$%*()}{#~><>|=_+-]/', $email))
        {
            $proceed=0;
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
            $queryE="insert into subscribers(mailid) values('$email');";
            if($conn->query($queryE)==true)
                {
                ?>
                    <script>alert('Thank you for Subcribers - Dr Ambedkars electrohomoeopathy medical institute')</script>
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

			<?php include 'footerPage.php' ?>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>