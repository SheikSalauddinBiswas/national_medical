<?php
    include "connection.php";

    $id         =$_POST['id'];
    $h4         =$_POST['head1'];
    $h1         =$_POST['head2'];
    $paragraph  =$_POST['paragraph'];

    $sql="UPDATE home_banner_text SET h4='$h4', h1='$h1', paragraph='$paragraph' WHERE id='$id'";
    $result=$db->query($sql);
    
    if($result){
        header('Location:index.php') ;
    }




?>