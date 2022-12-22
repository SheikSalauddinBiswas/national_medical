<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM doctor WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:doctor.php');



?>