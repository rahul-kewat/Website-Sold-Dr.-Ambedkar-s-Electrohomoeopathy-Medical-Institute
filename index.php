<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Dr. Ambedkar's Electrohomoeopathy Medical Institute | Developed By Rayedox Technologies</title>

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
		<?php
            $dat= date("Y-m-d H:i:s");
            $user_ip = getenv('REMOTE_ADDR');
            $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
            $country = $geo["geoplugin_countryName"];
            $city = $geo["geoplugin_city"];
            $conn1 = new mysqli("localhost","daionlin_rayedox","Rayedox1234!","daionlin_aie");
            if($conn1->connect_error){
            die("Connection failed :".$conn1->connect_error);
            }
            $queryE="insert into usersvisited(datetime,userip,country,city) values('$dat','$user_ip','$country','$city');";
            if($conn1->query($queryE)==true)
            {

            }
            mysqli_close($conn1);
        ?>
		<div class="site-content">
			 <?php include 'upperPage.php';?>
			<div class="hero">
				<ul class="slides">
					<li data-bg-image="images/slider-1.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Quality Matters</h2>
								<p>When it's about your future</p>
								<a href="contact.php" class="button">Enquiry</a>
							</div>
						</div>
					</li>
					<li data-bg-image="images/slider-2.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Quality Matters</h2>
								<p>When it's about your future</p>
								<a href="#" class="button">Enquiry</a>
							</div>
						</div>
					</li>
					<li data-bg-image="images/slider-3.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Quality Matters</h2>
								<p>When it's about your future</p>
								<a href="#" class="button">Enquiry</a>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<h2 class="section-title">Have a look !</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="images/abcd1.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Fully Equipped Classrooms</a></h2>
									<p>At Dr. Ambedkar Institute all the class rooms are fully equipped with the neccessary equipments.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="images/abcd2.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Best in class faculty</a></h2>
									<p>We have hired best faculty for the bright carrer of the students. The teachers are well qualified and have the proper knowledge of the subjects</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="images/abcd3.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Students from all over India</a></h2>
									<p>We are best in our teachings, our dedication towards studies have attracted the people from all over the India</p>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h2 class="section-title">Our mission and vision</h2>
								<p>Dr. Ambedkar Institute, one of the leading institutes in Punjab and only such Institute, where medical and paramedical professions’ have been excelling their sharp edges of global competencies meeting all the world class quality parameters, is located at Kharar, towards Landran, just 7 Kmtrs. away from Mohali. Started in 2003,the Institute could mould thousands of younger and talented minds into world class professionals.
</p>
							</div>
							
						</div>
					</div>
				</div>

				<div class="fullwidth-block cta" data-bg-image="images/slider-1.jpg">
					<div class="container">
						<h1>Get in touch with us</h1>
						<h3>For Admissions and further queries, please feel free to contact us</h3>
						<a href="contact.php" class="button">Contact Us</a>
					</div>
				</div>

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h2>Join our newsletter</h2>
							<form action="index.php" method="post">
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