<?php 
    include "DbConnection.php";
    
    if (GetDatabaseConnection()) {  }
    else { echo "Not Connected"; }

    function Insert_Update_Delete($procedureName, $paramsArray)
    {
        if (!empty($procedureName) && count($paramsArray) > 0) {
            $query = "CALL " . $procedureName . "(";

            foreach ($paramsArray as $key => $value) {
                if (gettype($value) == "string") {
                    $query = $query . "@" . $key . ":= '" . $value . "',";
                }
                else {
                    $query = $query . "@" . $key . ":= " . $value . ",";
                }
            }

            $query = substr_replace($query, ")", -1);

            $result = ExecuteMySqlQuery($query);

            return $result;
        }
    }

    function ExecuteMySqlQuery($query)
    {
        if (!empty($query)) {

            $conn = GetDatabaseConnection();

            // success          mysqli_query = return (dynamic)
            // failure          mysqli_query = false
            $result = mysqli_query($conn, $query);

            if (!$result) {
                $result = "Query Failed! SQL: - Error: ".mysqli_error($conn);
                $resultSet = array("Success" => false, "Response" => $result);
            }
            else {
                $resultSet = array("Success" => true, "Response" => $result);
            }

            return $resultSet;
        }
    }

    function UpdateEntity($tableName, $paramsArray, $id)
    {
        if (!empty($tableName) && count($paramsArray) > 0) {
            $query = "UPDATE " . $tableName . " SET ";

            foreach ($paramsArray as $key => $value) {
                if (gettype($value) == "string") {
                    $query = $query . " " . $key . " = '" . $value . "',";
                }
                else {
                    $query = $query . " " . $key . " = " . $value . ",";
                }
            }

            $query = substr_replace($query, "", -1);

            $query = $query . " WHERE Id = " . $id;

            $result = ExecuteMySqlQuery($query);

            return $result;
        }


        // UPDATE Users SET col1 = val1, col2 = val2, col3 = val WHERE Id = 5
    }
?>