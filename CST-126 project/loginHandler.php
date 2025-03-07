<!-- Daniel Au -->
<!-- CST-126 -->
<!-- July 9, 2020 -->
<!-- Version 1.0 -->
<!-- Instructor Dr. Kondo Litchmore -->
<!-- This Module is the loginHandler php script that processes the users input to verify login information with the database . -->


<?php

//  Displays all errors for troubleshooting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "Database/loginService.php";

$attemptedUsername = $_POST["User_Name"];
$attemptedPassword = $_POST["Password"];

$un = $attemptedUsername;
$pw = $attemptedPassword;

$login_service = new loginService();

//  Attempts to authenticate the user inputed data
$login_service->login($un, $pw);