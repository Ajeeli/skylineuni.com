<?php 
    session_start();
    $title = "DASHBOARD";
    $cssLink = "../css/";
    include("../inc/header.php");
?>
<body class = "sis-system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3 class = "sis-orange-text">Dashboard</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb sis-breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- start widget -->
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="row clearfix">
                    <div class="col-sm-6 col-12 mb-md-4 mb-4">
                        <div class="card sis-dashboard-card">
                            <div class="panel-body dashboard-panel">
                                <h3>GPA</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 65%;"></div>
                                </div>
                                <span class="text-small margin-top-10 full-width">14% higher than last semester</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 mb-md-4 mb-4">
                        <div class="card sis-dashboard-card">
                            <div class="panel-body dashboard-panel">
                                <h3>Attendance</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                <span class="text-small margin-top-10 full-width">7% higher than last month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 mb-md-0 mb-4">
                        <div class="card sis-dashboard-card">
                            <div class="panel-body dashboard-panel">
                                <h3>Courses Complete</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                                <span class="text-small margin-top-10 full-width">34% of courses completed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="card sis-dashboard-card">
                            <div class="panel-body dashboard-panel">
                                <h3>Courses Incomplete</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="56" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 56%;"></div>
                                </div>
                                <span class="text-small margin-top-10 full-width">66% of courses remaining</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0 ChartDiv">
                <div class = "hover-moveUP" id="deptChart"></div>
            </div>
        </div>
        <!-- Inline CSS Style -->
        <div class="row secondRow">
            <div class="col-lg-8 col-12 mt-5 yy">
                <div class = "hover-moveUP">
                    <div class = "row frame-header pt-2 pb-1">
                        <div class = "col-9">
                            <h4>Courses Enrolled</h4>
                        </div>
                        <div class = "col-3 text-right rdc-icons">
                        </div>
                    </div>
                    <div class = "row frame-body frame-tools py-3">
                        <div class = "col-6">
                            <a role = "button" class="btn btn-primary" href = "courses/enrollment.php">ADD COURSE <i class="fas fa-plus fa-custom"></i></a>
                        </div>
                        <div class="col-6 dropdown text-right">
                        </div>
                    </div>
                    <div class = "row frame-body dashboardStudents">
                        <div class = "col-12 mb-3">
                            <table class = "table table-striped table-bordered table-hover mt-4 text-center">
                                <thead>
                                    <tr>
                                        <th scope = "col">Course ID</th>
                                        <th scope = "col">Course Name</th>
                                        <th scope = "col">Students</th>
                                        <th scope = "col">Tutor Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include("../php/dashboard-schedule-proc.php");
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-lg-4 col-12 mt-5 xx">
                <!--Table-->
                <table class="table userOnlineTable sis-userOnlineTable table-striped hover-moveUP">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th scope = "col"><img src = "../img/face.png" class = "table-result-img"></th>
                            <th scope = "col">Students</th>
                            <th scope = "col">Online</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    
                    <!--Table body-->
                    <tbody>
                        <?php 
                            include("../php/online-students.php");
                        ?>
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>
        </div>
        <div class = "row">
            <div class="col-lg-4 col-12 mt-lg-4 pt-lg-4 pt-0 mt-lg-0 ChartDiv">
                <div id="sisEmployeesChart"></div>
            </div>
            <div class="col-lg-4 col-12 mt-lg-4 pt-lg-4 pt-0 mt-lg-0 ChartDiv">
                <div id="sisProgramsChart"></div>
            </div>
            <div class="col-lg-4 col-12 mt-lg-4 pt-lg-4 pt-0 mt-lg-0 ChartDiv">
                <div id="sisStudentsChart"></div>
            </div>
        </div>
    </div>

    <script type = "text/javascript" src = "../js/sis-charts.js"></script>
    <script type="text/javascript" src = "../js/iframe-resize-pages.js"></script>
</body>