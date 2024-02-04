<?php

        $title = $_POST['title'];
        $image = $_POST['image'];
        $location = $_POST['location'];
        $dis = $_POST['discription'];
    
        $servername="localhost";
        $username="root";
        $password="";
        $db="sm";
        $conn= new mysqli($servername,$username, $password,$db);
        if($conn->connect_error){
            die('erreur :' .$conn->connect_error);
        }
        echo("done");

        $sql= "INSERT INTO news(title,image,location,discription)
        VALUES('$title','$image','$location','$dis')";
        if (mysqli_query($conn, $sql)){
            echo("enregistrement effectué");
        }
        else{
            echo("errur :" .$sql."<br>".
            mysqli_error($conn));
        }
        header("Location: news.html");

        mysqli_close($conn);
            

?>