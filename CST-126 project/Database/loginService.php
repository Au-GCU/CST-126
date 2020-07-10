<!-- Daniel Au -->
<!-- CST-126 -->
<!-- July 9, 2020 -->
<!-- Version 1.0 -->
<!-- Instructor Dr. Kondo Litchmore -->
<!-- This Module is the login service script that will compare and verifiy the username and password provided. -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "Database/database.php";

class loginService {
    
    //  Tests the user inputed data to the 'users' table in database
    function login(String $un, String $pw) {
        $database = new database();
        $connection = $database->connect();
        
        $sql_statement = $connection->prepare("SELECT * FROM users WHERE User_Name=? AND Password=?;");
        
        $sql_statement->bind_param("ss", $un, $pw);
        
        $sql_statement->execute();
        
        $result = $sql_statement->get_result();
        
        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                header('Location: success.html');
            } else {
                echo $un . "/" . $pw . " is invalid.<br>";
                echo "Login unsuccessful<br>";
                exit;
            }
        } else {
            echo "error - " . mysqli_error($connection);
            exit;
        }
    }
    
}