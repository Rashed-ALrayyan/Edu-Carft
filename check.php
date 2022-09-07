<?php

$host     = "localhost";//Ip of database, in this case my host machine    
$user     = "root";	//Username to use
$pass     = "";//Password for that user
$dbname   = "educraft";//Name of the database

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
echo $e->getMessage();                         
}

echo $e->getMessage();                         





?>