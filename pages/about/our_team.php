<?php
    $title = "OUR TEAM";
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
                            <!--<a href = "about_skyline.php"><li>About Skyline</li></a>-->
                            <a href = "who_we_are.php"><li>Who We Are</li></a>
                            <a href = "our_team.php"><li class = "activeLink">Our Team</li></a>
                            <a href = "mission_and_values.php"><li>Mission &amp; Values</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">Our Amazing Team</h2>
                    <hr class = "my-4">      
                    <div class = "row my-5">
                        <div class = "col-12">
                            <!--<h3 class="h3-responsive about-section-headers-black">Our Amazing Team</h3>-->
                            <!-- Section description -->
                            <p class = "main-text">
                            At Skyline University, we have one of the greatest teams whom they represent all levels of academies.
                            </p>
                            <p class = "main-text">
                            Our team of doctors, senior lecturers, associate professors and professors are the backbone of our strength in education.
                            </p>
                            <p class = "main-text">
                            They are devoted to help and assist our students in their own subjects.
                            </p>
                            <p class = "main-text">
                            Our team also make sure that the university is run smoothly and up to highest standard.
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