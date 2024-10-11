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
            <a href="<?php echo "http://".$_SERVER["SERVER_NAME"].":80/crud/CreateUsers.php"; ?>" style="background-color: blue;color: white;" class="btn sr-btn pull-right" type="button"><i class="fa fa-plus"> Add New</i></a>
            <button type="submit" class="btn sr-btn pull-right" style="background-color: green;color: white; margin-right: 5px;" type="button"><i class="fa fa-save"> Save</i></button>
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Users</h2>
                  </div>
               </div>
               <div class="table_section padding_infor_info">
                  <div class="table-responsive-sm">
                     <div class="inbox-head" style="height: 275px;">
                        <?php 
                        
                        $errorsArray = array("firstName" => "", "lastName" => "", "username" => "", "email" => "");
                        
                        $firstName = $lastName = $username = $email = "";

                        if ($_SERVER["REQUEST_METHOD"] == "GET") {

                        include_once "../crud/Database/UsersFunctions.php";

                           $result = GetUsersById($_GET["Id"]);

                           if (count($result) > 0) {
                              if ($result["Success"] == true) {
                                 if (mysqli_num_rows($result["Response"]) == 1) {
                                    while ($row = mysqli_fetch_assoc($result["Response"])) {

                                       $firstName = $row["FirstName"];
                                       $lastName = $row["LastName"];
                                       $username = $row["Username"];
                                       $email = $row["Email"];

                                    }
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
                        elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
                           $firstName = $_POST["firstName"];
                           $lastName = $_POST["lastName"];
                           $username = $_POST["username"];
                           $email = $_POST["email"];

                           if (empty($firstName)) { $errorsArray["firstName"]  = "First Name is required!"; }
                           if (empty($lastName)) { $errorsArray["lastName"]  = "Last Name is required!"; }
                           if (empty($username)) { $errorsArray["username"]  = "Username is required!"; }
                           if (empty($email)) { $errorsArray["email"]  = "Email is required!"; }

                           if (!empty($firstName) && !empty($lastName) && !empty($username) && !empty($email)) {
                           
                              $paramArray = array(
                                 "firstName" => $firstName, "lastName" => $lastName, "username" => $username, "email" => $email
                              );

                              include "../crud/Database/UsersFunctions.php";
   
                              $result = UpdateEntity("Users", $paramArray, $_GET["id"]);
                              
                              if (count($result) > 0) {
                                 if ($result["Success"] == true) {
                                    echo "<p style='color: green;'>Record Updated!</p>";     
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
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

