
<div class="container-fluid">
   <div class="row column_title">
      <div class="col-md-12">
         <div class="page_title">
            <h2>HRM</h2>
         </div>
      </div>
   </div>
   <!-- row -->
   <div class="row">
      <!-- table section -->
      <div class="col-md-12">
         <form method="post" class="position search_inbox">
            <a href="<?php echo "http://".$_SERVER["SERVER_NAME"].":80/crud/Users.php"; ?>" style="background-color: black;color: white;" class="btn sr-btn" type="button"><i class="fa fa-mail-reply-all"></i></a>
            <a href="<?php echo "http://".$_SERVER["SERVER_NAME"].":80/crud/CreateUser.php"; ?>" style="background-color: blue;color: white;" class="btn sr-btn pull-right" type="button"><i class="fa fa-plus"> Add New</i></a>
            <button type="submit" class="btn sr-btn pull-right" style="background-color: green;color: white; margin-right: 5px;" type="button"><i class="fa fa-save"> Save</i></button>
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Users</h2>
                  </div>
               </div>
               <div class="table_section padding_infor_info">
                  <div class="table-responsive-sm">
                     <div class="inbox-head" style="height: 450px;">
                        <?php 
                        
                        $errorsArray = array("firstName" => "", "lastName" => "", "username" => "", "email" => "", "password" => "");
                        
                        $firstName = $lastName = $username = $email = $password = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                           $firstName = $_POST["firstName"];
                           $lastName = $_POST["lastName"];
                           $username = $_POST["username"];
                           $email = $_POST["email"];
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

                              include "../crud/Database/DbFunctions.php";
   
                              $result = Insert_Update_Delete("sp_SignUp", $paramArray);
                              
                              if (count($result) > 0) {
                                 if ($result["Success"] == true) {
                                    echo "<p style='color: green;'>Record Created!</p>";     
                                 }
                                 else {
                                    echo "<p style='color: red;'>".$result["Response"]."</p>";
                                 }
                              }
                              else {
                                 echo "<p style='color: red;'>Some Error Occured!</p>";
                              }
                           }
                        }
                        
                        ?>
                        
                           <div class="input-append">
                              <input type="text" class="sr-input" placeholder="First Name" name="firstName" value="<?php echo $firstName; ?>">
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["firstName"]; ?></p>
                              <input type="text" class="sr-input" placeholder="Last Name" name="lastName" value="<?php echo $lastName; ?>">
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["lastName"]; ?></p>
                              <input type="text" class="sr-input" placeholder="Email" name="email" value="<?php echo $email; ?>">
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["username"]; ?></p>
                              <input type="text" class="sr-input" placeholder="Username" name="username" value="<?php echo $username; ?>">
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["email"]; ?></p>
                              <input type="password" class="sr-input" placeholder="Password" name="password" value="<?php echo $password; ?>">
                              <p style="color: red;text-align: center;"><?php echo $errorsArray["password"]; ?></p>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
