<?php


require 'pdoconn.php';

$bt=$_POST['bt'];
$bl=$_POST['bl'];
$bd=$_POST['bd'];



$x="INSERT INTO book (bot, bod, bol )  VALUES ('$bt', '$bd', '$bl')";
$pdo->exec($x);
header ('location:book.php');










?>