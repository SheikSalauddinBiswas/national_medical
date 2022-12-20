<?php
    include "connection.php";

    
    $title          = $_POST['title'];
    $description    = $_POST['description'];
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/slider/".basename($image) ;

    $sql="INSERT INTO home_slider (title,description,image) VALUES ('$title','$description','$image')";
    $result=$db->query($sql);
    if($result){
        // header('Location:index.php') ;
        if( move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            header('Location:index.php') ;
        }
        // echo 'data insert success';
    }


?>