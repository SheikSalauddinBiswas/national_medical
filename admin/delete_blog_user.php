<?php
include 'connection.php';

$id = $_GET['blog_id'] ;

$sql = "DELETE FROM blog_user WHERE blog_id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:blog_user.php');



?>