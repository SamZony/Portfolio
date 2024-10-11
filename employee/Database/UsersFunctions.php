<?php 

    include "DbFunctions.php";
    
    function GetAllUsers()
    {
        $query = "SELECT * FROM Users u WHERE u.Deleted = 0;";

        $result = ExecuteMySqlQuery($query);

        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        
                        echo 
                        "<tr>
                            <td>".$row["FirstName"]."</td>
                            <td>".$row["LastName"]."</td>
                            <td>".$row["Username"]."</td>
                            <td>".$row["Email"]."</td>
                            <td>".$row["Email"]."</td>
                            <td>
                                <a href='http://".$_SERVER["SERVER_NAME"].":80/crud/UserDetail.php?id=".$row["Id"]."' style='background-color: #2196f3; color: white;' class='btn sr-btn'><i class='fa fa-edit'></i></a>
                                <button type='submit' name='deleteUser' value='".$row["Id"]."' style='background-color: #ff5722; color: white;' class='btn sr-btn'><i class='fa fa-trash-o'></i></button>
                            </td>
                        </tr>";

                    }
                }
            }
            else {
                // no users found
            }
        }
    }

    function GetUsersById($Id)
    {
        $query = "SELECT * FROM Users WHERE Id = ".$Id;

        $result = ExecuteMySqlQuery($query);

        return $result;
    }

?>