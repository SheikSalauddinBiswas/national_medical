<?php
    include "connection.php";

    $id             = $_POST['id'];
    $title          = $_POST['title'];
    $description    = $_POST['description'];
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/slider/".basename($image) ;

    $sql="UPDATE home_slider SET title ='$title', description ='$description' ,  image='$image' WHERE id='$id' ";
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