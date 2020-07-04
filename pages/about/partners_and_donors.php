<?php
    $title = "PARTNERS AND DONORS";
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
                            <a href = "partners_and_donors.php"><li class = "activeLink">Partners and Donors</li></a>
                            <a href = "corporate_donors.php"><li>Corporate Donors</li></a>
                            <a href = "academic_partners.php"><li>Academic Partners</li></a>
                            <a href = "strategic_partners.php"><li>Strategic Partners</li></a>
                            <a href = "become_donor.php"><li>Become a Donor</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">Partners and Donors</h2>
                    <hr class = "my-4">      
                    <div class = "row my-5">
                        <div class = "col-12">
                            <!-- Section description -->
                            <p class = "main-text">
                            Skyline University has partnered with well-known academics and has set agreements with many donors who are eager to help establish this University to ensure a free learning for everyone.
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