<?PHP
    
 //referenced Week 5 lecture "PHP Sessions"
    session_start();
    //if the user is logged in, redirect to content1.php
    if(isset($_SESSION['username']) == true){
        $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
        $filePath = implode('/', $filePath);
        $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
        header("Location: {$redirect}/content1.php", true);
        //header("Location: http://localhost:8888/src/login.php", true);
        die();
    }
    
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset = "UTF-8">
</head>
<body>
    <form action = "content1.php" method = "POST">Username:
        <input name = "username" type = "text">
        <input name = "login" type = "submit" value = "Login">
    </form>
</body>
</html>