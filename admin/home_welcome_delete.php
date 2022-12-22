<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM home_welcome WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:index.php');



?>