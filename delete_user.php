<?php

require 'pdoconn.php';

$d=$_POST['deleteuser'];



$x="DELETE FROM users WHERE user_id=$d";
$pdo->exec($x);

header ('location:mng.php');









?>