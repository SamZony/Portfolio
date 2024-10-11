<?php 
   include "../crud/Database/DbFunctions.php";

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
                  <?php 


                     $errorsArray = array("firstName" => "", "lastName" => "", "username" => "", "email" => "", "password" => "");
                     
                     $firstName = $lastName = $username = $email = $password = "";
                     
                     if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $firstName = $_POST["firstName"]; $lastName = $_POST["lastName"]; $username = $_POST["username"]; $email = $_POST["email"];
                        $password = $_POST["password"];

                        if (empty($firstName)) { $errorsArray["firstName"]  = "First Name is required!"; }
                        if (empty($lastName)) { $errorsArray["lastName"]  = "Last Name is required!"; }
                        if (empty($username)) { $errorsArray["username"]  = "Username is required!"; }
                        if (empty($email)) { $errorsArray["email"]  = "Email is required!"; }
                        if (empty($password)) { $errorsArray["password"]  = "Password is required!"; }

                        if (!empty($firstName) && !empty($lastName) && !empty($username) && !empty($email) && !empty($password)) {
                           
                           $paramArray = array(
                              "firstName" => $firstName, "lastName" => $lastName, "username" => $username, "email" => $email, "password" => $password
                           );

                           $result = Insert_Update_Delete("sp_SignUp", $paramArray);
                           
                           if (count($result) > 0) {
                              if ($result["Success"] == true) {
                                 header("Location:http://localhost:82/ECommerceSite/AdminArea/login.php");        // redirecting to login page      
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
                  <br/><br/><br/><br/><br/><br/>

                  <div class="login_form">
                     <form method="post">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">First Name</label>
                              <input name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>" />
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["firstName"]; ?></p>
                           </div>
                           <div class="field">
                              <label class="label_field">Last Name</label>
                              <input name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>" />
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["lastName"]; ?></p>
                           </div>
                           <div class="field">
                              <label class="label_field">Username</label>
                              <input name="username" placeholder="Username" value="<?php echo $username; ?>" />
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["username"]; ?></p>
                           </div>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input name="email" placeholder="E-mail" value="<?php echo $email; ?>" />
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["email"]; ?></p>
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" />
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["password"]; ?></p>
                           </div>
                           <div class="field margin_0">
                              <div class="right_button" style="text-align: center;">
                                 <button type="submit" class="btn btn-primary btn-xs">
                                 Sign Up
                                 </button>
                                 <a class="btn btn-success btn-xs" href="Login.php"> Login
                                 </a>
                              </div>
                           </div>
                        </fieldset>
                     </form>

                     
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