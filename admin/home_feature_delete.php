<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM home_feature WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:index.php');



?>