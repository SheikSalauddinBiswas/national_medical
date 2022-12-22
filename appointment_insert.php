<?php
include "admin/connection.php";

    
    $name           =$_POST['name'];
    $email          =$_POST['email'];
    $date         =$_POST['date'];
    $massage       =$_POST['massage'];
    



$sql="INSERT INTO appointment (name,email,massage,date) VALUES ('$name','$email','$massage','$date')";

$result=$db->query($sql);

if($result){

    
    
    header('Location:index.php') ;
    
    // echo 'data insert success';
   
}


else{echo"Data Inser Fail !";}



?>