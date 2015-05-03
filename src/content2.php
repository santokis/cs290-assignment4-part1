<?php
    
    session_start();
    //if the user is logged in, redirect to login.php
    if(isset($_SESSION['username']) == false){
        $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
        $filePath = implode('/', $filePath);
        $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
        header("Location: {$redirect}/login.php", true);
        //header("Location: http://localhost:8888/src/login.php", true);
        die();
    }
    else{
        //echo "Click <a href = 'http://localhost:8888/src/content1.php'>here</a> for content1.php.";
        echo "Click <a href = 'http://web.engr.oregonstate.edu/~santokis/cs290-assignment4-part1/content1.php'>here</a> for content1.php.";
    }
    
?>