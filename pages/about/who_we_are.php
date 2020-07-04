<?php
    $title = "WHO WE ARE";
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
                            <a href = "who_we_are.php"><li class = "activeLink">Who We Are</li></a>
                            <a href = "our_team.php"><li>Our Team</li></a>
                            <a href = "mission_and_values.php"><li>Mission &amp; Values</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">About Us</h2>
                    <hr class = "my-4">      
                    <div class = "row my-5">
                        <div class = "col-12">
                            <!--<h3 class="h3-responsive about-section-headers-black">Who We Are</h3>-->
                            <!-- Section description -->
                            <p class = "main-text">
                            We are one of the oldest, most diverse online university in the world.
                            </p>
                            <p class = "main-text">
                            Many thousands of students across most countries in the world achieved our degrees.
                            </p>
                            <p class = "main-text">
                            We have helped many people who wanted to study but they did not have the opportunity to achieve their degrees.
                            </p>
                            <p class = "main-text">
                            We were established in the year 2000 under the name "firstworld" university. In 2008 we changed the name to Beyond University until recently when we decided for the new branding and to be up to date with the world progressing development.
                            </p>
                            <p class = "main-text">
                            Throughout our long history, the University has offered access to a wide range of academic opportunities.
                            </p>
                            <p class = "main-text">
                            As a world leader in higher education, the University has pioneered change in the sector. We were the first online university to admit students and give them the opportunity to study wherever they are, providing access to higher education across the globe. We have improved the lives of millions of people and their families around the world through our unique approach to education.
                            </p>
                            <p class = "main-text">
                            We made education within reach of everybody, no matter where they are.
                            </p>
                        </div>
                    </div>
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Student Services</h3>
                            <p class = "main-text">As well as providing a world-class education, we also offer a range of other services including careers advice and access to online library.</p>
                            <p class = "main-text">Throughout your studies with us, you'll have access to a variety of opportunities, tools and and resources, as well as dedicated career support, to enhance your employability.</p>
                            <p class = "main-text">There are also a variety of initiatives and schemes aimed at helping you build your transferable skills, network with potential employers, and prepare for the ever-changing graduate job market.</p>
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