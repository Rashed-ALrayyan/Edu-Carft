<?php


require 'pdoconn.php';

$stmt = $pdo->query("SELECT * FROM ccard ORDER BY cid DESC LIMIT 1");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$n=0;
foreach ($rows as $r){
$n=$r['cid'];
echo $r['cid'];

}



for($a=1;$a<=6;$a++){
$vt=$_POST['vt'.$a];
$vl=$_POST['vl'.$a];





$x="INSERT INTO cinfo (vname, vlink,imp)  VALUES ('$vt', '$vl','$n')";
$pdo->exec($x);}
header ('location:courses.php');










?>