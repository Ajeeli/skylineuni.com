<?php
    session_start();
    if (!isset($_SESSION['sysLogin']['SISLogin']) || $_SESSION['sysLogin']['SISLogin'] != true) {
        header('Location: ../index.php');
    } else if (isset($_SESSION['sysLogin']['SISLogin']) && $_SESSION['sysLogin']['SISLogin'] == true) {
        include('../../db_connection.php');

        $onlineStudent = $_SESSION['student']['id'];
        // Update student online_status to 1 when signing in so that he shows up as online to other students in the SIS dashboard
        $sql = "UPDATE student SET online_status = 1 WHERE student_id = $onlineStudent";
        $mysqli->query($sql);
        $mysqli->close();
    }
    
    $title = "STUDENT INFORMATION SYSTEM";
    $cssLink = "css/";
    include ("inc/header.php");
?>

<body onunload = "logout()">
    
    <script type = "text/javascript">
        function logout(){
            <?php/*
                include('../../db_connection.php');

                // Update student online_status to 0 when user closes browser so that he doesnt show up as online to other students in the SIS dashboard
                $onlineStudent = $_SESSION['student']['id'];
                $sql = "UPDATE student SET online_status = 0 WHERE student_id = $onlineStudent";
                $mysqli->query($sql);
                $mysqli->close();
                */
            ?>
            }
    </script>
    
    <div class = "container-fluid">
        <div class = "row" style = "box-shadow: 0 3px 7px grey;">
            <div class = "sis-brand col-sm-2 col-1 py-2">
                <h1 class = "sys-user sis-sys-user text-center">SIS</h1>
                <i title = "student" class="sys-user fas fa-user-cog"></i>
            </div>
            <div class = "col-sm-10 col-11 py-2 sis-top-menu-bar">
                <nav class="navbar navbar-expand-sm">
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link logout" href="../index.php" title = "Logout" onclick = "logout()"><i class="fas fa-power-off"></i></a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link notification" href="#" title = "Notifications"><del><i class="fas fa-bell"></i></del></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link email" href="#" title = "Emails"><i class="fas fa-envelope"></i></a>
                            </li>
                            -->
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle sis-user-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php 
                                include("php/user-image.php");
                            ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!--
                            <button class="dropdown-item" type="button">Profile</button>
                            <button class="dropdown-item" type="button">Settings</button>
                            -->
                            <button class="dropdown-item" type="button"><a href = "../index.php" onclick = "logout()">Log Out</a></button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <div class = "container-fluid sis-side-bar">
        <div class = "row">
            <div class = "col-sm-2 col-1 side-menu-bar">
                <div class = "row text-center" id = "pageHead">
                    <?php 
                        include ("php/side-user-image.php");
                    ?>
                </div>
                <ul>
                    <a href = "pages/dashboard.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                        <li class = "side-menu" id = "sisDashboard"><i class="fas fa-columns"></i> Dashboard</li>
                        <!-- Display only on small screens (md and lower) -->
                        <li class = "side-menu-small-screen" id = "sisDashboard" title = "Dashboard"><i class="fas fa-columns"></i></li>
                    </a>
                    
                    <a href = "pages/e-Learning/e-Learning.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                        <li class = "side-menu" id = "sisEvent"><i class="fas fa-chalkboard"></i> E-Learning</li>
                        <!-- Display only on small screens (md and lower) -->
                        <li class = "side-menu-small-screen" id = "sisEvent" title = "Event Management"><i class="fas fa-chalkboard"></i></li>
                    </a>
                    
                    <a href = "pages/enrollment-info.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                        <li class = "side-menu" id = "enrollment-info"><i class="fas fa-university"></i> Enrollment Info</li>
                        <!-- Display only on small screens (md and lower) -->
                        <li class = "side-menu-small-screen" id = "enrollment-info" title = "Enrollment Info"><i class="fas fa-university"></i></li>
                    </a>

                    <a href = "pages/e-pay.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                        <li class = "side-menu" id = "e-pay"><i class="fas fa-credit-card"></i> E-Payment</li>
                        <!-- Display only on small screens (md and lower) -->
                    
                        <li class = "side-menu-small-screen" id = "e-pay" title = "E-Payment"><i class="fas fa-credit-card"></i></li>
                    </a>

                    <li class = "side-menu" id = "sisCourseMenu"><i class="fas fa-book"></i> Courses <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "sisCourseMenu" title = "Courses"><i class="fas fa-book"></i></li>
                    
                    <div id = "sisCourseMenu" class = "sis-nested-menu">
                        <a href="pages/courses/enrollment.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Enrollment</li>
                            <li class = "side-menu-small-screen" title = "Enrollment"><i class="fas fa-user-cog"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/courses/schedule.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Schedule</li>
                            <li class = "side-menu-small-screen" title = "Schedule"><i class="fas fa-user-cog"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <a href="pages/courses/grades.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Grades</li>
                            <li class = "side-menu-small-screen" title = "Grades"><i class="fas fa-user-cog"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>

                    </div>
                    
                    <a href = "pages/assignments/assignment1.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                        <li class = "side-menu" id = "assignment"><i class="fas fa-university"></i> Assignments</li>
                        <!-- Display only on small screens (md and lower) -->
                        <li class = "side-menu-small-screen" id = "assignment" title = "Assignments"><i class="fas fa-university"></i></li>
                    </a>
                    
                    <a href = "pages/exams/exams.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                        <li class = "side-menu" id = "exam"><i class="fas fa-university"></i> Exams</li>
                        <!-- Display only on small screens (md and lower) -->
                        <li class = "side-menu-small-screen" id = "exam" title = "Exams"><i class="fas fa-university"></i></li>
                    </a>
                    
                    <li class = "side-menu" id = "planMenu"><i class="fas fa-map"></i> Study Plan <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "planMenu" title = "Study Plan"><i class="fas fa-map"></i></li>
                    
                    <div id = "planMenu" class = "sis-nested-menu">
                        <a href="pages/plan/program-plan.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Program Plan</li>
                            <li class = "side-menu-small-screen" title = "Program Plan"><i class="fas fa-user-tie"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/plan/university-compulsory.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <del><li style = "opacity = 0.3; color: #666666;" class = "side-menu">University Compulsory</li></del>
                            <li class = "side-menu-small-screen" title = "University Compulsory"><i class="fas fa-user-tie"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <a href="pages/plan/mandatory-section.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <del><li style = "opacity = 0.3; color: #666666;" class = "side-menu">Mandatory Section</li></del>
                            <li class = "side-menu-small-screen" title = "Mandatory Section"><i class="fas fa-user-tie"></i> <sup><i class="fas fa-question"></i></sup></li>
                        </a>
                        <a href="pages/plan/college-compulsory.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <del><li style = "opacity = 0.3; color: #666666;" class = "side-menu">College Compulsory</li></del>
                            <li class = "side-menu-small-screen" title = "College Compulsory"><i class="fas fa-user-tie"></i> <sup><i class="fas fa-question"></i></sup></li>
                        </a>
                        <a href="pages/plan/university-elective.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <del><li style = "opacity = 0.3; color: #666666;" class = "side-menu">University Elective</li></del>
                            <li class = "side-menu-small-screen" title = "University Elective"><i class="fas fa-user-tie"></i> <sup><i class="fas fa-question"></i></sup></li>
                        </a>
                        <a href="pages/plan/optional-section.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <del><li style = "opacity = 0.3; color: #666666;" class = "side-menu">Optional Section</li></del>
                            <li class = "side-menu-small-screen" title = "Optional Section"><i class="fas fa-user-tie"></i> <sup><i class="fas fa-question"></i></sup></li>
                        </a>
                        <a href="pages/plan/out-of-plan.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <del><li style = "opacity = 0.3; color: #666666;" class = "side-menu">Out of Plan</li></del>
                            <li class = "side-menu-small-screen" title = "Out of Plan"><i class="fas fa-user-tie"></i> <sup><i class="fas fa-question"></i></sup></li>
                        </a>
                    </div>
                </ul>
                <?php 
                    include("inc/footer.php");
                ?>
            </div>
            <div class = "col-sm-10 col-11 sis-main-page">
                <iframe src = "pages/dashboard.php" class = "sis-management-frame" id = "management-frame" name = "management-frame" scrolling="no" onload="AdjustIframeHeightOnLoad()" style = "min-height: 100vh;"></iframe>
            </div>
        </div>
    </div>
    <!-- Relocate page to top of page when side menu links clicked -->
    <script type = "text/javascript" src = "js/pageHeadLocation.js"></script>
    <script type = "text/javascript" src = "js/dropdown-menu.js"></script>
    <!-- Resize iframe when pages load with different heights -->
    <script type="text/javascript" src = "js/iframe-resize.js"></script>
</body>