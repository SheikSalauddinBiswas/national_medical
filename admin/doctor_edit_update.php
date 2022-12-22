<?php
    include "connection.php";

    $id         =$_POST['id'];
    $name          = $_POST['name'];
    $degree          = $_POST['degree'];
    $description    = $_POST['description'];
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/doctor/".basename($image) ;

    $sql="UPDATE doctor SET name='$name', description='$description', degree='$degree', image='$image' WHERE id='$id'";
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