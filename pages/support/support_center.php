<?php
    $title = "SUPPORT CENTER";
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
                            <a href = "support_center.php"><li class = "activeLink">Support Center</li></a>
                            <a href = "jobs.php"><li>Jobs</li></a>
                            <a href = "graduates_support.php"><li>Graduate Support</li></a>
                            <a href = "international_network_linking.php"><li>International Network Linking</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">How we support students</h2>
                    <hr class = "my-4">      
                    <div class = "row my-5">
                        <div class = "col-12">
                            <!-- <h3 class="h3-responsive about-section-headers-black">How we support students</h3> -->
                            <!-- Section description -->
                            <p class = "main-text">
                            At Skyline University, students are provided the most support we can afford, we have a dedicated team ready to help students with all their questions and enquiries, we also have other teams each dedicated to provide our dear students with all their needs during their studies and after their graduation, such as finding them appropriate jobs that fulfills their needs.
                            </p>
                            <p class = "main-text">
                            Skyline University also provides support to undergraduates and postgraduates with additional courses to help them master skills in areas other than their field of study, mostly soft skills. The University also stays in touch with its students after graduation to ensure everything is working on a given plan, and help with any issues that may occur.
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