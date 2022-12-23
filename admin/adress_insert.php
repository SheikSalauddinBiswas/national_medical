<?php
    include "connection.php";

    $adress         =$_POST['adress'];
    
    $mobile         =$_POST['mobile'];
    $email  =$_POST['email'];

    $sql="INSERT INTO adress (adress,mobile,email) VALUES ('$adress','$mobile','$email')";
    $result=$db->query($sql);
    
    if($result){
        header('Location:contact_us.php') ;
    }




?>