<?php
    $title = "LEADERSHIP";
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
                            <a href = "leadership.php"><li class = "activeLink">Leadership</li></a>
                            <a href = "president_office.php"><li>President Office</li></a>
                            <a href = "board_of_directors.php"><li>Board of Directors</li></a>
                            <a href = "academic_leadership.php"><li>Academic Leadership</li></a>
                            <a href = "administration.php"><li>Administration</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">The Leaders</h2>
                    <hr class = "my-4">      
                    <div class = "row my-5">
                        <div class = "col-12">
                            <!-- Section description -->
                            <p class = "main-text">
                            Skyline University aims to gather the best to provide the best to its students. we have contacted and signed agreements with some of the best professors to ensure that the university follows the best practices and applies the best standards. 
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