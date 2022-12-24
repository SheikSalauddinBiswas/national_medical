<?php
include "include/connection.php";

$email      =$_POST['email'];
$password   =$_POST['password'];

$sql = "SELECT * FROM blog_user WHERE email='$email' AND password='$password'";
$result =$db->query($sql);
$userdata   = $result->fetch_assoc();

if($userdata){
    session_start();
    $_SESSION['blog_id'] = $userdata['blog_id'];
}

if(mysqli_num_rows($result)){
    header('Location:blog.php');
}
else{
    echo "You are not a Registared member";
}

?>
