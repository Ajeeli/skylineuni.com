<?php
    $title = "BECOME A STUDENT";
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
                            <a href = "student.php"><li class = "activeLink">Become a Student</li></a>
                            <a href = "requirements.php"><li>Requirements</li></a>
                            <a href = "/pages/apply.php"><li>Online Application</li></a>
                            <a href = "approval.php"><li>Approval Process</li></a>
                            <a href = "fees.php"><li>Fees &amp; Funding</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">How to become a student at our university</h2>
                    <hr class = "my-4">      
                    <div class = "row my-5">
                        <div class = "col-12">
                            <!--<h3 class="h3-responsive about-section-headers-black">How we make decisions</h3>-->
                            <!-- Section description -->
                            <ul>
                                <li>Register by filling the application form and click (Submit).</li>
                                <li>In your email you will receive a welcoming message that includes your login credentials.</li>
                                <li>You will have access to the Student Information System (SIS).</li>
                                <li>You will be able to enroll in courses related to your program.</li>
                                <li>You will have access to the modules related to your courses.</li>
                                <li>You can read the modules in the SIS, or you may download the modules and save them on your computer.</li>
                                <li>Study them if you have any problem</li>
                                <li>Send your query to the email related to your subject.</li>
                                <li>Few hours or few days later you will get your reply.</li>
                                <li>You might get homeworks or be asked to do assignments.</li>
                                <li>You must submit it in the time assigned to you.</li>
                                <li>All exam instructions, procedures, advices and guidelines will be sent to you.</li>
                            </ul>
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