<?php
    include "connection.php";

    
    $title          = $_POST['title'];
    $description    = $_POST['description'];
    $mobile          = $_POST['mobile']; 
    

    $sql="INSERT INTO hotline (title,description,mobile) VALUES ('$title','$description','$mobile')";
    $result=$db->query($sql);
    if($result){
        // header('Location:index.php') ;
        
        
        header('Location:contact_us.php') ;
        
        // echo 'data insert success';
    }


?>