<?php

require 'pdoconn.php';

$u=$_POST['updateuser'];
$n=$_POST['name'];
$e=$_POST['email'];



$x="UPDATE users set user_name='$n',user_email='$e' WHERE user_id=$u";
$pdo->exec($x);

header ('location:mng.php');









?>