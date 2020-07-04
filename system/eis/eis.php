<?php
    session_start();
    if(!isset($_SESSION['sysLogin']['EISLogin']) || $_SESSION['sysLogin']['EISLogin'] != true) {
        header('Location: ../index.php');
    } else if(isset($_SESSION['sysLogin']['EISLogin']) && $_SESSION['sysLogin']['EISLogin'] == true) {
        include('../../db_connection.php');
        
        $onlineExecutive = $_SESSION['executive']['id'];
        // Update executive online_status to 1 when signing in so that he shows up as online to other executives in the EIS dashboard
        $sql = "UPDATE executive SET online_status = 1 WHERE executive_id = $onlineExecutive";
        $mysqli->query($sql);
        $mysqli->close();
    }

    $title = "EXECUTIVE INFORMATION SYSTEM";
    $cssLink = "css/";
    include ("inc/header.php");
?>

<body>
    <div class = "container-fluid">
        <div class = "row" style = "box-shadow: 0 3px 7px grey;">
            <div class = "brand col-sm-2 col-1 py-2">
                <h1 class = "sys-user text-center">EIS</h1>
                <i title = "executive" class="sys-user fas fa-user-cog"></i>
            </div>
            <div class = "col-sm-10 col-11 py-2 top-menu-bar">
                <nav class="navbar navbar-expand-sm">
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link logout" href="../index.php" title = "Logout"><i class="fas fa-power-off"></i></a>
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
                        <button type="button" class="btn dropdown-toggle user-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php 
                                include("php/user-image.php");
                            ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!--<button class="dropdown-item" type="button">Profile</button>
                            <button class="dropdown-item" type="button">Settings</button>-->
                            <button class="dropdown-item" type="button"><a href = "../index.php">Log Out</a></button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-sm-2 col-1 side-menu-bar">
                <div class = "row side-bar-row1 text-center" id = "pageHead">
                    <?php 
                        include ("php/side-user-image.php");
                    ?>
                </div>
                <ul>
                    <a href = "pages/dashboard.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                        <li class = "side-menu" id = "dashboard"><i class="fas fa-columns"></i> Dashboard</li>
                        <!-- Display only on small screens (md and lower) -->
                        <li class = "side-menu-small-screen" id = "dashboard" title = "Dashboard"><i class="fas fa-columns"></i></li>
                    </a>
                    
                    <li class = "side-menu" id = "collegeMenu"><i class="fas fa-university"></i> Colleges <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "collegeMenu" title = "Colleges"><i class="fas fa-university"></i></li>
                    
                    <div id = "collegeMenu" class = "nested-menu">
                        <a href="pages/colleges/colleges.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Colleges</li>
                            <li class = "side-menu-small-screen" title = "All Colleges"><i class="fas fa-university"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/colleges/addCollege.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add College</li>
                            <li class = "side-menu-small-screen" title = "Add College"><i class="fas fa-university"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <!--
                        <del><a href="pages/colleges/aboutCollege.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">About College</li>
                            <li class = "side-menu-small-screen" title = "About College"><i class="fas fa-university"></i> <sup><i class="fas fa-question"></i></sup></li>
                            </a></del>
                        -->
                    </div>
            
                    <li class = "side-menu" id = "programMenu"><i class="fas fa-th-list"></i> Programs <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "programMenu" title = "Programs"><i class="fas fa-th-list"></i></li>
            
                    <div id = "programMenu" class = "nested-menu">
                        <a href="pages/programs/programs.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Programs</li>
                            <li class = "side-menu-small-screen" title = "All Programs"><i class="fas fa-th-list"></i><sup> <i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/programs/addProgram.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Program</li>
                            <li class = "side-menu-small-screen" title = "Add Program"><i class="fas fa-th-list"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <!--
                        <del><a href="#" class = "side-menu-links" onclick = "pageHead()">
                                <li class = "side-menu">About Program</li>
                                <li class = "side-menu-small-screen" title = "About Program"><i class="fas fa-th-list"></i> <sup><i class="fas fa-question"></i></sup></li>
                            </a></del>
                        -->
                    </div>
            
                    <li class = "side-menu" id = "courseMenu"><i class="fas fa-book"></i> Courses <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "courseMenu" title = "Courses"><i class="fas fa-book"></i></li>
            
                    <div id = "courseMenu" class = "nested-menu">
                        <a href="pages/courses/courses.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Courses</li>
                            <li class = "side-menu-small-screen" title = "All Courses"><i class="fas fa-book"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/courses/addCourse.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Course</li>
                            <li class = "side-menu-small-screen" title = "Add Course"><i class="fas fa-book"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <a href="pages/courses/material.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Material</li>
                            <li class = "side-menu-small-screen" title = "All Material"><i class="fas fa-book"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <a href="pages/courses/add-material.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Material</li>
                            <li class = "side-menu-small-screen" title = "Add Material"><i class="fas fa-book"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <!--
                        <del><a href="#" class = "side-menu-links" onclick = "pageHead()">
                                <li class = "side-menu">About Course</li>
                                <li class = "side-menu-small-screen" title = "About Course"><i class="fas fa-book"></i> <sup><i class="fas fa-question"></i></sup></li>
                            </a></del>
                        -->
                    </div>
                    
                    <li class = "side-menu" id = "sectionMenu"><i class="fas fa-building"></i> Sections <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "sectionMenu" title = "Sections"><i class="fas fa-building"></i></li>
                    
                    <div id = "sectionMenu" class = "nested-menu">
                        <a href="pages/sections/sections.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Sections</li>
                            <li class = "side-menu-small-screen" title = "All Sections"><i class="fas fa-building"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/sections/addSection.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Section</li>
                            <li class = "side-menu-small-screen" title = "Add Section"><i class="fas fa-building"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <!--
                        <del><a href="pages/sections/aboutSections.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">About Section</li>
                            <li class = "side-menu-small-screen" title = "About Section"><i class="fas fa-building"></i> <sup><i class="fas fa-question"></i></sup></li>
                            </a></del>
                        -->
                    </div>
                    
                <!--
                    <a href = "pages/events.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                        <del><li style = "background-color: #cccccc; color: #666666;" class = "side-menu" id = "event"><i class="fas fa-calendar-alt"></i> Event Management</li>
                        <!-- Display only on small screens (md and lower) -->
                    <!--
                            <li class = "side-menu-small-screen" id = "event" title = "Event Management"><i class="fas fa-calendar-alt"></i></li></del>
                    </a>
                -->
                    <li class = "side-menu" id = "executiveMenu"><i class="fas fa-user-tie"></i> Executives <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "executiveMenu" title = "Executives"><i class="fas fa-user-cog"></i></li>
                    
                    <div id = "executiveMenu" class = "nested-menu">
                        <a href="pages/executives/executives.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Executives</li>
                            <li class = "side-menu-small-screen" title = "All Executives"><i class="fas fa-user-cog"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/executives/addExecutive.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Executive</li>
                            <li class = "side-menu-small-screen" title = "Add Executive"><i class="fas fa-user-cog"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <!--
                        <del><a href="pages/executives/aboutExecutive.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">About Executive</li>
                            <li class = "side-menu-small-screen" title = "About Executive"><i class="fas fa-user-cog"></i> <sup><i class="fas fa-question"></i></sup></li>
                            </a></del>
                        -->
                    </div>
                    
                    <li class = "side-menu" id = "professorMenu"><i class="fas fa-chalkboard-teacher"></i> Professors <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "professorMenu" title = "Professors"><i class="fas fa-chalkboard-teacher"></i></li>
                    
                    <div id = "professorMenu" class = "nested-menu">
                        <a href="pages/professors/professors.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Professors</li>
                            <li class = "side-menu-small-screen" title = "All Professors"><i class="fas fa-chalkboard-teacher"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/professors/addProfessor.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Professor</li>
                            <li class = "side-menu-small-screen" title = "Add Professor"><i class="fas fa-chalkboard-teacher"></i><sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <!--
                        <del><a href="pages/professors/aboutProfessor.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">About Professor</li>
                            <li class = "side-menu-small-screen" title = "About Professor"><i class="fas fa-chalkboard-teacher"></i> <sup><i class="fas fa-question"></i></sup></li>
                            </a></del>
                        -->
                    </div>

                    <li class = "side-menu" id = "studentMenu"><i class="fas fa-user-graduate"></i> Students <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "studentMenu" title = "Students"><i class="fas fa-user-graduate"></i></li>
                    
                    <div id = "studentMenu" class = "nested-menu">
                        <a href="pages/students/students.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Students</li>
                            <li class = "side-menu-small-screen" title = "All Students"><i class="fas fa-user-graduate"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/students/addStudent.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Student</li>
                            <li class = "side-menu-small-screen" title = "Add Student"><i class="fas fa-user-graduate"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <!--
                        <a href="#" class = "side-menu-links"><li>Edit Student</li></a>
                        -->
                        <!--
                        <del><a href="#" class = "side-menu-links" onclick = "pageHead()">
                                <li class = "side-menu">About Student</li>
                                <li class = "side-menu-small-screen" title = "About Student"><i class="fas fa-user-graduate"></i> <sup><i class="fas fa-question"></i></sup></li>
                            </a></del>
                        -->
                    </div>
                    
                    <?php /*
                    <li class = "side-menu" id = "staffMenu"><i class="fas fa-users"></i> Staff <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "staffMenu" title = "Staff"><i class="fas fa-users"></i></li>
            
                    <div id = "staffMenu" class = "nested-menu">
                        <a href="pages/staff/staff.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Staff</li>
                            <li class = "side-menu-small-screen" title = "All Staff"><i class="fas fa-users"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/staff/addStaff.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Staff</li>
                            <li class = "side-menu-small-screen" title = "Add Staff"><i class="fas fa-users"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <del><a href="#" class = "side-menu-links" onclick = "pageHead()">
                                <li class = "side-menu">Staff Profile</li>
                                <li class = "side-menu-small-screen" title = "About Staff"><i class="fas fa-users"></i> <sup><i class="fas fa-question"></i></sup></li>
                            </a></del>
                    </div>
                    */?>
                    
                    <!--
                    <li class = "side-menu" id = "libraryMenu"><i class="fas fa-book-reader"></i> Library <i class="dropArrow fas fa-angle-right"></i></li></del>
                    <!-- Display only on small screens (md and lower) -->
                    <!--
                    <li class = "side-menu-small-screen" id = "libraryMenu" title = "Library"><i class="fas fa-book-reader"></i></li>
        
                    <div id = "libraryMenu" class = "nested-menu">
                        <a href="#" class = "side-menu-links">
                            <li class = "side-menu">All Library Assets</li>
                            <li class = "side-menu-small-screen" title = "All Library Assets"><i class="fas fa-book-reader"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="#" class = "side-menu-links">
                            <li class = "side-menu">Add Library Asset</li>
                            <li class = "side-menu-small-screen" title = "Add Library Asset"><i class="fas fa-book-reader"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>           
                    </div>
                    -->
                    
                    <li class = "side-menu" id = "salaryMenu"><i class="fas fa-dollar-sign"></i> Salaries <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "salaryMenu" title = "Salaries"><i class="fas fa-dollar-sign"></i></li>
        
                    <div id = "salaryMenu" class = "nested-menu">
                        <a href="pages/salaries/salaries.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Salaries</li>
                            <li class = "side-menu-small-screen" title = "All Salaries"><i class="fas fa-dollar-sign"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/salaries/addSalary.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Salary</li>
                            <li class = "side-menu-small-screen" title = "Add Salary"><i class="fas fa-dollar-sign"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                    </div>
                <!--    
                    <del><li style = "background-color: #cccccc; color: #666666;" class = "side-menu" id = "emailMenu"><i class="fas fa-envelope"></i> Email <i class="dropArrow fas fa-angle-right"></i></li></del>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "emailMenu" title = "Email"><i class="fas fa-envelope"></i></li>
        
                    <div id = "emailMenu" class = "nested-menu">
                        <a href="#" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Inbox</li>
                            <li class = "side-menu-small-screen" title = "All Inbox"><i class="fas fa-envelope"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="#" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Compose Mail</li>
                            <li class = "side-menu-small-screen" title = "Compose Mail"><i class="fas fa-envelope"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <a href="#" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">View Mail</li>
                            <li class = "side-menu-small-screen" title = "View Mail"><i class="fas fa-envelope"></i> <sup><i class="fas fa-question"></i></sup></li>
                        </a>
                    </div>
                    
                    <!--
                    <li class = "side-menu" id = "feeMenu"><i class="fas fa-credit-card"></i> Fees <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <!--
                    <li class = "side-menu-small-screen" id = "feeMenu" title = "Fees"><i class="fas fa-credit-card"></i></li>
        
                    <div id = "feeMenu" class = "nested-menu">
                        <a href="#" class = "side-menu-links">
                            <li class = "side-menu">Fees Collection</li>
                            <li class = "side-menu-small-screen" title = "All Fees"><i class="fas fa-credit-card"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="#" class = "side-menu-links">
                            <li class = "side-menu">Add Fees</li>
                            <li class = "side-menu-small-screen" title = "Add Fees"><i class="fas fa-credit-card"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                        <a href="#" class = "side-menu-links">
                            <li class = "side-menu">Fee Receipt</li>
                            <li class = "side-menu-small-screen" title = "About Fee"><i class="fas fa-credit-card"></i> <sup><i class="fas fa-question"></i></sup></li>
                        </a>
                    </div>
                    -->
                    
                </ul>
                <?php 
                    include("inc/footer.php");
                ?>
            </div>  
            <div class = "col-sm-10 col-11 main-page">
                <iframe src = "pages/dashboard.php" class = "management-frame" id = "management-frame" name = "management-frame" scrolling="no" onload="AdjustIframeHeightOnLoad()" style = "min-height: 100vh;"></iframe>
            </div>
        </div>
    </div>
    <!-- Relocate page to top of page when side menu links clicked -->
    <script type = "text/javascript" src = "js/pageHeadLocation.js"></script>
    <script type = "text/javascript" src = "js/dropdown-menu.js"></script>
    <!-- Resize iframe when pages load with different heights -->
    <script type="text/javascript" src = "js/iframe-resize.js"></script>
</body>