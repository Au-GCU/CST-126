<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "Database/database.php";
include "Class/Blog.php";

class blogService {
    
    function returnAll() {
        
        $db = new Database();
        
        $connection = $db->connect();
        $stmt = $connection->prepare("SELECT * FROM Blog_Post");
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 0) {
            return null;
        } else {
            $blogs = array();
            while ($post = $result->fetch_assoc()) {
                array_push($blogs, $post);
            }
            return $blogs;
        }
        $connection->close();
    }
    
    function addNewPost($blog) {
        
        $db = new database();
        
        $connection = $db->connect();
        $stmt = $connection->prepare("INSERT INTO `blog` (`ID`, `DATE`, `TITLE`, `POST`) VALUES (NULL, ?, ?, ?)");
        $da = $blog->getDate();
        $ti = $blog->getTitle();
        $po = $blog->getPost();
        
        $stmt->bind_param("sss", $da, $ti, $po);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result) {
            echo $blog . " ADDED SUCCESSFULLY...";
        }
        $connection->close();
    }
    
    function badWords($b) {
        if (strpos($b, "badword") !== false) {
            return true;
        } else {
            return false;
        }
    }
}