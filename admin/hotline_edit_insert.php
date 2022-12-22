<?php
    include "connection.php";

    $id             = $_POST['id'];
    $title          = $_POST['title'];
    $description    = $_POST['description'];
    $mobile          = $_POST['mobile']; 
    

    $sql="UPDATE hotline SET title ='$title', description ='$description' ,  mobile='$mobile' WHERE id='$id' ";
    $result=$db->query($sql);
    if($result){
        // header('Location:index.php') ;
        
        
        header('Location:contact_us.php') ;
        
        // echo 'data insert success';
    }


?>