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

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		 <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
	
		 <!-- All css files are included here. -->
		 
    <link rel="stylesheet" href="css2/core.css">
    <link rel="stylesheet" href="css2/plugins/animate.css">
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="css2/responsive.css">
    <link rel="stylesheet" href="css2/timecircles.css">
    <!-- customizer style css -->
    <link rel="stylesheet" href="css2/style-customizer.css">
    <link href="#" data-style="css2/styles" rel="stylesheet">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header   class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>

<div class="contact-us">
            <div class="contact-information text-center ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-contact-information">
                                <div>
                                    <a href="#"><img src="assets/images/i1.png" style="width:200px; height: 200px;"></a>
                                </div>
                                <p>Ph.no : 012345678</p>
                                <p>Mob.no : 012345678</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-contact-information">
                                <div>
                                    <a href="#"><img src="assets/images/i2.png" style="width:200px; height: 200px;"></a>
                                </div>
                                <p> email@demo.com</p>
                                <p>info@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-contact-information">
                                <div>
                                    <a href="#"><img src="assets/images/i3.png" style="width:200px; height: 200px;"></a>
                                </div>
                                <p>Address goes here,</p>
                                <p>street,Crossroad123.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!--Contact bottom section-->
            <div class="contact-bottom-section ptb-100">
                <div class="bg-img" style="background-image:url(assets/images/bg.jpg) !important; opacity:0.6;"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 contact-form-div">
                            <div class="contact-form">
                                <div class="contact-form-title">
                                    <h2>Get In Touch</h2>
                                </div>
                                <div class="contact-form-box">
                                    <p class="form-messege"></p>
                                    <form method="post">
                                        <input name="con_name" type="text" placeholder="Name">
                                        <input name="con_email" type="text" placeholder="Email">
                                        <textarea name="con_message" placeholder="Message"></textarea>
                                        <button type="submit">SEND</button>
                                    </form>

                                    <?php
                                       

                                       if ($_SERVER["REQUEST_METHOD"] == "POST"){

                                            $Name = $_POST["con_name"];
                                            $Email = $_POST["con_email"];
                                            $Message = $_POST["con_message"];

                                            $paramsArray = array("Name" => $Name, "Email" => $Email, "MESSAGE" => $Message);
                                            
                                            ContactUs("sp_contactus", $paramsArray);
                                        } 
                                                  
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 map-div">
                            <div id="contact-map" class="map-area">
                                <div id="googleMap" style="width:100%;height:480px;"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14466.136769377174!2d67.0652637!3d24.9819581!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29b2cbc198ba2dbd!2sAptech%20Computer%20Education%20North%20Karachi%20Center!5e0!3m2!1sen!2s!4v1656424627988!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <!--Contact bottom section end-->
         <div style="width:70% !important;margin-left:10%;">   
      
								</div>
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
	<script src="assets/js/scripts.js"></script>

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