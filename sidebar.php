<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="assets/css/sidebars.css" rel="stylesheet">

</head>

<body>


    <div class="flex-shrink-0 p-3 bg-white" style="width: 300px; height: 615px;">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
            <?php
                require 'pdoconn.php';
                $g=$_GET['content'];
                $t=$_GET['title'];

                $sql = $pdo->prepare("SELECT * FROM ccard,cinfo WHERE ccard.cid=cinfo.imp AND cinfo.vname!='' AND ccard.cid=$g ");
                $sql->execute();  
                
                echo '<span class="fs-5 fw-semibold">'.$t.'</span></a>';
                foreach ($sql as $res){
                   // echo $_GET['content'];
echo ' <script>
    function '.$res['vfun'].''.$res['id'].'() {
        document.getElementById("ytplayer").src =
            "https://www.youtube.com/embed/'.$res['vlink'].'?autoplay=1&origin=http://example.com";
    }
    </script>';
                    echo'

        
        <ul class="list-unstyled ps-0" >
            <li class="mb-1" onclick="'.$res['vfun'].''.$res['id'].'()" >

                <div id="home-collapse">
                    <ul class="btn-toggle-nav  list-unstyled fw-normal pb-1 small">
                        <li><img src="assets/Webp.net-resizeimage (1).png"><a href="#" id="v'.$res['id'].'"
                                class="link-dark rounded">'.$res['vname'].'</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>';}?>
    </div>




    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
    function myfun(vv) {
        console.log(vv);
        f = "https://www.youtube.com/embed/";
        s = "?autoplay=1&origin=http://example.com";

        document.getElementById('ytplayer').src =
            "https://www.youtube.com/embed/fpgaoAgz7xs?autoplay=1&origin=http://example.com";
    }
    </script> -->
    <!-- 'https://www.youtube.com/embed/+vv+?autoplay=1&origin=http://example.com'; -->
</body>

</html>