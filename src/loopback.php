<?php
    error_reporting(E_ALL);
    ini_set('display', 1);
    
    //GET request
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(empty($_GET)){
            //returns undefined if no value specified
            echo '{"Type":"GET","parameters":null}';
        }
        else{
            //print JSON object as string
            echo '{"Type":"GET","parameters":' . json_encode($_GET) . '}';
        }
    }
    //POST request
    else if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST)){
            //returns undefined if no value specified
            echo '{"Type":"POST","parameters":null}';
        }
        else{
            //print JSON object as string
            echo '{"Type":"POST","parameters":' . json_encode($_POST) . '}';
        }
    }
?>