<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Shopping Portal Home Page</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css?a=1234">
	    <link rel="stylesheet" href="assets/css/green.css?a=1234">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Bootstrap CSS -->
   
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets2/css/font-awesome.min.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets2/css/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets2/css/ionicons.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets2/css/slick.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets2/css/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets2/css/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets2/css/nice-select.min.css">
    <!-- Timecircles -->
    <link rel="stylesheet" href="assets2/css/timecircles.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets2/css/style.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		 <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
	
		

	</head>
    <body class="cnt-home">
	<header   class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
		
	
 <!-- Begin Hiraola's Breadcrumb Area -->
 <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2 style="color: #000000"></h2>
                    
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Hiraola's About Us Area -->
        <div class="about-us-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex align-items-center">
                        <div class="overview-content">
                            <h2>Welcome To <span style=" color: #8a0308 !important">Address Book</span> Store!</h2>
                            <p class="short_desc">We Provide Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Repudiandae nisi fuga facilis, consequuntur, maiores eveniet voluptatum, omnis possimus
                                temporibus aspernatur nobis animi in exercitationem vitae nulla! Adipisci ullam illum quisquam.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, nulla veniam? Magni aliquid
                                asperiores magnam. Veniam ex tenetur.</p>
                            <div class="hiraola-about-us_btn-area" >
                                <a class="about-us_btn" href="about_us.php" style=" background: #8a0308 !important; color:white !important;">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="overview-img text-center img-hover_effect">
                            <a href="#">
                                <img class="img-full" src="assets2/images/about-us/about_Us.jpg" alt="Hiraola's About Us Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's About Us Area End Here -->

        <!-- Begin Hiraola's Project Countdown Area -->
        <div class="project-count-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="ion-ios-briefcase-outline"></span>
                            </div>
                            <div class="count-title">
                                <h2 class="count" style=" color: #8a0308 !important">2169</h2>
                                <span>Project Done</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="ion-ios-wineglass-outline"></span>
                            </div>
                            <div class="count-title">
                                <h2 class="count" style=" color: #8a0308 !important">869</h2>
                                <span>Awards Winned</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="ion-ios-lightbulb-outline"></span>
                            </div>
                            <div class="count-title">
                                <h2 class="count" style=" color: #8a0308 !important">689</h2>
                                <span>Hours Worked</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="ion-happy-outline"></span>
                            </div>
                            <div class="count-title">
                                <h2 class="count" style=" color: #8a0308 !important">2169</h2>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Project Countdown Area End Here -->

        <!-- Begin Hiraola's Team Area -->
        <div class="team-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title-2">
                            <h4>Our Team</h4>
                        </div>
                    </div>
                </div> <!-- section title end -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member">
                            <div class="team-thumb img-hover_effect">
                                <a href="#">
                                    <img src="assets2/images/about-us/team/1.png?" alt="Our Team Member">
                                </a>
                            </div>
                            <div class="team-content text-center">
                                <h3>Sameer Khan</h3>
                                <p>IT Expert</p>
                                <a href="#">sam@arts.com</a>
                                <div class="hiraola-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com/samzoony" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/@samzony" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member">
                            <div class="team-thumb img-hover_effect">
                                <a href="#">
                                    <img src="assets2/images/about-us/team/2.png?a" alt="Our Team Member">
                                </a>
                            </div>
                            <div class="team-content text-center">
                                <h3>Rayyan Babu Tahir</h3>
                                <p>Database Manager</p>
                                <a href="#">rayyan@arts.com</a>
                                <div class="hiraola-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member">
                            <div class="team-thumb img-hover_effect">
                                <a href="#">
                                    <img src="assets2/images/about-us/team/3.png" alt="Our Team Member">
                                </a>
                            </div>
                            <div class="team-content text-center">
                                <h3>Mashood Kamran</h3>
                                <p>Backend Lead</p>
                                <a href="javascript:void(0)">mashood@arts.com</a>
                                <div class="hiraola-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member">
                            <div class="team-thumb img-hover_effect">
                                <a href="#">
                                    <img src="assets2/images/about-us/team/4.jpg" alt="Our Team Member">
                                </a>
                            </div>
                            <div class="team-content text-center">
                                <h3>Abid Ullah & Aaish Baig</h3>
                                <p>Non-Custom Dealers</p>
                                <a href="#">abid@arts.com</a>
                                <div class="hiraola-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                </div>
            </div>
        </div>
        <!-- Hiraola's Team Area End Here -->
<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js?a=143"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<!-- <script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script> -->
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>