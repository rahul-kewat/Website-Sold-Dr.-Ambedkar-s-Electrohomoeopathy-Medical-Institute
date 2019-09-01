<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>About Us | Dr. Ambedkar's Electrohomoeopathy Medical Institute | Developed By Rayedox Technologies</title>

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
					<h2 class="page-title">About us</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">Why choose us?</h2>
								<ol class="circle">
									<li>
										<h3>Fully Equipped Classrooms</h3>
										<p>Our class rooms are fully furnished and have latest gadgets/instruments to be used in the study of the students</p>
									</li>
									<li>
										<h3>Best in class faculty</h3>
										<p>Teachers are highly specialized in their fields.</p>
									</li>
									<li>
										<h3>Students from all over India</h3>
										<p>We have the students from all over India.</p>
									</li>
								</ol>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Usefull links</h2>
								<p>Please have a look at below links</p>
								<ul class="arrow-list has-border">
                                    <li><a href="https://www.facebook.com/436797246422346/photos/pcb.1626749350760457/1626748930760499/?type=3&theater">Rajasthan going to be first where Electrohomeopathist can give cure</a></li>
									 <li><a href="https://www.facebook.com/436797246422346/photos/a.447493125352758/648036395298429/?type=3&theater">Student's reaction after getting passed from the institute</a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Testimonials</h2>
								<ul class="testimonial-list">
									<li>
										<blockquote>
											<p>Very Good Institute for the Medical Students. Teachers are very much friendly.</p>
											<cite>Mohammed Ali Barbhuiya</cite>
										</blockquote>
									</li>
									<li>
										<blockquote>
											<p>The facility provided to us is very good. The interior is very good.</p>
											<cite>Rinko Pal Sansoa</cite>
										</blockquote>
									</li>
									<li>
										<blockquote>
											<p>Best teachers in their respective fields.</p>
											<cite>Dinesh Rajput </cite>
										</blockquote>
									</li>
								</ul>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->		
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<h2 class="section-title">Institute Members</h2>
						<div class="row">
							<div class="col-md-3">
								<div class="team">
									<img src="images/drgurvinder.jpg" alt="" class="team-image">
									<h3 class="team-name">Dr. Gurvinder Singh</h3>
                                    <p>Director</p>
									<p>M.D.</p>
									<div class="social-links">
										<a href="https://www.facebook.com/profile.php?id=100000898667831&fref=gc&dti=1372027952865655"><i class="fa fa-facebook"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div>

				
			

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h2>Join our newsletter</h2>
							<form action="about.php" method="post">
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

			<?php include 'footerPage.php';?>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>