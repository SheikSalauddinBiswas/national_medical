<?php
    include "connection.php";

    
    $name          = $_POST['name'];
    $link    = $_POST['link'];
    
    

    $sql="INSERT INTO navbar (name,link) VALUES ('$name','$link')";
    $result=$db->query($sql);
    if($result){
        // header('Location:index.php') ;
        
        
        header('Location:navbar.php') ;
        
        // echo 'data insert success';
    }


?>