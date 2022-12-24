<?php
include "include/connection.php";

    
    $name           =$_POST['name'];
    $email          =$_POST['email'];
    $mobile         =$_POST['mobile'];
    $password       =$_POST['password'];
   
    $image          = $_FILES['image']['name'] ; 
    $target         = "admin/images/blog-user/".basename($image) ;



$sql="INSERT INTO blog_user(name,email,mobile,password,image) VALUES ('$name','$email','$mobile','$password','$image')";

$result=$db->query($sql);

if($result){

    if( move_uploaded_file($_FILES['image']['tmp_name'] , $target))
    {
        header('Location:blog.php') ;
    }
    echo 'data insert success';
   
}


else{echo"Data Inser Fail !";}



?>