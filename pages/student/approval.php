<?php
    $title = "APPROVAL PROCESS";
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
                            <a href = "approval.php"><li class = "activeLink">Approval Process</li></a>
                            <a href = "fees.php"><li>Fees &amp; Funding</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <h2 class="h1-responsive about-section-headers-black">Approval</h2>
                    <hr class = "my-4">
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">The Approval Process</h3>
                            <p class = "main-text">To offer a course in the hybrid or online format, a two part approval process is required. First, the course itself must be approved by the Online Education Council (OEC). Second, any faculty member who will be teaching the course must be approved.</p>
                            <div class = "row">
                                <div class = "col-12">
                                    <img src = "../../img/approval.jpg" style = "height: 150px; width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Course Approval Process</h3>
                            <p class = "main-text">Proposals to change an existing course, or to create a new course, to be offered in a hybrid or online format must be created and submitted in Sail, the online curriculum development system. Proposals can be authored by any faculty member (tenured/tenure-track and affiliate faculty), although some proposal questions are best answered by the faculty member that may ultimately teach the course. Complete proposals are routed to OEC for review. This review happens simultaneously with review by IT and Library (and before the unit head).</p>
                            <p class = "main-text" style = "font-style:italic;">NB: Faculty Governance committees do not meet over the Spring/Summer semesters and no approval will be possible during that time.</p>
                            <p class = "main-text">Approval for hybrid and online delivery follows a continuum from traditional through online.</p>
                            <p class = "main-text">Traditional - All courses are approved for traditional delivery.  It is the de facto delivery method. It requires no special course review or faculty training. The ability to schedule a course face-to-face is never removed.</p>
                            <p class = "main-text">Hybrid - A course that intends to replace at least 15% of the course meeting time (about 6 hours in a typical 3 credit course) with online instruction must be approved for such delivery by OEC.  Courses approved for hybrid delivery retain their ability to be offered in a traditional format, however hybrid courses are not automatically approved for fully online delivery.</p>
                            <p class = "main-text">Online - Offering a course in a fully online format requires a more extensive course redesign than making a course hybrid. Therefore, requesting approval for a course to be offered fully online requires a separate review process by OEC. Courses approved for fully online delivery are automatically approved for hybrid and traditional delivery as well.</p>
                        </div>
                    </div>
                    
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Faculty Approval Process</h3>
                            <!-- Section description -->
                            <p class = "main-text">Hybrid - Faculty scheduled to teach a hybrid course where the amount of online content meets or exceeds 15% of the course meeting time (about 6 hours in a typical 3 credit course) must also attend an FTLC workshop or show prior competency. Faculty teaching hybrid courses with less online content are not required to attend training, although they are certainly encouraged to do so.</p>
                            <p class = "main-text">Online - Faculty scheduled to teach a fully online course must attend an FTLC workshop/module(s) on online/hybrid pedagogy or provide evidence of competency in online/hybrid pedagogy to the OEC, their Dean, and Assistant Vice President for Academic Affairs.</p>
                            <p class = "main-text">Online and Hybrid teaching workshops facilitate best practices and consistency of online and hybrid offerings across the university, including offering support and guidance in instructional strategies to foster interaction, to convey concepts, and to assess student learning. Workshop dates may be found on the Pew Faculty Teaching and Learning Center webpage. It is important that departments plan ahead to identify those individuals who will teach online or hybrid courses so that training may be completed in a timely manner.</p>
                        </div>
                    </div>
                    
                    <div class = "row my-5">
                        <div class = "col-12">
                            <h3 class="h3-responsive about-section-headers-black">Calculating The 15% Threshold</h3>
                            <!-- Section description -->
                            <p class = "main-text">Determine the total number of hours (round 50 minute classes to an hour) the course would normally meet in a classroom over the entire semester. Multiply the total number of hours by 0.15. A course can be scheduled for, and a faculty could teach up to this number of hours online without OEC approval or faculty training.</p>
                            <p class = "main-text">Example 1: A 15-week 3-credit lecture/discussion meets in class 3 hours per week, for a total of 45 hours per semester. 45 * 0.15 = 7 (rounded up from 6.75).  So up to 7 hours of instruction can be delivered online without approval.</p>
                            <p class = "main-text">Example 2: A 6-week 3-credit lecture meets in class 6 hours and 40 minutes per week, for a total of 40 hours. 40 * 0.15 = 6.  So up to 6 hours of instruction can be delivered online without approval.</p>
                            <p class = "main-text">Example 3: A 8-week 2-credit lab might normally meet in class for 4 hours per week, for a total 32 hours. 32 * 0.15 = 5 (rounded up from 4.8). So up to 5 hours of instruction can be delivered online without approval.</p>
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