<?php
    include "connection.php";

    
    $name          = $_POST['name'];
    $degree          = $_POST['degree'];
    $description    = $_POST['description'];
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/doctor/".basename($image) ;

    $sql="INSERT INTO doctor (name,description,degree,image) VALUES ('$name','$description','$degree','$image')";
    $result=$db->query($sql);
    if($result){
        // header('Location:index.php') ;
        if( move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            header('Location:doctor.php') ;
        }
        // echo 'data insert success';
    }


?>