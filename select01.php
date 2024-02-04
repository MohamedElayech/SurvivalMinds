<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="sm";
    $conn= new mysqli($servername,$username, $password,$db);
    if($conn->connect_error){
        die('erreur :' .$conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];


$sql = "SELECT location FROM users WHERE name = '$username' OR password = '$password'";
$result = $conn->query($sql);


$conn->close();

?>
