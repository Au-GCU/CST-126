<!-- Daniel Au -->
<!-- CST-126 -->
<!-- July 9, 2020 -->
<!-- Version 1.0 -->
<!-- Instructor Dr. Kondo Litchmore -->
<!-- This Module containe the script for connecting to the database -->

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "root";
    private $port = "8888";
    private $name = "CST-126_project";
    
    function connect() {
        $connection = mysqli_connect($this->host, $this->user, $this->pass, $this->name, $this->port);
        
        if ($connection->connect_error) {
            echo "Connectoin faild" . $connection->connect_error . "<br>";
        } else {
            return $connection;
            echo "<br>Connection successfull<br>";
        }
        
    }
}