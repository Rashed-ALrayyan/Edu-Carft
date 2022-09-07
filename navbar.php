<?php session_start(); 
$GLOBALS['admin']=false;
    if(isset( $_SESSION['login_user']))
    {
        
       if($_SESSION['level_user']=="admin"){
           $admin=true;

       }
        
        echo"<style type='text/css'>#loger{display:none;}</style>";
    }
    else
    {
        echo"<style type='text/css'>#logout{display:none;}</style>";
    }
?>
<!-- Bootstrap core CSS -->
<!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>


<script src="assets/js/sidebars.js"></script>

<link rel="stylesheet" type="text/css" href="assets/css/sidebars.css">

<div class=" navbar-expand-lg">
    <div class="menu-bar clearfix">
        <div class="container clearfix">
            <!-- Header Logo ==== -->
            <div class="menu-logo">
                <a href="index.php"><img src="assets/images/final_EduCraft-White.png" alt=""></a>
            </div>
            <!-- Mobile Nav Button ==== -->
            <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse"
                data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Author Nav ==== -->
            <div class="secondary-menu">
                <div class="secondary-inner">
                    <ul>
                        <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>

                        <div class="topbar-right" id="loger">
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ul>
                        </div>

                    </ul>
                </div>

                <div id="logout" class="topbar-right">
                    <!-- <ul>
                        <li><a value="logout" href="s_destroy.php">Logout</a></li>
                    </ul> -->
                    <div class="dropdown">
                        <a href="#" class=" align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo "assets/avatar/".$_SESSION['avatar'].".png";
?>" alt="" width="35" height="35" class="rounded-circle me-3">
                            <strong><?php echo $_SESSION['login_user'];?></strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

                            <li><a style="color:grey; font-size: 14px;font-weight: bold;font-family:rubik;"
                                    class="dropdown-item" href="profile.php">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a style="color:grey;   font-size: 14px; font-weight: bold; font-family:rubik;"
                                    class="dropdown-item" href="s_destroy.php">Sign out</a></li>
                        </ul>
                    </div>

                </div>


            </div>

            <!-- Navigation Menu ==== -->
            <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                <div class="menu-logo">
                    <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home </a></li>




                    <li><a href="courses.php">Our Courses</a></li>
                    <li><a href="blogs.php">Blogs</a></li>
                    <li><a href="book.php">Books</a></li>

                    <?php if ($admin){
    echo '<li class="nav-dashboard"><a href="javascript:;">Dashboard <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            
                            <li><a href="add-listing-course.php">Add Course</a></li>
                            <li><a href="add-listing-blogs.php">Add Blog</a></li>
                            <li><a href="add-listing-book.php">Add Books</a></li>
                            <li><a href="mng.php">Users Managemet</a></li>
                            
                            
                        </ul>
                    </li>';
}?>

                </ul>
                <div class="nav-social-link">
                    <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                    <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                    <a href="javascript:;"><i class="fa fa-linkedin"></i></a>

                </div>
            </div>
            <!-- Navigation Menu END ==== -->
        </div>
    </div>
</div>


<!-- <script>
$('#logout').click(function() {
    logout = $("#logout").val();
    //ps = $("#pass").val();
    $.ajax({
        type: 'POST',
        url: 's_destroy.php',
        data: {
            logout: logout,

        },
        success: function(res) {

        },
        error: function(xhr, ajaxOptions, thrownErro) {
            alert('Something wronge occured')
        },
    });
});
</script> -->