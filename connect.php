<?php
    if (isSet ($_POST['valider'])){
        $fullname = $_POST['username'];
        $email = $_POST['Email'];
        $phone = $_POST['PhoneNumber'];
        $location = $_POST['location'];
        $image = $_POST['profile_image'];
        $password = $_POST['password'];
    }
        $servername="localhost";
        $username="root";
        $password="";
        $db="sm";
        $conn= new mysqli($servername,$username, $password,$db);
        if($conn->connect_error){
            die('erreur :' .$conn->connect_error);
        }
        echo("done");

        $sql= "INSERT INTO users(name,mail,phone,location,pdp,password)
        VALUES('$fullname','$email','$phone','$location','$image','$password')";
        if (mysqli_query($conn, $sql)){
            echo("enregistrement effectué");
        }
        else{
            echo("errur :" .$sql."<br>".
            mysqli_error($conn));
        }

        mysqli_close($conn);
            

?>