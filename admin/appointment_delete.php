<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM appointment WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:appointment.php');



?>