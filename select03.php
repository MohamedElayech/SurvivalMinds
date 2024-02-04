<?php
$servername="localhost";
    $username="root";
    $password="";
    $db="sm";
    $conn= new mysqli($servername,$username, $password,$db);
    if(!($conn)){
        die('erreur :');
    }
    
?>
