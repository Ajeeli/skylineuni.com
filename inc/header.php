<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, fit-to-shrink=no, user-scalable=no">
    <meta name="description" content="Skyline Online University SOU is a high standard university that allows people from all around the world to educate themselves at near zero costs, it is organized by high level academics and professors">
    <meta name="author" content="Skyline Technologies W.L.L">
    <meta name="keywords" content="skytechbh, skyline, skyline technologies, bahrain, worldwide, university, online university, cheap university, good university">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- CSS Links -->
    <link type="text/css" rel="stylesheet" href="/css/style.css">
    <link type="text/css" rel="stylesheet" href="/css/programs-images">

    <title><?php echo $title; ?></title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light top-menu bg-light">
            <img src="/img/logo-overlay.png" class="logo-overlay">
            <a class="navbar-brand" href="/index.php"><img src="/img/logo.png"></a>

            <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item top-menu-nav-item">
                        <a class="nav-link" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item top-menu-nav-item">
                        <a class="nav-link" href="/pages/about/faq.php">FAQs</a>
                    </li>
                    <li class="nav-item top-menu-nav-item">
                        <a class="nav-link" href="/pages/contact/index.php">Contact us</a>
                    </li>
                    <li class="nav-item top-menu-nav-item pr-5">
                        <a class="nav-link" href="/system/index.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End of Navbar -->

        <!-- Mega Menu -->
        <nav class="navbar megamenu-navbar navbar-expand-lg navbar-dark mega-menu">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Degree Programs</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <a class="dropdown-item megamenu-links" href="/pages/programs/all_programs.php">
                                        <h5 class="mega-menu-text">Colleges</h5>
                                    </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/programs/arts.php">Arts</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/programs/business_administration.php">Business Administration </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/programs/information_technology.php">Information Technology</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/programs/engineering.php">Engineering</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/programs/law.php">Law</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/programs/sciences.php">Sciences</a>

                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <a class="dropdown-item megamenu-links" href="/pages/programs/degree_levels.php">
                                        <h5 class="mega-menu-text">Degree Levels</h5>
                                    </a>

                                    <a class="dropdown-item megamenu-links" href="/pages/bachelors.php">Bachelors</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/masters.php">Masters Degrees</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/phd.php">PhD Degrees</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/diplomas.php">Diplomas</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/programs/all_programs.php">Bachelors</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">Masters Degrees</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">PhD Degrees</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">Diplomas</a>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">
                                        <h5 class="mega-menu-text">Certificates</h5>
                                    </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">Skyline Certificates</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">Associate Certificates</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">International Certificates</a>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">
                                        <h5 class="mega-menu-text">Courses</h5>
                                    </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">Leadership Courses</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">Self Development Courses</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">NLP Courses</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/comingsoon.html">Language Courses</a>
                                </div>
                            </div>

                            <a class="btn col-2" type="button" style="background: rgb(20,90,120); color:white; border: 1px solid white; position: absolute; bottom:1rem; right: 1rem;" role="button" href="/pages/apply.php"> APPLY </a>
                            <a class="btn col-2" type="button" style="background: rgba(0,1,154,0.5); color:white; border: 1px solid white; position: absolute; bottom:1rem; right: 1rem;" role="button" href="/pages/apply.php"> APPLY </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Become a Student</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown02">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4">
                                    <h5 class="mega-menu-text">New Students</h5>
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100 megamenuImg" src="/img/studentMegamenu.jpg" alt="Student">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 megamenuImg" src="/img/studentMegamenu2.jpg" alt="Student">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 megamenuImg" src="/img/studentMegamenu3.jpg" alt="Student">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <a class="dropdown-item megamenu-links" href="/pages/student/student.php">
                                        <h5 class="mega-menu-text">Become a Student</h5>
                                    </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/student/requirements.php">Requirements</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/apply.php">Online Application</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/student/approval.php">Approval Process</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/student/fees.php">Fees &amp; Funding </a>
                                </div>
                            </div>
                            <a class="btn col-2" type="button" style="background: rgb(20,90,120); color:white; border: 1px solid white; position: absolute; bottom:1rem; right: 1rem;" role="button" href="/pages/apply.php"> APPLY </a>
                            <a class="btn col-2" type="button" style="background: rgba(0,1,154,0.5); color:white; border: 1px solid white; position: absolute; bottom:1rem; right: 1rem;" role="button" href="/pages/apply.php"> APPLY </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Support Center</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown02">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4">
                                    <h5 class="mega-menu-text">Supporters</h5>
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100 megamenuImg" src="/img/supportMegamenu.jpg" alt="Support">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 megamenuImg" src="/img/supportMegamenu2.jpg" alt="Support">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 megamenuImg" src="/img/supportMegamenu3.jpg" alt="Support">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <a class="dropdown-item megamenu-links" href="/pages/support/support_center.php">
                                        <h5 class="mega-menu-text">Support Center</h5>
                                    </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/support/jobs.php">Jobs At Skyline</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/support/graduates_support.php">Graduate Support</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/support/international_network_linking.php">International Network Linking</a>
                                </div>
                            </div>
                            <a class="btn col-2" type="button" style="background: rgb(20,90,120); color:white; border: 1px solid white; position: absolute; bottom:1rem; right: 1rem;" role="button" href="/pages/apply.php"> APPLY </a>
                                <a class="btn col-2" type="button" style="background: rgba(0,1,154,0.5); color:white; border: 1px solid white; position: absolute; bottom:1rem; right: 1rem;" role="button" href="/pages/apply.php"> APPLY </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="row">

                                <div class="col-sm-6 col-lg-3">
                                    <!--<a class="dropdown-item megamenu-links" href="/pages/about/about_skyline.php'; ?>"><h5 class = "mega-menu-text">About Skyline</h5></a>-->
                                    <a class="dropdown-item megamenu-links" href="/pages/about/who_we_are.php">
                                        <h5 class="mega-menu-text">Who We Are</h5>
                                    </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/our_team.php">Our Team</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/mission_and_values.php">Mission &amp; Values</a>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <a class="dropdown-item megamenu-links" href="/pages/about/leadership.php">
                                        <h5 class="mega-menu-text">Leadership</h5>
                                    </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/president_office.php">President Office</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/board_of_directors.php">Board of Directors</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/academic_leadership.php">Academic Leadership</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/administration.php">Administration</a>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <a class="dropdown-item megamenu-links" href="/pages/about/partners_and_donors.php">
                                        <h5 class="mega-menu-text">Partners And Donors</h5>
                                    </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/corporate_donors.php">Corporate Donors</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/academic_partners.php">Academic Partners</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/strategic_partners.php">Strategic Partners</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/become_donor.php">Become a Donor</a>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <a class="dropdown-item megamenu-links" href="/pages/about/faq.php">
                                        <h5 class="mega-menu-text">FAQs</h5>
                                    </a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/join_the_community.php">Join The Community</a>
                                    <a class="dropdown-item megamenu-links" href="/pages/about/international_recognition.php">International Recognition</a>
                                </div>
                            </div>
                            <<<<<<< HEAD <a class="btn col-2" type="button" style=" background: rgb(20,90,120); color:white; border: 1px solid white; position: absolute; bottom:1rem; right: 1rem;" role="button" href="/pages/apply.php"> APPLY </a>
                                =======
                                <a class="btn col-2" type="button" style="background: rgba(0,1,154,0.5); color:white; border: 1px solid white; position: absolute; bottom:1rem; right: 1rem;" role="button" href="/pages/apply.php"> APPLY </a>
                                >>>>>>> dd2c918459fb257b0abc02f2369d8f13c93235c1
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End of Mega Menu -->
    </header>

    <?php
        if ($title == "HOME") {
            include ('jumbotron.php');
        }
        elseif($title == "CONTACT US"){
        ?>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <?php
        }else{
            include ('small-jumbotron.php');
        }
        ?>
