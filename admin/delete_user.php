<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM user WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:user.php');



?>
