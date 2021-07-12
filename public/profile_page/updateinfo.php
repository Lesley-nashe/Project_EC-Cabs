<?php

//store the values from the form

$newlastname = $_REQUEST['lastlame'];
$newfirstname = $_REQUEST['firstname'];
$newcontactnumber = $_REQUEST['contact'];
$newEmail = $_REQUEST['email'];


$id = 1;

//add database credentials
require_once("config.php");

if(isset($_COOKIE["clientsID"])*/)
    {

        $id = ($_COOKIE["clientsID"]);

    //connect to the database
    $newConnection = mysqli_connect($servername, $username, $password, $database) or die("Could not connect to database!");


    //issue the query instructions
    $newQuery = "UPDATE clients SET lastlame= '$newlastname', firstname = '$newfirstname', email = '$newEmail', contact = '$newcontactnumber' WHERE clientsID = $id";
    $newResult = mysqli_query($newConnection, $newQuery) or die("Could not retrieve data!");

    //end the connection to the database
    mysqli_close($newConnection);

    //display message that confirms the update
    //echo "<p style=\"color: green;\">The record was successfully updated!</p>";
    header("location:khumwp.php");
    }
?>