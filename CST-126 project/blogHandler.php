<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once('Class/Blog.php');
require_once('Database/blogService.php');

if (isset($_GET)) {
    $blog_date = $_GET['Date'];
    $blog_title = $_GET['Title'];
    $blog_post = $_GET['Post'];
} else {
    header('Location: failed.html');
}

$blogService = new blogService();
if ($blogService->badWords($blog_title) || $blogService->badWords($blog_post)) {
    echo "<h1>BAD WORDS FOUND, POST REJECTED</h1>";
} else {
    $blogPost = new Blog(NULL, $blog_date, $blog_title, $blog_post);
    if ($blogService->addNewPost($blogPost)) {
        echo "New Blog Added to Server...";
    } else {
        echo "New Blog FAILED to be Added to Server...";
    }
    echo "<br><a href= 'blogPage.php'>View all blogs..</a>";
}
?>