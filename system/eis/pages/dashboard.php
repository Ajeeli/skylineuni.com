<?php 
    session_start();
    $title = "DASHBOARD";
    $cssLink = "../css/";
    include("../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Dashboard</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
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
                        <div class="card dashboard-card">
                            <div class="panel-body dashboard-panel">
                                <h3>Total Students</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 65%;"></div>
                                </div>
                                <span class="text-small margin-top-10 full-width">14% higher than last month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 mb-md-4 mb-4">
                        <div class="card dashboard-card">
                            <div class="panel-body dashboard-panel">
                                <h3>New Students</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                <span class="text-small margin-top-10 full-width">7% higher than last month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 mb-md-0 mb-4">
                        <div class="card dashboard-card">
                            <div class="panel-body dashboard-panel">
                                <h3>Total Courses</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                                <span class="text-small margin-top-10 full-width">34% higher than last month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="card dashboard-card">
                            <div class="panel-body dashboard-panel">
                                <h3>Visitors</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="56" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 56%;"></div>
                                </div>
                                <span class="text-small margin-top-10 full-width">20% higher than last month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0 ChartDiv">
                <div class = "hover-moveUP" id="incomeExpenseChart"></div>
            </div>
        </div>
        <!-- Inline CSS Style -->
        <div class="row secondRow">
            <div class="col-lg-8 col-12 mt-5 yy">
                <div class = "hover-moveUP">
                    <div class = "row frame-header pt-2 pb-1">
                        <div class = "col-9">
                            <h4>New Students</h4>
                        </div>
                    </div>
                    <div class = "row frame-body frame-tools py-3">
                        <div class = "col-6">
                            <a role = "button" class="btn btn-primary" href = "students/addStudent.php">ADD NEW <i class="fas fa-plus fa-custom"></i></a>
                        </div>
                        <!--
                        <div class="col-6 dropdown text-right">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                TOOLS
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-print"></i> Print</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i> Save as PDF</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> Export to Excel</a>
                            </div>
                        </div>
                        -->
                    </div>
                    <div class = "row frame-body dashboardStudents">
                        <div class = "col-12 mb-3">
                            <form action = "" method = "post" class = "result-form py-3 pl-3 pr-3">
                                <div class = "row">
                                    <div class = "col-12 table-responsive">
                                        <table class = "table result-table table-striped table-bordered table-hover mt-4">
                                            <thead>
                                                <tr role = "row">
                                                    <th rowspan = "1" colspan = "1" scope = "col"><img src = "executives/img/face.png" class = "table-result-img"></th>
                                                    <th rowspan = "1" colspan = "1" scope = "col">Student ID<!--<i class="fas fa-sort"></i>--></th>
                                                    <th rowspan = "1" colspan = "1" scope = "col">Name<!--<i class="fas fa-sort"></i>--></th>
                                                    <th rowspan = "1" colspan = "1" scope = "col">Joining Date<!--<i class="fas fa-sort"></i>--></th>
                                                    <th class = "action-column" rowspan = "1" colspan = "1" scope = "col">Action<!--<span class = "action-column">Space</span><i class="fas fa-sort"></i>--></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $table = "student";
                                                $attribute1 = "photo";
                                                $attribute2 = "student_id";
                                                $attribute3 = "fname";
                                                $attribute4 = "start_date"; 
                                                $attribute5 = "dashboardStudents";
                                                include("../php/dashboardProcess.php");
                                                ?>
                                            </tbody>
                                        </table><br/>
                                    </div>
                                </div>
                                <div class = "row"> <!-- Table result count row -->
                                    <div class = "col-12">
                                        <?php
                                        $attribute = "fname";
                                        $table = "student";
                                        include("../php/result-count.php");
                                        ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-lg-4 col-12 mt-5 xx">
                <!--Table-->
                <table class="table userOnlineTable table-striped hover-moveUP">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th><img src = "executives/img/face.png" class = "table-result-img"></th>
                            <th>Users</th>
                            <th>Online</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    
                    <!--Table body-->
                    <tbody>
                        <?php 
                            include("../php/onlineUsers.php");
                        ?>
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>
        </div>
        <div class = "row">
            <div class="col-lg-4 col-12 mt-lg-4 pt-lg-4 pt-0 mt-lg-0 ChartDiv">
                <div id="employeesChart"></div>
            </div>
            <div class="col-lg-4 col-12 mt-lg-4 pt-lg-4 pt-0 mt-lg-0 ChartDiv">
                <div id="programsChart"></div>
            </div>
            <div class="col-lg-4 col-12 mt-lg-4 pt-lg-4 pt-0 mt-lg-0 ChartDiv">
                <div id="studentsChart"></div>
            </div>
        </div>
    </div>

    <script src = "../js/charts.js" type = "text/javascript"></script>
    <script type="text/javascript" src = "../js/iframe-resize-pages.js">
    </script>
</body>