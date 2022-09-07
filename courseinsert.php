<?php

require 'pdoconn.php';

$ct=$_POST['ct'];
$cd=$_POST['cd'];
$cdes=$_POST['cdes'];
$img=$_POST['img'];



$x="INSERT INTO ccard (ct, cd, cdes,img)  VALUES ('$ct', '$cd', '$cdes','$img')";
$pdo->exec($x);

header ('location:add-video.php');









?>