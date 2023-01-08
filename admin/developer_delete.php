<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM developer WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:about_us.php');



?>