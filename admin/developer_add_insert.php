<?php
    include "connection.php";

    
    $title          = $_POST['title'];
    $description    = $_POST['description'];
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/developer/".basename($image) ;

    $sql="INSERT INTO developer (title,description,image) VALUES ('$title','$description','$image')";
    $result=$db->query($sql);
    if($result){
        // header('Location:index.php') ;
        if( move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            header('Location:about_us.php') ;
        }
        // echo 'data insert success';
    }


?>