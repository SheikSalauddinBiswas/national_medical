<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM hotline WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:contact_us.php');



?>