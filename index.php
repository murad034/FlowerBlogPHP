<!-- <?php
    // session_start();
    // if (isset($_SESSION['email'])) {
        // header("location:admin/index.php");
    
?> -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BLOG</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Swiper Master Css -->
    <link rel="stylesheet" href="vendors/swiper-master/css/swiper.min.css">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Slicknav Master -->
    <link rel="stylesheet" href="vendors/slicknav-master/slicknav.min.css">
    <!-- Site Style Css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Modernizr Js -->
    <script src="vendors/modernizr-js/modernizr.js"></script>
</head>

<body>


    <!-- ================ Start Header Section ================ -->

        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="barnd-logo text-center ptb-40">
                            <a href="index.php" class="logo">
                                <!-- <img src="images/logo.png" class="img-fluid" alt=""> -->
                                <h1>Flower</h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start sitemenu -->
        <div class="sitemenu" id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-9 col-6 offset-lg-2">
                        <nav class="navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul id="menubar" class="navbar-nav">
                                    <li>
                                        <a href="index.php">home</a>
                                       <!--  <ul>
                                            <li><a href="index-2.html">home 2</a></li>
                                            <li><a href="index-3.html">home 3</a></li>
                                        </ul> -->
                                    </li>
                                     <li><a href="admin/index.php">Admin Panel</a></li>
                                        
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 trvel-user">
                        <ul class="d-flex justify-content-end">
                            <!-- <li class="lang">Eng <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li>Ban</li>
                                </ul>
                            </li> -->
                            <li class="blog-src-btn">
                                <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                                <ul  class="blog-secrch">
                                    <li>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search your article...">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit">SEARCH</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-option">
                                <i class="fa fa-user"></i>
                                <ul>
                                    <li><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></li>
                                    <li><a href="register.php"><i class="fa fa-pencil-square-o"></i> Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ================ Start Main Section ================ -->
    <div class="main" role="main">

        <!-- Start page title section -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="fz-26 fw-5">Flower grid</h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb text-center d-inline-flex">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Flower</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>




        <?php

    $conn=mysqli_connect("localhost","root","640087@m","e-flowerphp");
    $query = "select * from flower";
    $result = mysqli_query($conn,$query);

  


     


?>



        <!-- Start blog grid layout -->
        <div class="blog-grid-layout bg-2">
            <div class="container">
                <div class="row">

                  <?php 
                
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="single-article p-0 wrap-reverse">
                            <div class="article-post-img">
                                <img  width="300px" height="300px"  src="admin/<?php echo $row['image'] ?>" />
                            </div>
                            <div class="article-post text-left mt-35">
                                <h3><a href="#"><?php echo $row['title']; ?></a></h3>

                                <p style="word-wrap: break-word;">
                                    <?php 
                                    $string = mb_substr($row['description'], 0, 20, 'utf8').'...';
                                    echo $string;
                                   

                                    ?> 

                                </p>
                                <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="txt-clr-1 read-more">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                     <?php   } ?>
                   
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#">04</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start client section -->
        <div class="client-area client-area-3 client-area-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-lg-3 col-md-2 col-12">
                        <div class="section-title text-center">
                            <h4 class="fw-7">I Am Featured In</h4>
                            <p class="fz-16 fw-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/01.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/02.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/03.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/04.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/05.png" alt="" class="img-fluid"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="images/client/06.png" alt="" class="img-fluid"></a></div>
                </div>
            </div>
        </div>

    </div>

    <!-- ================ Start Footer Section ================ -->
    <footer class="footer txt-clr-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="index.html" class="logo">
                        <img src="images/ftr_logo.png" alt="">
                    </a>
                    <p class="mt-45">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                    <form class="subscribe-form mt-25">
                        <div class="form-group mb-0">
                            <input type="email" class="form-control email-input" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-primary subscribe-btn bg-1">subscribe</button>
                    </form>
                    <p class="fz-14 mt-30">© 2020 All Right Reserved By GhoraGhuri</p>
                </div>
                <div class="col-lg-3 ftr-link">
                    <div class="ftr-title pt-15 mb-35">
                        <h3>Quick Link</h3>
                    </div>
                    <ul>
                        <li><a href="#">About Me</a></li>
                        <li><a href="#">Destination</a></li>
                        <li><a href="#">Tour Story</a></li>
                        <li><a href="#">Hotel & Resort</a></li>
                        <li><a href="#">Transport</a></li>
                        <li><a href="#">Restaurants</a></li>
                        <li><a href="#">Local Food</a></li>
                        <li><a href="#">Famous Food</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="ftr-title pt-15 mb-35">
                        <h3>Twitter Feed</h3>
                    </div>
                    <ul class="twitter-link">
                        <li class="mb-15"><span class="mr-10"><i class="fa fa-twitter"></i></span><a href="#">https://twitter.com /envato/status/ 944202192013144064 https://twitter.com/envato/status/944202192013144064</a></li>
                        <li><span class="mr-10"><i class="fa fa-twitter"></i></span><a href="#">https://twitter.com /envato/status/ 944202192013144064 https://twitter.com/envato/status/944202192013144064</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="ftr-title pt-15 mb-35">
                        <h3>Contact Information</h3>
                    </div>
                    <ul class="ftr-contact">
                        <li><span>Location:</span> W Jackson Blvd, Chicago United States</li>
                        <li><span>Email:</span> exampleemail.com</li>
                        <li><span>Phone:</span> (123) 45678910</li>
                    </ul>
                    <div class="ftr-social">
                        <div class="ftr-title pt-15 mb-15">
                            <h3 class="fz-18">Social Prifile</h3>
                        </div>
                        <ul class="d-flex">
                            <li><a href="#" class="icon-fb"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icon-twit"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icon-glg"><i class="fa fa-google"></i></a></li>
                            <li><a href="#" class="icon-ldn"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="icon-utb"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
    </footer>

    <!-- ================ Start Jquery Plugins ================ -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Carousel Js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Swiper Master Js -->
    <script src="vendors/swiper-master/js/swiper.min.js"></script>
    <!-- Slicknav Master -->
    <script src="vendors/slicknav-master/jquery.slicknav.min.js"></script>
    <!-- magnific popup -->
    <script src="js/magnific-popup.min.js"></script>
    <!-- counterup -->
    <script src="vendors/counterup/waypoints.min.js"></script>
    <script src="vendors/counterup/counterup.min.js"></script>
    <!-- scroll up -->
    <script src="js/scrollup.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>