<?PHP
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
        
    if(isset($_GET['action']) && $_GET['action'] == 'end'){
        //referenced Week 5 lecture "PHP Sessions"
        $_SESSION = array();
        session_destroy();
        $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
        $filePath = implode('/', $filePath);
        $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
        header("Location: {$redirect}/login.php", true);
        //header("Location: http://localhost:8888/src/login.php", true);
        die();
    }
    
    if((isset($_POST['username']) == false) && (isset($_SESSION['username']) == false)){
        //referenced Week 5 lecture "PHP Sessions"
        $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
        $filePath = implode('/', $filePath);
        $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
        header("Location: {$redirect}/login.php", true);
        //header("Location: http://localhost:8888/src/login.php", true);
        die();
    }

    if(isset($_POST['username'])){ //if name parameter is given
        if(strlen($_POST['username']) == ""){ //if no username is entered
            //echo "A username must be entered. Click <a href = 'http://localhost:8888/src/login.php'>here</a> to return to login.";
            echo "A username must be entered. Click <a href = 'http://web.engr.oregonstate.edu/~santokis/cs290-assignment4-part1/login.php'>here</a> to return to login.";
        }
        else{
            $_SESSION['username'] = $_POST['username']; //set to name passed in
        }
    }
    
    if(isset($_SESSION['username'])){
        if(!isset($_SESSION['visits'])){ //if first time user
            $_SESSION['visits'] = 0; //then set to 0
        }
        else{
            $_SESSION['visits']++; //updated every time page is reloaded
        }
        //echo "Hello $_SESSION[username], you have visited this page $_SESSION[visits] times before. Click <a href = '?action=end'>here</a> to logout. Click <a href = 'http://localhost:8888/src/content2.php'>here</a> for content2.php.";
        echo "Hello $_SESSION[username], you have visited this page $_SESSION[visits] times before. Click <a href = '?action=end'>here</a> to logout. Click <a href = 'http://web.engr.oregonstate.edu/~santokis/cs290-assignment4-part1/content2.php'>here</a> for content2.php.";
    }
    
?>