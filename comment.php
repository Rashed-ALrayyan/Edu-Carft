<?Php
session_start();
require 'pdoconn.php';
$username="";
$password="";
$comm=$_POST['comm'];
$name=$_SESSION['login_user'];
$img=$_SESSION['avatar'];


$cmt=$pdo->prepare("INSERT into cmnt (comment,name,img) values('$comm','$name','$img')");
$cmt->execute();
header ('location:index.php');
?>