<?php
session_start();

require 'pdoconn.php';

$id=$_SESSION['user_id'];
$cid=$_GET['id'];

$x="INSERT INTO cprofile (user_id,cid)  VALUES ('$id','$cid')";
$r=$pdo->exec($x);
if ($r){
   header ('location:profile.php'); 
}
else{
    echo "<script>alert('This course is already Added')</script>";
}











?>