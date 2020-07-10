<?php

/* Daniel Au */
/* CST-126   */
/* July 7, 2020 */
/*Version 1.0*/
/* Instructor Dr. Kondo Litchmore */

/* This Module establishes a connnection with the database and inserts the data input by the user. */


$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "CST-126_project";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$un   = $_POST[User_Name];
$fn   = $_POST[First_Name];
$ln   = $_POST[Last_Name];
$em   = $_POST[Email];
$pw   = $_POST[Password];
$ad1  = $_POST[Address1];
$ad2  = $_POST[Address2];
$cty  = $_POST[City];
$st   = $_POST[State];
$zc   = $_POST[Zipcode];
$ctry = $_POST[Country];

$sql_statement = "INSERT INTO `users` (`ID`, `User_Name`, `First_Name`, `Last_Name`, `Email`, `Password`, `Address_1`, `Address_2`, `City`, `State`, `Zipcode`, `Country`) VALUES (NULL, '$un', '$fn', '$ln', '$em', '$pw', '$ad1', '$ad2', '$cty', '$st', '$zc', '$ctry')";


if (mysqli_query($connection, $sql_statement)) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>