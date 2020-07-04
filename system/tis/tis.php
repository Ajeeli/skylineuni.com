<?php
    session_start();
    if (!isset($_SESSION['sysLogin']['TISLogin']) || $_SESSION['sysLogin']['TISLogin'] != true) {
        header('Location: ../index.php');
    } else if (isset($_SESSION['sysLogin']['TISLogin']) && $_SESSION['sysLogin']['TISLogin'] == true) {
        include('../../db_connection.php');
        
        $onlineTutor = $_SESSION['tutor']['id'];
        // Update tutor online_status to 1 when signing in so that he shows up as online to other tutors in the TIS dashboard
        $sql = "UPDATE tutor SET online_status = 1 WHERE tutor_id = $onlineTutor";
        $mysqli->query($sql);
        $mysqli->close();
    }

    $title = "TUTOR INFORMATION SYSTEM";
    $cssLink = "css/";
    include ("inc/header.php");
?>

<body>
    <div class = "container-fluid">
        <div class = "row" style = "box-shadow: 0 3px 7px grey;">
            <div class = "brand col-sm-2 col-1 py-2">
                <h1 class = "sys-user text-center">TIS</h1>
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
                            <!--
                            <button class="dropdown-item" type="button">Profile</button>
                            <button class="dropdown-item" type="button">Settings</button>
                            -->
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
            
                    <li class = "side-menu" id = "sectionMenu"><i class="fas fa-building"></i> Sections <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "sectionMenu" title = "Sections"><i class="fas fa-building"></i></li>
                    
                    <div id = "sectionMenu" class = "nested-menu">
                        <a href="pages/sections/sections.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Sections</li>
                            <li class = "side-menu-small-screen" title = "All Sections"><i class="fas fa-building"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/sections/students.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Sections Students</li>
                            <li class = "side-menu-small-screen" title = "Sections Students"><i class="fas fa-building"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                    </div>
                    
                    <li class = "side-menu" id = "courseMenu"><i class="fas fa-book"></i> Courses <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "courseMenu" title = "Courses"><i class="fas fa-book"></i></li>
            
                    <div id = "courseMenu" class = "nested-menu">
                        <a href="pages/courses/courses.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Courses</li>
                            <li class = "side-menu-small-screen" title = "All Courses"><i class="fas fa-book"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/courses/add-material.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Material</li>
                            <li class = "side-menu-small-screen" title = "Add Material"><i class="fas fa-book"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                    </div>
                    
                    <li class = "side-menu" id = "assignmentMenu"><i class="fas fa-user-tie"></i> Assignments <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "assignmentMenu" title = "Assignments"><i class="fas fa-user-cog"></i></li>
                    
                    <div id = "assignmentMenu" class = "nested-menu">
                        <a href="pages/assignments/assignment1.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">All Assignments</li>
                            <li class = "side-menu-small-screen" title = "All Assignments"><i class="fas fa-user-cog"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/assignments/addAssignment1.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Add Assignment</li>
                            <li class = "side-menu-small-screen" title = "Add Assignment"><i class="fas fa-user-cog"></i> <sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                    </div>
                    
                    <li class = "side-menu" id = "examMenu"><i class="fas fa-chalkboard-teacher"></i> Exams <i class="dropArrow fas fa-angle-right"></i></li>
                    <!-- Display only on small screens (md and lower) -->
                    <li class = "side-menu-small-screen" id = "examMenu" title = "Exams"><i class="fas fa-chalkboard-teacher"></i></li>
                    
                    <div id = "examMenu" class = "nested-menu">
                        <a href="pages/exams/midterm.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Midterm</li>
                            <li class = "side-menu-small-screen" title = "Midterm"><i class="fas fa-chalkboard-teacher"></i> <sup><i class="fas fa-star-of-life"></i></sup></li>
                        </a>
                        <a href="pages/exams/final.php" target = "management-frame" class = "side-menu-links" onclick = "pageHead()">
                            <li class = "side-menu">Final</li>
                            <li class = "side-menu-small-screen" title = "Final"><i class="fas fa-chalkboard-teacher"></i><sup><i class="fas fa-plus"></i></sup></li>
                        </a>
                    </div>

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