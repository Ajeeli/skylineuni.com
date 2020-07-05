<?php

    $title = "UNDERGRADUATE";
    include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");

?>

<section class="sections my-5">
    <div class = "container">
	<!-- Section heading -->
        <h2 class="h1-responsive about-section-headers-black text-center">Admission</h2>
        <!-- Section description -->
        <p class = "main-text">All students who wish to join Skyline University must be over the age of 18 years old. All students must have sufficient knowledge of the English language to understand the subjects as well as the communications with the university.</p>
        <p class = "note-text">[Final admission eligibility will be determined by the admission office upon scrutiny of provided documents]</p>
    </div>
</section>

<section class="my-5">
    <div class = "container">
        <!-- Section heading -->
        <h2 class="h1-responsive about-section-headers-black text-center">Admission Procedure</h2>
        <!-- Section description -->
	<p class = "main-text">A candidate can obtain admission application form <a href = "apply.php">here</a> and apply for admission (subject to eligibility criteria) by submitting admission form <a href = "apply.php">(Admission Form)</a> with requisite documents including registration fees payable to Skyline University</p>
	<p class = "main-text">Upon receipt of filled admission application form <a href = "apply.php">(Admission Form)</a> at Registrar's office, it is processed after necessary verification subject to admission eligibility criteria and candidate is intimated through an email (if provided in admission application form). A list of admitted candidates is also published and updated during admission session at Skyline University website under admission link.</p>
    </div>
</section>

<section class="my-5">
    <div class = "container">
        <!-- Section heading -->
        <h2 class="h1-responsive about-section-headers-black text-center">Admission Schedule</h2>
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
</section>



<?php /*
<section class="my-5 py-3">
    <div class = "container">
        <!-- Section heading XXX -->
        <h2 class="h1-responsive about-section-headers-black text-center">Lorem Ipsum</h2>
        <!-- Section description XXX -->
        <p class="text-center w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit id laborum.</p>

        <!-- Grid row XXX -->
        <div class="row">

            <!-- Grid column XXX -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">

                <!-- Featured news XXX -->
                <div class="single-news mb-3">

                    <!-- Image XXX -->
                    <div class="view overlay rounded z-depth-2 mb-4">
                        <img class="img-fluid grad-img" src="<?php echo $imgLink . 'admission-courses.jpg'; ?>" alt="Courses">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Grid row XXX -->
                    <div class="row mb-3">

                        <!-- Grid column XXX -->
                        <div class="col-12">
                            <h4>Courses</h4>
                        </div>
                        <!-- Grid column XXX -->

                    </div>
                    <!-- Grid row XXX -->

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <p>Read our comprehensive guide to graduate courses open to admission for 2019-20 entry.</p>

                    </div>

                </div>
                <!-- Featured news XXX -->

                <!-- Small news XXX -->
                <div class="single-news mb-3">

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a href = "../coming-soon/index.php">Courses A-Z listing
                        </div>
                        <i class="fa fa-angle-double-right right-angle"></i></a>
                    </div>

                </div>
                <!-- Small news XXX -->

                <!-- Small news XXX -->
                <div class="single-news mb-3">

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a href = "../coming-soon/index.php">Courses by department
                        </div>
                        <i class="fa fa-angle-double-right right-angle"></i></a>
                    </div>

                </div>
                <!-- Small news XXX -->

                <!-- Small news XXX -->
                <div class="single-news mb-3">

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a href = "../coming-soon/index.php">Part-time and flexible study
                        </div>
                        <i class="fa fa-angle-double-right right-angle"></i></a>
                    </div>

                </div>
                <!-- Small news XXX -->

            </div>
            <!-- Grid column XXX -->

            <!-- Grid column XXX -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">

                <!-- Featured news XXX -->
                <div class="single-news mb-3">

                    <!-- Image XXX -->
                    <div class="view overlay rounded z-depth-2 mb-4 grad">
                        <img class="img-fluid grad-img" src="<?php echo $imgLink . 'admission-fees.jpg'; ?>" alt="Courses">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Grid row XXX -->
                    <div class="row mb-3">

                        <!-- Grid column XXX -->
                        <div class="col-12">
                            <h4>Fees and funding</h4>
                        </div>
                        <!-- Grid column XXX -->

                    </div>
                    <!-- Grid row XXX -->

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <p>Information on fees, living costs, scholarships and loans and advice on finding other funding.</p>

                    </div>

                </div>
                <!-- Featured news XXX -->

                <!-- Small news XXX -->
                <div class="single-news mb-3">

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a href = "../coming-soon/index.php">Introducing Skyline scholarships
                        </div>
                        <i class="fa fa-angle-double-right right-angle"></i></a>
                    </div>

                </div>
                <!-- Small news XXX -->

                <!-- Small news XXX -->
                <div class="single-news mb-3">

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a href = "../coming-soon/index.php">Funding top tips
                        </div>
                        <i class="fa fa-angle-double-right right-angle"></i></a>
                    </div>

                </div>
                <!-- Small news XXX -->

                <!-- Small news XXX -->
                <div class="single-news mb-3">

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a href = "../coming-soon/index.php">Fees, funding and scholarship search
                        </div>
                        <i class="fa fa-angle-double-right right-angle"></i></a>
                    </div>

                </div>
                <!-- Small news XXX -->

            </div>
            <!-- Grid column XXX -->

            <!-- Grid column XXX -->
            <div class="col-lg-4 col-md-12 mb-lg-0">

                <!-- Featured news XXX -->
                <div class="single-news mb-3">

                    <!-- Image XXX -->
                    <div class="view overlay rounded z-depth-2 mb-4">
                        <img class="img-fluid grad-img" src="<?php echo $imgLink . 'admission-applying.jpg'; ?>" alt="Courses">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Grid row XXX -->
                    <div class="row mb-3">

                        <!-- Grid column XXX -->
                        <div class="col-12">
                            <h4>Applying to Skyline</h4>
                        </div>
                        <!-- Grid column XXX -->

                    </div>
                    <!-- Grid row XXX -->

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <p>Our detailed information will guide you through the graduate admissions process.</p>

                    </div>

                </div>
                <!-- Featured news XXX -->

                <!-- Small news XXX -->
                <div class="single-news mb-3">

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a href = "../coming-soon/index.php">Application Guide
                        </div>
                        <i class="fa fa-angle-double-right right-angle"></i></a>
                    </div>

                </div>
                <!-- Small news XXX -->

                <!-- Small news XXX -->
                <div class="single-news mb-3">

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a href = "../coming-soon/index.php">Decision timeline
                        </div>
                        <i class="fa fa-angle-double-right right-angle"></i></a>
                    </div>

                </div>
                <!-- Small news XXX -->

                <!-- Small news XXX -->
                <div class="single-news">

                    <!-- Title XXX -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0">
                            <a href = "../coming-soon/index.php">Information for referees
                        </div>
                        <i class="fa fa-angle-double-right right-angle"></i></a>
                    </div>

                </div>
                <!-- Small news XXX -->

            </div>
            <!-- Grid column XXX -->

        </div>
        <!-- Grid row XXX -->

    </div>
</section>
*/ ?>

<?php
  include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>
