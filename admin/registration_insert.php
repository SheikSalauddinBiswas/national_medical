<?php
include "connection.php";

    
    $name           =$_POST['name'];
    $email          =$_POST['email'];
    $mobile         =$_POST['mobile'];
    $password       =$_POST['password'];
    $department     =$_POST['department'];
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/users/".basename($image) ;



$sql="INSERT INTO user(name,email,mobile,password,department,image) VALUES ('$name','$email','$mobile','$password','$department','$image')";

$result=$db->query($sql);

if($result){

    if( move_uploaded_file($_FILES['image']['tmp_name'] , $target))
    {
        header('Location:user.php') ;
    }
    echo 'data insert success';
   
}


else{echo"Data Inser Fail !";}



?>