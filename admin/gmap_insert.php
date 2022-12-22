<?php
    include "connection.php";

    
    $gurl          = $_POST['gurl'];


    $sql="INSERT INTO map (gurl) VALUES ('$gurl')";
    $result=$db->query($sql);
    if($result){
        header('Location:contact_us.php') ;
    }



?>