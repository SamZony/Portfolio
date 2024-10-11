<?php

function GetDatabaseConnection()
{
    $con = mysqli_connect("localhost", "root", "", "signuplogin") or die("Unable to Connect to Server");
    return $con;
}

?>