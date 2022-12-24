<?php
session_start();
if($_SESSION['blog_id']){
    $_SESSION['blog_id'] = null;
}

if($SESSION['blog_id'] == null){
    session_destroy();
    header('Location:index.php');
}






?>