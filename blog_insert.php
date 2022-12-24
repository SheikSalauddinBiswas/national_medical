<?php
include "include/connection.php";

    
    $tag           =$_POST['tag'];
    $name           =$_POST['name'];
    $date          = date('Y-m-d',strtotime($_POST['date']));
    $title         =$_POST['title'];
    $description       =$_POST['description'];
   
    $image          = $_FILES['image']['name'] ; 
    $target         = "admin/images/blog/".basename($image) ;



$sql="INSERT INTO blog (tag,name,date,title,description,image) VALUES ('$tag','$name','$date','$title','$description','$image')";

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