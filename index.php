<?php

$title = "HOME";
// hrefs
// root
$homeLink = "localhost";

// root/pages/
$pagesLink = "pages/";

// root/files/
$filesLink = "files/";

// root/css/
$cssLink = "css/";

// root/img/
$imgLink = "img/";

// root/js/
$jsLink = "js/";

// root/php/
$phpLink = "php/";

// root/system/
$systemLink = "system/";

// includes
include ("inc/header.php");
?>

<!-- Contact form code -->
<?php 
    include("inc/contact_form_email.php");
?>

<main>

    <section class="py-4 bg-light">
        <div class="container text-center">
            <h3>CURRENT ENROLLED <span class="mx-2" style="font-size: 2.5rem; color: rgb(220, 75, 220);">7,564</span> STUDENTS</h3>
        </div>
    </section>


    <!-- Countdown Section -->
    <section id="countdown-section" class="text-white text-center py-5" style="background: linear-gradient(to bottom right, rgb(30, 130, 160), rgba(180, 40, 180, 0.8));">
        <!-- Javascript for the countdown timer -->
        <script src="/js/countdown_timer.js"></script>

        <div class="container">

            <h2 style="font-family: truenosemibold">Early Admission Deadline</h2>
            <h3 class="my-4">July 30, 2020</h3>
            <div class="row justify-content-center">
                <div id="clock-div" class="col-2 m-1"><span id="days"></span>days</div>
                <div id="clock-div" class="col-2 m-1"><span id="hours"></span>Hours</div>
                <div id="clock-div" class="col-2 m-1"><span id="minutes"></span>Minutes</div>
                <div id="clock-div" class="col-2 m-1"><span id="seconds"></span>Seconds</div>
            </div>
            <div class="col-md-3 col-9 mt-4">
                <a href="/pages/apply.php" id="rounded-outlined-button" class="btn btn-lg btn-outline-info btn-block">APPLY NOW</a>
            </div>
        </div>
    </section>
    <!-- End of Coundown section -->


    <!-- Why Skyline Section -->
    <section id="whyskyline" class="py-5 text-white">
        <div class="container">

            <h1 class="mt-4 mb-5 text-center text-white" style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(50, 160, 190, 0.9), rgba(0, 0, 0, 0))">
                WHY SKYLINE ?
            </h1>
            <!-- Main cards container -->
            <div class="row justify-content-center" style="font-size: 0.9rem;">

                <div class="col-lg-5 col-md-6 m-3 p-0" style="box-shadow: 10px 10px 10px grey; background: rgb(90, 80, 150); ">
                    <img src="img/tuition_free_study.jpg" class="img-fluid">
                    <div class="px-4 py-3">
                        <h4 class="text-uppercase my-3" style="background: rgba(0, 0 , 0, 0.1)">Tuition Free study</h4>
                        <p>We believe in free education for everyone. Our internationally accredited programs are on par with the most reputed universities around the globe to serve those who have been less fortunate.</p>
                    </div>
                </div>

                <div class=" col-lg-5 col-md-6 m-3 p-0" style="box-shadow: 10px 10px 10px grey; background: rgb(200, 90, 70);">
                    <img src="img/qualified_professors.jpg" class="img-fluid">
                    <div class="px-4 py-3">
                        <h4 class="text-uppercase my-3" style="background: rgba(0,0 , 0, 0.1)">Qualified Professors</h4>
                        <p>You will be taught by professors of the highest pedigree, who have taught at highly-ranked universities. They bring their deep knowledge, vast experience and sheer passion to teach you everything they know.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="font-size: 0.9rem;">

                <div class=" col-lg-5 col-md-6 m-3 p-0" style="box-shadow: 10px 10px 10px grey; background: rgb(50, 120, 120);">
                    <img src="img/skilled_graduates.jpg" class="img-fluid">
                    <div class="px-4 py-3">
                        <h4 class="text-uppercase my-3" style="background: rgba(0, 0 , 0, 0.1)">Skilled Graduates</h4>
                        <p>Graduates that are skilled and highly demanded in the market. Our students have been hired at top ranking companies on every continent and have been highly praised not only for their skills but for their commitment and ethic.</p>
                    </div>
                </div>

                <div class=" col-lg-5 col-md-6 m-3 p-0" style="box-shadow: 10px 10px 10px grey; background: rgb(110, 110, 110);">
                    <img src="img/support_and_guidance.jpg" class="img-fluid">
                    <div class="px-4 py-3">

                        <h4 class="text-uppercase my-3" style="background: rgba(0, 0 , 0, 0.1)">Support and Guidance</h4>
                        <p> A dedicated support team support available 24 hours, 7 days a week, ready to help with student request such as path guidance, study-related matter an even funding for financially challenged students.
                    </div>

                </div>
            </div> <!-- End of main cards container -->

        </div>
    </section>
    <!-- End of Why Skyline Section -->



    <!-- Explore Section -->
    <div class="jumbotron explore-section text-center text-white" style="background-color: rgb(50, 110, 110); background-blend-mode: multiply;">
        <div class="row pt-4">
            <div class="col-12 mt-4">
                <h1 class="display-4" style="font-family= truenoblack;">OUR PROGRAMS</h1><br>
                <hr class="mb-4 white-hr">
                <p class="lead">Dive into the depth of specialized courses that are up to date with the latest technologies.</p>
                <p class="lead">Have a look at our acreditted world-wide recognised programs.</p>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-center mt-5">
            <div class="col-lg-2 col-12">
                <a id="rounded-outlined-button" class="btn btn-lg btn-block" href="pages/programs/all_programs.php" role="button">EXPLORE</a>

            </div>
        </div>
    </div>
    <!-- End of Explore section -->

    <!-- Business Section -->
    <section class="sections">
        <div class="container py-5">
            <div class="row justify-content-center">
                <!-- Added text-center to the class because the text is left aligned and not centered -->
                <h2 class="h1-responsive mb-5 text-center">DELIVERING A SUCCESSFUL FUTURE</h2>
                <p class="col-10">Skyline's graduates are applying their skills and knowledge in a range of industry leading organisations. Their passion and skill equipped with the robust and solid educational foundation have led them to work at the world's most organsiations.</p>
            </div>
            <div class="row mt-3 mb-5 text-center">
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/google.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/microsoft.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/amazon.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/apple.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/allianz.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/city_bank.png">
                </div>
            </div>
            <div class="row mb-5 text-center">
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/emirates.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/emaar.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/ernst_young.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/ge.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/bmw.png">
                </div>
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="img/huawei.png">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Business section -->

    <!-- advertisement section -->
    <section class="sections advertisement-section">
        <div class="container-fluid advertisement-container text-center">
            <div class="row justify-content-center">
                <div class="col-md-8  col-12 offset-0 py-5">
                    <p class="advertisement-text pt-5"><span class="advertisement-text-header">Quality Excellence Award</span></p>
                    <p><img class="advertisement-img" src="img/excellence_award.png"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of advertisement section -->

    <!-- Counter Banner -->
    <div class="counter-banner text-center my-5">
        <div class="container-fluid counter">
            <div class="row justify-content-center"> 
            <!-- Replaced Offset-2 in bottom with justify-content-center in above to center the columns and fix responsiveness -->
                <div class="col-md-2 col-12 counter-icons pt-md-0 pt-2">
                    <div class="employees">
                        <i class="fas fa-graduation-cap"></i>
                        <p class="counter-count">1599</p>
                        <p class="employee-p">Students</p>
                    </div>
                </div>
                <div class="col-md-2 col-12 counter-icons pt-md-0 pt-2">
                    <div class="customer">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p class="counter-count">129</p>
                        <p class="customer-p">Tutors</p>
                    </div>
                </div>
                <div class="col-md-2 col-12 counter-icons pt-md-0 pt-2">
                    <div class="design">
                        <i class="fas fa-certificate"></i>
                        <p class="counter-count">658</p>
                        <p class="design-p mb-5">Certificates Issued</p>
                    </div>
                </div>
                <div class="col-md-2 col-12 counter-icons pt-md-0 pt-2">
                    <div class="design">
                        <img src="/img/accredited_stamp.png" height=175 width=175 alt="accredited">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recheck code and refactor -->

    <!-- Testimonials Section -->
    <section class="sections testimonials-section text-center my-5 py-5" style="background-image: url('/img/grey_sandbag.png');">
        <div class="container">
            <!-- Section heading -->
            <h1 class="h1-responsive about-section-headers-black mb-5">TESTIMONIALS</h1>
            <!-- Section description -->
            <p class="dark-grey-text w-responsive mx-auto mb-5">Hear from our students what they have to say. Hear their path, their journey and their success.</p>
            <!--Grid row-->
            <div class="row text-center">
                <!--Grid column-->
                <div class="col-md-4 mb-md-0 mb-5" style="border-right: 1px solid grey; border-left: 1px solid grey;">
                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="/img/testimonial1.jpg" class="rounded-circle z-depth-1 img-fluid" width=200 style="border: 1px solid grey;">
                        </div>
                        <!--Content-->
                        <h4 class="font-weight-bold dark-grey-text mt-4">Etlyn Henry</h4>
                        <h6 class="font-weight-bold blue-text my-3">Web and Cloud Development</h6>
                        <p class="font-weight-normal dark-grey-text">
                            <i class="fa fa-quote-left pr-2"></i>To learn all what I have learnt so far is astonishing, for free; I honestly didn’t expect to receive such amazing lectures.</p>
                        <!--Review-->
                        <div class="orange-text">
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star-half-full"> </i>
                        </div>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-md-0 mb-5" style="border-right: 1px solid grey;">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="/img/testimonial2.jpg" class="z-depth-1 img-fluid" width=200 height=200 style="border: 1px solid grey; border-radius: 50%">
                        </div>
                        <!--Content-->
                        <h4 class="font-weight-bold dark-grey-text mt-4">Ethan Hodder</h4>
                        <h6 class="font-weight-bold blue-text my-3">Economics</h6>
                        <p class="font-weight-normal dark-grey-text">
                            <i class="fa fa-quote-left pr-2"></i>I've tried an online university before and was left disappointed, your university has changed my perspective, thank you!</p>
                        <!--Review-->
                        <div class="orange-text">
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                        </div>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4" style="border-right: 1px solid grey;">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="img/testimonial3.jpg" class="rounded-circle z-depth-1 img-fluid" width=200 style="border: 1px solid grey;">
                        </div>
                        <!--Content-->
                        <h4 class="font-weight-bold dark-grey-text mt-4">Salma Ahmed</h4>
                        <h6 class="font-weight-bold blue-text my-3">English Literature</h6>
                        <p class="font-weight-normal dark-grey-text">
                            <i class="fa fa-quote-left pr-2"></i>It seemed mentally tough to do it alone and online, especially when it comes to learning a language, but I was very wrong.</p>
                        <!--Review-->
                        <div class="orange-text">
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star-o"> </i>
                        </div>
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </section>
    <!-- Testimonials Section -->

    <!-- Student Map Section -->
    <div class="jumbotron student-map-section text-center text-white">
        <div class="row pt-5">
            <div class="col-12 pt-5">
                <h1 class="display-4">OUR WORLDWIDE STUDENTS</h1><br>
                <hr class="my-4 white-hr">
                <p class="lead pt-5">
                    <!-- Replaced col-2 with col-lg-2 and col-12, so it would take a full row size on mobile devices but only a col-2 size on laptops and above -->
                    <a id="rounded-outlined-button" class="btn btn-lg col-lg-2 col-12" href="<?php echo $pagesLink . '/apply.php'; ?>" role="button">Become a Student</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Student Map Section -->

    <!-- Request Brochure Section -->
    <section class="sections" id="brochure">
        <div class="container py-5">
            <h2 class="h1-responsive about-section-headers-black text-center pb-5">We Will Help You Achieve Your Goals</h2>
            <div class="row justify-content-center">

                <!--Grid column-->
                <div class="col-md-10">
                    <form id="contact-form" name="contact-form" action="index.php#brochure" method="POST">

                        <!--Grid row-->
                        <div class="row justify-content-center">

                            <!--Grid column-->
                            <div class="col-md-3">
                                <div class="md-form">
                                    <label for="name">First Name</label>
                                    <input type="text" id="fname" name="fname" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-3">
                                <div class="md-form">
                                    <label for="email">Last Name</label>
                                    <input type="text" id="lname" name="lname" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->
                            <div class="col-md-3">
                                <div class="md-form">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row pt-5">
                            <div class="col-md-4 offset-md-4 col-12">
                                <input type="submit" name="submit" value="Request Brochure" class="btn btn-primary btn-block">
                                <?php 
                                    if ($send == 3) {
                                        echo "<p class = 'brochureSent mt-5 my-5 bg-info text-white text-center rounded mx-auto'><i class='fas fa-check-circle p-1 mx-2' style='color:white; font-size:16px;'></i>Brochure sent to $email.</p>";
                                    }
                                ?>
                            </div>
                        </div>
                        <!--Grid row-->
                    </form>

                </div>
                <!--Grid column-->
            </div>
        </div>
    </section>
    <!-- Request Brochure Section -->

    <!-- JS Source -->
    <script src="js/counter.js" type="text/javascript"></script>
</main>

<?php
    //includes
    include ("inc/footer.php");
    ?>
