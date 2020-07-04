<?php 
    session_start();
    $title = "COURSES";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-md-6 col-12 pt-2">
                <h3>Courses List</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Courses > All Courses</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header pt-2 pb-1">
            <div class = "col-9">
                <h4>All Courses</h4>
            </div>
            <div class = "col-3 text-right rdc-icons">
                
            </div>
        </div>
        <div class = "row frame-body py-3">
            <div class = "col-6">
                <a role = "button" class="btn btn-primary" href = "addCourse.php">ADD NEW <i class="fas fa-plus fa-custom"></i></a>
            </div>
            <div class="col-6 dropdown text-right">
            </div>
        </div>
        <div class = "row frame-body">
            <div class = "col-12 mb-3">
                <form action = "" method = "post" class = "result-form pt-3 pl-3 pr-3">
                    <div class = "row">
                        <div class = "col-12 table-responsive">
                            <table class = "table result-table table-striped table-bordered table-hover mt-4">
                                <thead>
                                    <tr role = "row">
                                        <th rowspan = "1" colspan = "1" scope = "col">Course ID</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Course Name</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Credits</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Prerequisite</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Launch Date</th>
                                        <th rowspan = "1" colspan = "1">Program Name</th>
                                        <th class = "action-column" rowspan = "1" colspan = "1" scope = "col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $table = "course";
                                    $table2 = "program";
                                    $attribute1 = "course_id";
                                    $attribute2 = "course_name";
                                    $attribute3 = "credits";
                                    $attribute4 = "prerequisite";
                                    $attribute5 = "launch_date";
                                    $attribute6 = "program_name";
                                    $attribute7 = "program_id";
                                    include("../../php/all-users.php");
                                    ?>
                                </tbody>
                            </table><br/>
                        </div>
                    </div>
                    <div class = "row"> <!-- Table result count row -->
                        <div class = "col-12">
                            <?php 
                                $attribute = "course_id";
                                $table = "course";
                                include("../../php/result-count.php");
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>