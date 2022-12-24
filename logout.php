<?php
session_start();
if($_SESSION['id']){
    $_SESSION['id'] = null;
}

if($SESSION['id'] == null){
    session_destroy();
    header('Location:index.php');
}






?>