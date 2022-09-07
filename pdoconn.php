<?php 
$host="localhost";
$db="educraft";
$pdo= new PDO("mysql:host=$host;dbname=$db","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>