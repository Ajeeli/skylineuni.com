<?php
    $title = "REQUIREMENTS";
    include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
    include ($_SERVER['DOCUMENT_ROOT'] . '/db_connection.php');
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
                            <a href = "requirements.php"><li class = "activeLink">Requirements</li></a>
                            <a href = "/pages/apply.php"><li>Online Application</li></a>
                            <a href = "approval.php"><li>Approval Process</li></a>
                            <a href = "fees.php"><li>Fees &amp; Funding</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">Requirements</h2>
                    <hr class = "my-4">
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Admission</h3>
                            <p class = "main-text">All students who wish to join Skyline University must be over the age of 18 years old. All students must have sufficient knowledge of the English language to understand the subjects as well as the communications with the university.</p>
                            <p class = "note-text">[Final admission eligibility will be determined by the admission office upon scrutiny of provided documents]</p>
                        </div>
                    </div>
                    
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Admission Procedure</h3>
                            <p class = "main-text">A candidate can obtain admission application form <a href = "../apply.php">here</a> and apply for admission (subject to eligibility criteria) by submitting admission form <a href = "../apply.php">(Admission Form)</a> with requisite documents including registration fees payable to Skyline University</p>
                            <p class = "main-text">Upon receipt of filled admission application form <a href = "../apply.php">(Admission Form)</a> at Registrar's office, it is processed after necessary verification subject to admission eligibility criteria and candidate is intimated through an email (if provided in admission application form). A list of admitted candidates is also published and updated during admission session at Skyline University website under admission link.</p>
                        </div>
                    </div>
                    
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Admission Schedule</h3>
                            <!-- Section description -->
                            <p class = "main-text">Skyline University offers admission for the new students twice in an academic year namely winter in the month of January/February and summer in the month of June/July each year.</p>
                            <h5 class="h1-responsive about-section-headers-black text-center mt-5">Admission Schedule - Year <?php echo date ('Y'); ?></h5>
                            <table class="table admission-table table-bordered table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Day</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Admissions Open - Winter <?php echo date ('Y'); ?></th>
                                        <td>Any day suits you</td>
                                        <td>Jan/Feb <?php echo date ('Y'); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Admissions Open - Summer <?php echo date ('Y'); ?></th>
                                        <td>Any day suits you</td>
                                        <td>June/July <?php echo date ('Y'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
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