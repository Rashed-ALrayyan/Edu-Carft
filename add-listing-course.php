<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

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
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>EduChamp | Add Course</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/assets.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
    <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

</head>

<body>

    <!-- header start -->
    <?php
include 'navbar.php';


?>



    <!--Main container start -->
    <main class="ttr-wrapper m-b30">
        <div class="container-fluid">

            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Add listing</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30" method='POST' action='courseinsert.php'>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>1. Basic info</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Course title</label>
                                        <div>
                                            <input required autocomplete="off" class="form-control" name="ct"
                                                type="text" value="">
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Course Date</label>
                                        <div>
                                            <input required autocomplete="off" class="form-control" name="cd"
                                                type="text" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="seperator"></div>
                                <div class="row">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto m-b5">
                                            <h3>2. Description</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Course Short description</label>
                                        <div>
                                            <input required autocomplete="off" name="cdes" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Course description</label>
                                        <div>
                                            <textarea required autocomplete="off" name="cdess"
                                                class="form-control"> </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>3.Course Thumnail</h3>
                                        </div>
                                    </div>

                                    <input type="radio" id="user" name="img" value="0">
                                    <label for="user"><img src="assets/card/0.jpg" width="125px" alt=""
                                            srcset=""></label>

                                    <input type="radio" id="av0" name="img" value="1">
                                    <label for="av0"><img src="assets/card/1.jpg" width="125px" alt=""
                                            srcset=""></label>

                                    <input type="radio" id="av1" name="img" value="2">
                                    <label for="av1"><img src="assets/card/0.jpg" width="125px" alt=""
                                            srcset=""></label>

                                    <input type="radio" id="av2" name="img" value="3">
                                    <label for="av2"><img src="assets/card/2.jpg" width="125px" alt=""
                                            srcset=""></label>

                                    <input type="radio" id="av3" name="img" value="4">
                                    <label for="av3"><img src="assets/card/3.jpg" width="125px" alt=""
                                            srcset=""></label>

                                    <input type="radio" id="av4" name="img" value="5">
                                    <label for="av4"><img src="assets/card/4.jpg" width="125px" alt=""
                                            srcset=""></label>

                                    <input type="radio" id="av5" name="img" value="6">
                                    <label for="av5"><img src="assets/card/5.jpg" width="125px" alt=""
                                            srcset=""></label>

                                    <input type="radio" id="av6" name="img" value="7">
                                    <label for="av6"><img src="assets/card/6.jpg" width="125px" alt=""
                                            srcset=""></label>

                                    <input type="radio" id="av7" name="img" value="8">
                                    <label for="av7"><img src="assets/card/7.jpg" width="125px" alt=""
                                            srcset=""></label>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" name="add" class="btn-secondry add-item m-r5"><i
                                                class="fa fa-fw fa-plus-circle"></i>Add</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>
    <div><?php
include 'footer.php';
?></div>


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
    <script src=' assets/vendors/scroll/scrollbar.min.js'>
    </script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/vendors/chart/chart.min.js"></script>
    <script src="assets/js/admin.js"></script>

    <script>
    // Pricing add
    function newMenuItem() {
        var newElem = $('tr.list-item').first().clone();
        newElem.find('input').val('');
        newElem.appendTo('table#item-add');
    }
    if ($("table#item-add").is('*')) {
        $('.add-item').on('click', function(e) {
            e.preventDefault();
            newMenuItem();
        });
        $(document).on("click", "#item-add .delete", function(e) {
            e.preventDefault();
            $(this).parent().parent().parent().parent().remove();
        });
    }
    </script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- <script>
    $("#add").click(function() {
        console.log("step 1");
        bt = $("#bt").val();
        bd = $("#bd").val();
        bdes = $("#bdes").val();
        img = $("#").val();
        //  bimg = $("#bimg").val();
        console.log("step 2");
        $.ajax({
            type: 'POST',
            url: 'courseinsert.php',
            data: {
                ct: bt,
                cd: bd,
                cdes: bdes
            },
            success: function(res) {
                console.log(res);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log("failure");
                alert('Something wrong occured');
            },
        });
    });
    </script> -->
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>