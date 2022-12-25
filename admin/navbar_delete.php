<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM navbar WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:navbar.php');



?>