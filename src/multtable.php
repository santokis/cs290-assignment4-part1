<!DOCTYPE HTML>
<html>
<head>
<title>Multtable.php</title>
</head>
<body>
<?php
    
    error_reporting(E_ALL);
    ini_set('display', 1);
    
    if($_GET["min-multiplicand"] > $_GET["max-multiplicand"]){
        echo 'Minimum multiplicand larger than maximum.<br>';
    }
    
    if($_GET["min-multiplier"] > $_GET["max-multiplier"]){
        echo 'Minimum multiplier larger than maximum.<br>';
    }
    
    //check each value to ensure an integer is entered
    foreach($_GET as $key => $value){
        if(!is_numeric($value)){
            echo 'Invalid input.' . " $key " . 'is not an integer.<br>';
        }
    }
    
    //check each key to ensure a value is entered
    foreach($_GET as $key){
        if($key == "min-multiplicand"){
            if(empty($key)){
                echo 'Missing parameter min-multiplicand.<br>';
            }
        }
        else if($key == "max-multiplicand"){
            if(empty($key)){
                echo 'Missing parameter max-multiplicand.<br>';
            }
        }
        else if($key == "min-multiplier"){
            if(empty($key)){
                echo 'Missing parameter min-multiplier.<br>';
            }
        }
        else if($key == "max-multiplier"){
            if(empty($key)){
                echo 'Missing parameter max-multiplier.<br>';
            }
        }
    }
    
    echo '<table border = "1">';
    echo '<thead>';
    echo '<th></th>'; //upper left cell empty
    
    for($i = $_GET['min-multiplier']; $i <= $_GET['max-multiplier']; $i++){
        echo '<th>' . $i . '</th>';
    }
    
    echo '</thead>';
    
    for($j = $_GET['min-multiplicand']; $j <= $_GET['max-multiplicand']; $j++){
        echo '<tr>';
        echo '<th>' . $j . '</th>';
        for($k = $_GET['min-multiplier']; $k <= $_GET['max-multiplier']; $k++){
            echo '<td>' . ($k * $j) . '</td>';
        }
    }
    
    echo '</table>';

?>
</body>
</html>