<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM blog WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:blog.php');



?>