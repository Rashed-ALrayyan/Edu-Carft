<?php   
// session_start(); //to ensure you are using same session
// session_destroy(); //destroy the session
// header("location:index.php"); //to redirect back to "index.php" after logging out
// exit();
// session_start();

    session_start();
    //session_unset();
    session_destroy();
    //$_POST["name"]="";
  //  $_SESSION['login_user']="";
   // session_write_close();
    //setcookie(session_name(),'',0,'/');
    //session_regenerate_id(true);
header("Location: index.php");


?>