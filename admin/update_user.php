<?php
    include "connection.php";

    $id     =$_POST['id'];
    $name   =$_POST['name'];
    $email   =$_POST['email'];
    $mobile   =$_POST['mobile'];
    $password   =$_POST['password'];
    $department   =$_POST['department'];
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/users/".basename($image) ;

    $sql="UPDATE user SET name='$name', email='$email', password='$password', mobile='$mobile', department='$department', image='$image' WHERE id='$id'";
    $result=$db->query($sql);
    if($result){
        if( move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            header('Location:user.php') ;
        }
        echo 'data insert success';
    }


?>