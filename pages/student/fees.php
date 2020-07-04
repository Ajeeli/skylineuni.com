<?php
    $title = "FEES &amp; FUNDING";
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
                            <a href = "student.php"><li>Become a Student</li></a>
                            <a href = "requirements.php"><li>Requirements</li></a>
                            <a href = "/pages/apply.php"><li>Online Application</li></a>
                            <a href = "approval.php"><li>Approval Process</li></a>
                            <a href = "fees.php"><li class = "activeLink">Fees &amp; Funding</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">Fees &amp; Funding</h2>
                    <hr class = "my-4">
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">University Registration Cost</h3>
                            <p class = "main-text">To make the university affordable to everybody who is willing to learn and obtain a degree every where in the world, we made it as follows:</p>
                            <p>There are no university fees, and all courses in the university are offered free of charge.</p>
                            <p>However, there is a small amount payable for registration. The amount is dependable on the courses you choose to take.</p>
                            <h6>How Much Does the Registration Cost Me?</h6>
                            <p>It depends on the course you are going to register for.</p>
                            <p>For undergraduate courses, the registration fees are between &euro;15 to &euro;25 Euro.</p>
                            <p>For postgraduate courses, the registration fees are between &euro;30 and &euro;45 Euro.</p>
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