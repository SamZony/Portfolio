<div class="container-fluid">
   <div class="row column_title">
      <div class="col-md-12">
         <div class="page_title">
            <h2>HRM</h2>
         </div>
      </div>
   </div>
   <!-- row -->
   <a href="<?php echo "http://".$_SERVER["SERVER_NAME"].":80/crud/CreateUsers.php"; ?>" style="background-color: blue;color: white;" class="btn sr-btn" type="button"><i class="fa fa-plus"> Add New</i></a>
   <div class="row">
      <!-- table section -->
      <div class="col-md-12">
         <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
               <div class="heading1 margin_0">
                  <h2>Users</h2>
               </div>
            </div>
            <form method="post">
               <div class="table_section padding_infor_info">
                  <div class="table-responsive-sm">
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th></th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                              include "../crud/Database/UsersFunctions.php";

                              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                 echo $_POST["deleteUser"];

                                 // function to delete user
                                 $paramArray = array("tableName" => "Users", "id" => $_POST["deleteUser"], "deletePhysically" => 0);

                                 $result = Insert_Update_Delete("DeleteEntity", $paramArray);
                              }

                              GetAllUsers();
                           ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>