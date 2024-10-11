<?php 

   include("include/config.php");

   if (isset($_COOKIE["username"])) {
      header("Location:http://localhost:80/crud/Index.php");        // redirecting to login page
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
    <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>

   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height" style="margin-top: -83px;">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form method="post">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input name="email" placeholder="E-mail / Username" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="">Forgotten Password?</a>
                           </div>
                           <div class="field margin_0">
                              <div class="right_button" style="text-align: center;">
                                 <button type="submit" class="btn btn-primary btn-xs">
                                 Login
                                 </button>
                                 <a class="btn btn-success btn-xs" href="SignUp.php"> Sign Up
                                 </a>
                              </div>
                           </div>
                        </fieldset>
                     </form>

                     <?php 
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                           $username = $_POST["email"];
                           $password = $_POST["password"];

                           if (empty($username) || empty($password)) {
                              echo "<p style='color: red;'>Username or Password is empty</p>";
                           }
                           else {

                              $paramArray = array("username" => $username, "password" => $password);
                              $result = Insert_Update_Delete("sp_Login", $paramArray);

                              if (count($result) > 0) {
                                 if ($result["Success"] == true) {
                                    if (mysqli_num_rows($result["Response"]) == 1) {
                                       while ($row = mysqli_fetch_assoc($result["Response"])) {
                                          setcookie("username", $username, time() + 36000);
                                          $fullName = $row["FirstName"] . " " . $row["LastName"];
                                          setcookie("fullname", $fullName, time() + 36000);
                                       }
                                       header("Location:http://localhost:80/crud/Index.php");        // redirecting to login page
                                    }
                                    else {
                                       echo "<p style='color: red;'>Username or Password is invalid.</p>";
                                    }
                                 }
                                 else {
                                    echo $result["Response"];
                                 }
                              }
                              else {
                                 echo "<p style='color: red;'>Some Error Occured!</p>";
                              }
                           }
                        }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>