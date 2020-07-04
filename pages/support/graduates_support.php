<?php
    $title = "GRADUATE SUPPORT";
    include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
?>

<body>
    <section class="sections">
        <div class = "container my-5 py-3">
            <div class = "row">
                <!-- Side-Bar Menu -->
                <div class = "col-3 pt-5 side-bar-menu">
                    <nav>
                        <ul>              
                            <a href = "support_center.php"><li>Support Center</li></a>
                            <a href = "jobs.php"><li>Jobs</li></a>
                            <a href = "graduates_support.php"><li class = "activeLink">Graduate Support</li></a>
                            <a href = "international_network_linking.php"><li>International Network Linking</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">Skylineuni.com Graduate Support</h2>
                    <hr class = "my-4">      
                    <div class = "row my-5">
                        <div class = "col-12">
                            <!--<h3 class="h3-responsive about-section-headers-black">Skylineuni.com Graduate Support</h3>-->
                            <!-- Section description -->
                            <p class = "main-text">
                            Skyline University graduates can access our full range of support.
                            </p>
                            <p class = "main-text">
                            Part of our support is to teach you how to go through job interviews, how to answer questions, and how to be confident in your future job.
                            </p>
                            <p class = "main-text">
                            We are committed to supporting you as you take your next steps after graduation, whether you need to talk through your options, practice for interviews, or find the opportunity that's right for you.
                            </p>
                            <p class = "main-text">
                            We also list job vacancies for our graduates in different parts of the world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
    
<?php
   include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>