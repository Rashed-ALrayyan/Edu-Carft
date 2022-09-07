<?php   
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Educraft | Sign Up</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/assets.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

    <?php 
    $db = mysqli_connect('localhost', 'root', '', 'educraft');
    $username = "";
    $email = "";
    if (isset($_POST['submit'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];
    $password = $_POST['pass'];

  	$sql_u = "SELECT * FROM users WHERE user_name='$username'";
  	$sql_e = "SELECT * FROM users WHERE user_email='$email'";
	$res_u = mysqli_query($db, $sql_u);
	$res_e = mysqli_query($db, $sql_e);

    if (mysqli_num_rows($res_u) > 0)
    {
    $name_error = "Sorry... username already taken"; 	
	}
    else if(mysqli_num_rows($res_e) > 0)
    {
    $email_error = "email already registered"; 	
	}
    else
    {
    $query = "INSERT INTO users (user_name, user_email, user_pass)  VALUES ('$username', '$email', '$password')";
    $results = mysqli_query($db, $query);
    $_SESSION['login_user']= $_POST["name"];
    $_SESSION['login_user']=ucwords($_SESSION['login_user']);
    $_SESSION['level_user']="user";
    $_SESSION['level_user']=$login;
    $_SESSION['login_email']=$_POST["email"];
    $_SESSION['avatar']="user";
    $_SESSION['user_id']=$_POST["user_id"];
    header('Location:index.php');
	}
    }

// 	$host="localhost";
// $db="educraft";
// $username="";
// $password="";

// $pdo= new PDO("mysql:host=$host;dbname=$db","root","");
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// if(isset($_POST['submit'])){
// $user=$_POST['name'];
// $pass=$_POST['pass'];
// $email=$_POST['email'];

// $login=$pdo->prepare("insert into users( user_name,user_email, user_pass) VALUE('$user','$email','$pass');");
// $login->execute();

// if($login){
//     $user=$login->fetchObject();
// header('Location:index.php');
// }
// else{
//     echo "wrong";
// }
// }
?>
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
                <a href="index.php"><img src="assets/images/final_EduCraft-White.png" alt=""></a>
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head">Sign Up <span>Now</span></h2>
                        <p>Login Your Account <a href="login.php">Click here</a></p>
                    </div>
                    <form class="contact-bx" method="POST" action="" autocomplete="off">
                        <div class="row placeani">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <div class="input-group">

                                        <label>Your Name</label>
                                        <input name="name" type="text" required="" class="form-control">
                                        <?php if (isset($name_error)): ?>
                                        <span style="color:red;font-size: 0.800em;"><?php echo $name_error; ?></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Email Address</label>
                                        <input name="email" type="email" required="" class="form-control">
                                        <?php if (isset($email_error)): ?>
                                        <span style="color:red;font-size: 0.800em;"><?php echo $email_error; ?></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Password</label>
                                        <input name="pass" type="password" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 m-b30">
                                <button name="submit" type="submit" value="Submit" class="btn button-md">Sign
                                    Up</button>
                            </div>
                            <div class="col-lg-12">
                                <h6>Sign Up with Social media</h6>
                                <div class="d-flex">
                                    <a class="btn flex-fill m-r5 facebook" href="#"><i
                                            class="fa fa-facebook"></i>Facebook</a>
                                    <a class="btn flex-fill m-l5 google-plus" href="#"><i
                                            class="fa fa-google-plus"></i>Google Plus</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- External JavaScripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendors/counter/waypoints-min.js"></script>
    <script src="assets/vendors/counter/counterup.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="assets/vendors/masonry/masonry.js"></script>
    <script src="assets/vendors/masonry/filter.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>