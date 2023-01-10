<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Image-Caption-Hover-Effect-2.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Dark-mode-Index-Table-with-Search-Filters.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/x-editable.css">
</head>
<?php  require('./session.php');?>
<body id="page-top"><a class="menu-toggle rounded" href="#"><i class="fa fa-bars" style="font-size: 17px;"></i></a>
    <nav class="navbar navbar-light navbar-expand" id="sidebar-wrapper">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler d-none" data-bs-target="#"></button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav sidebar-nav" id="sidebar-nav">
                    <li class="nav-item sidebar-brand"><a class="nav-link active js-scroll-trigger" href="#page-top">Brand</a></li>
                    <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="#page-top">Home</a></li>
                    <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="status.php">status of application</a></li>
                   <?php if(isset($_SESSION['user'])){
                    echo '<li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>';

                   } ?>
                </ul>
            </div>
        </div>
    </nav>
    <header class="d-flex masthead" style="background-image:url('assets/img/bg-masthead.jpg');">
        <div class="container my-auto text-center">
            <h1 class="mb-1" style="font-size: 50px;">@Dopt-US!</h1>
            <h3 class="mb-5"><em style="font-size: 14.4px;">All Child adoption process under a single site</em></h3><a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="#about">Sign-up Today!</a>
            <div class="overlay"></div>
        </div>  
    </header>
    <section id="about" class="content-section bg-light">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2>You have taken important decision to adopt a<br>child to enable you to become parents.&nbsp;&nbsp;</h2>
                    <p class="lead mb-5"><span style="text-align: justify;"><br><strong>The following will help both the social</strong><br><strong>worker and you to better understand the process of adoption</strong><br><br></span></p><a class="btn btn-dark btn-xl js-scroll-trigger" role="button" href="#services">Get to know the process!</a>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="content-section bg-primary text-white text-center">
        <div class="container">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0">Process</h3>
                <h2 class="mb-5">You need to know!</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0"><span class="mx-auto service-icon rounded-circle mb-3"><i class="icon-note"></i></span>
                    <h4><strong>Apply!</strong></h4>
                    <p class="mb-0 text-faded">Apply for the adoption&nbsp;</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0"><span class="mx-auto service-icon rounded-circle mb-3"><i class="icon-user-following"></i></span>
                    <h4><strong>verification</strong></h4>
                    <p class="mb-0 text-faded">Do all the needfulls @ cara.nic.in</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0"><span class="mx-auto service-icon rounded-circle mb-3"><i class="icon-wallet"></i></span>
                    <h4><strong>Payment</strong></h4>
                    <p class="mb-0 text-faded"><span>Pay the required amount</span></p>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0"><span class="mx-auto service-icon rounded-circle mb-3"><i class="icon-badge"></i></span>
                    <h4><strong>@dopt</strong></h4>
                    <p class="mb-0 text-faded">I mustache you a question...</p>
                </div>
            </div>
        </div>
    </section>
    <section class="callout" style="background:linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.1) 100%), url(&quot;assets/img/bg-callout.jpg&quot;);background-position:center center;background-repeat:no-repeat;background-size:cover;">
        <div class="container text-center">
            <h2 class="mx-auto mb-5"><span>Begin&nbsp;</span><em>your</em><span><br>journey towards @doption!<br></span></h2><a class="btn btn-primary btn-xl" role="button" href="untitled.php">@dopt Now!!</a>
        </div>
    </section>
    <section id="portfolio" class="content-section">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">@dopt-us</h3>
                <h2 class="mb-5">Give us a permanant family!</h2>
            </div>
        </div>
    </section>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-6 mb-lg-0" style="padding: 10px;">
                <div class="hover hover-2 rounded" style="color: #ffffff;"><img src="assets/img/kenny-eliason-uaQpinemVoo-unsplash.jpg" alt="image">
                    <div class="hover-overlay"></div>
                    <div class="hover-1-content px-5 py-4"></div>
                </div>
            </div>
            <div class="col-md-6 mb-lg-0" style="padding: 10px;">
                <div class="hover hover-2 rounded" style="color: #ffffff;"><img src="assets/img/austin-lowman-cnq4x6RGQZY-unsplash.jpg" alt="image">
                    <div class="hover-overlay"></div>
                    <div class="hover-1-content px-5 py-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-6 mb-lg-0" style="padding: 10px;">
                <div class="hover hover-2 rounded" style="color: #ffffff;"><img src="assets/img/kelly-sikkema-FqqaJI9OxMI-unsplash.jpg" alt="image">
                    <div class="hover-overlay"></div>
                    <div class="hover-1-content px-5 py-4"></div>
                </div>
            </div>
            <div class="col-md-6 mb-lg-0" style="padding: 10px;">
                <div class="hover hover-2 rounded" style="color: #ffffff;"><img src="assets/img/lauren-lulu-taylor-vppMdk_GMo4-unsplash.jpg" alt="image">
                    <div class="hover-overlay"></div>
                    <div class="hover-1-content px-5 py-4"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="content-section bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">You can add some links here.. if you want!!</h2><a class="btn btn-light btn-xl me-4" role="button" href="#">Click Me!</a><a class="btn btn-dark btn-xl me-4" role="button" href="#">Look at Me</a>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">&nbsp;<a class="link-light social-link rounded-circle" href="#"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item">&nbsp;<a class="link-light social-link rounded-circle" href="#"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item">&nbsp;<a class="link-light social-link rounded-circle" href="#"><i class="icon-social-github"></i></a></li>
            </ul>
            <p class="text-muted mb-0 small">Copyright &nbsp;© SUJAY_ADKESAR 2022</p>
        </div><a class="js-scroll-trigger scroll-to-top rounded" href="#page-top"><i class="fa fa-angle-up"></i></a>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script src="assets/js/stylish-portfolio.js"></script>
    <script src="assets/js/x-editable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Dark-mode-Index-Table-with-Search-Filters-1.js"></script>
    <script src="assets/js/Ludens---1-Dark-mode-Index-Table-with-Search-Filters-2.js"></script>
    <script src="assets/js/Ludens---1-Dark-mode-Index-Table-with-Search-Filters.js"></script>
</body>
<?php
   require('session.php'); 
    ?>
</html>