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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <!-- PAGE TITLE HERE ============================================= -->
    <title>EduChamp | Profile</title>

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

</head>



<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>

        <header class="header rs-nav">
            <div>
                <?php include 'navbar.php';
                require 'pdoconn.php';
$n=$_SESSION['login_user'];
$STH=$pdo->prepare( "select user_email from users WHERE user_name='$n'" );
$STH -> execute();
$result = $STH -> fetchAll();
foreach( $result as $row ) {
        $_SESSION['user_email']=$row["user_email"];
}
$av="assets/avatar/".$_SESSION['avatar'].".png";
                ?>
            </div>
        </header>
        <!-- header END ==== -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Profile</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <!-- inner page banner END -->

            <div class="content-block">
                <!-- About Us -->
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                                <div class="profile-bx text-center">
                                    <div class="user-profile-thumb">
                                        <img src="<?php echo $av;?>" alt="" />
                                    </div>
                                    <div class="profile-info">
                                        <h4><?php echo $_SESSION['login_user'];?></h4>
                                        <span><?php echo $_SESSION['user_email'] ?></span>
                                    </div>
                                    <div class="profile-social">
                                        <ul class="list-inline m-a0">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="profile-tabnav">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#courses"><i
                                                        class="ti-book"></i>Courses</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#edit-profile"><i
                                                        class="ti-pencil-alt"></i>Edit Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#change-password"><i
                                                        class="ti-lock"></i>Change Password</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                                <div class="profile-content-bx">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="courses">
                                            <div class="profile-head">
                                                <h3>My Courses</h3>
                                                <div class="feature-filters style1 ml-auto">
                                                    <ul class="filters" data-toggle="buttons">
                                                        <li data-filter="pending" class="btn">
                                                            <input type="radio">
                                                            <a href="#"><span></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="courses-filter">
                                                <div class="clearfix">
                                                    <ul id="masonry" class="ttr-gallery-listing magnific-image row">

                                                        <?php require 'pdoconn.php';
                                                        $x=$_SESSION['user_id'];
                                                                $sql = $pdo->prepare("SELECT * FROM users ,cprofile ,ccard WHERE users.user_id=$x AND cprofile.user_id=$x AND ccard.cid=cprofile.cid");
    $sql->execute();

    foreach($sql as $res){
                                                                echo ' <li
                                                            class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
                                                            <div class="cours-bx">
                                                                <div class="action-box">
                                                                    <img src="assets/card/'.$res['img'].'.jpg" alt="">
                                                                    <a href="#" class="btn">Read More</a>
                                                                </div>
                                                                <div class="info-bx text-center">
                                                                    <h5><a href="course.php?content='.$res['cid'].' &title='.$res['ct'].'">'.$res['ct'].'</a></h5>
                                                                    <span>Programming</span>
                                                                </div>
                                                                <div class="cours-more-info">
                                                                    <div class="review">
                                                                        <span>Date Published</span>
                                                                        <div style=font-size:12px;>'.$res['cd'].'</div>
                                                                    </div>
                                                                    <div class="price">
                                                                        
                                                                        <h5>FREE</h5>
                                                                    </div>
                                                                </div>';}?>
                                                </div>
                                                </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- =================================Edit Profile================================ -->
                                    <div class="tab-pane" id="edit-profile">
                                        <div class="profile-head">
                                            <h3>Edit Profile</h3>
                                        </div>
                                        <form class="edit-profile" method="post" action="changeuser.php">
                                            <div class="">
                                                <div class="form-group row">
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                        <h3>1. Personal Details</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">
                                                        Name</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input name="new_user" class="form-control" type="text"
                                                            value="<?php echo $_SESSION['login_user'];?>">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">
                                                        Email</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input name="new_email" class="form-control" type="text"
                                                            value="<?php echo $_SESSION['user_email'];?>">
                                                    </div>

                                                </div>
                                                <input type="radio" id="user" name="useravatar" value="user">
                                                <label for="user"><img src="assets/avatar/user.png" width="50PX" alt=""
                                                        srcset=""></label>
                                                <input type="radio" id="av0" name="useravatar" value="0">
                                                <label for="av0"><img src="assets/avatar/0.png" width="50PX" alt=""
                                                        srcset=""></label>
                                                <input type="radio" id="av1" name="useravatar" value="1">
                                                <label for="av1"><img src="assets/avatar/1.png" width="50PX" alt=""
                                                        srcset=""></label>

                                                <input type="radio" id="av2" name="useravatar" value="2">
                                                <label for="av2"><img src="assets/avatar/2.png" width="50PX" alt=""
                                                        srcset=""></label>

                                                <input type="radio" id="av3" name="useravatar" value="3">
                                                <label for="av3"><img src="assets/avatar/3.png" width="50PX" alt=""
                                                        srcset=""></label>

                                                <input type="radio" id="av4" name="useravatar" value="4">
                                                <label for="av4"><img src="assets/avatar/4.png" width="50PX" alt=""
                                                        srcset=""></label>

                                                <input type="radio" id="av5" name="useravatar" value="5">
                                                <label for="av5"><img src="assets/avatar/5.png" width="50PX" alt=""
                                                        srcset=""></label>


                                                <div class="seperator"></div>

                                                <div
                                                    class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                        <h3 class="m-form__section">3. Social Links</h3>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Facebook</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text"
                                                            value="www.facebook.com">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Twitter</label>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <input class="form-control" type="text" value="www.twitter.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-3 col-md-3 col-lg-2">
                                                        </div>
                                                        <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                            <button type="submit" name="change" class="btn">Save
                                                                changes</button>
                                                            <button type="reset" class="btn-secondry">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="change-password">
                                        <div class="profile-head">
                                            <h3>Change Password</h3>
                                        </div>
                                        <form method="POST" action="change-password.php" class="edit-profile">
                                            <div class="">
                                                <div class="form-group row">
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-9 ml-auto">
                                                        <h3>Password</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Current
                                                        Password</label>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                        <input name="old_pass" class="form-control" type="password"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">New
                                                        Password</label>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                        <input name="new_pass" class="form-control" type="password"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Re
                                                        Type New Password</label>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                        <input name="re_pass" class="form-control" type="password"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                                </div>
                                                <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                    <button type="submit" name="re_password" class="btn">Save
                                                        changes</button>
                                                    <button type="reset" class="btn-secondry">Cancel</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    <!-- Footer ==== -->
    <?php include 'footer.php';?>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
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

</body>

</html>