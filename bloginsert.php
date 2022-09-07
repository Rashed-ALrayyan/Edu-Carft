<?php


require 'pdoconn.php';

$bt=$_POST['bt'];
$bd=$_POST['bd'];
$bdes=$_POST['bdes'];
$img=$_POST['img'];
$bdess=$_POST['bdess'];




$x="INSERT INTO bcard (bt, bd, bdes ,bimg,bdess)  VALUES ('$bt', '$bd', '$bdes','$img','$bdess')";
$pdo->exec($x);
header ('location:blogs.php');










?>