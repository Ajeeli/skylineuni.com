<?php 
    session_start();
    $title = "SECTIONS";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Sections List</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Sections > All Sections</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header pt-2 pb-1">
            <div class = "col-9">
                <h4>All Sections</h4>
            </div>
            <div class = "col-3 text-right rdc-icons">
            </div>
        </div>
        <div class = "row frame-body py-3">
            <div class = "col-6">
                <a role = "button" class="btn btn-primary" href = "addSection.php">ADD NEW <i class="fas fa-plus fa-custom"></i></a>
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
                                        <th rowspan = "1" colspan = "1" scope = "col">Section ID</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Start Date</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Semester</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Course ID</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Course Name</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Tutor Name</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Midterm Exam</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Final Exam</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Student Count</th>
                                        <th class = "action-column" rowspan = "1" colspan = "1" scope = "col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $table = "section";
                                    $table2 = "course";
                                    $table3 = "tutor";
                                    $attribute1 = "section_id";
                                    $attribute2 = "start_date";
                                    $attribute3 = "semester";
                                    $attribute4 = "course_id";
                                    $attribute5 = "course_name";
                                    $attribute6 = "tutor_id";
                                    $attribute7 = "fname";
                                    $attribute8 = "lname";
                                    $attribute9 = "midterm_exam";
                                    $attribute10 = "final_exam";
                                    $attribute11 = "student_count";
                                    include("../../php/all-users.php");
                                    ?>
                                </tbody>
                            </table><br/>
                        </div>
                    </div>
                    <div class = "row"> <!-- Table result count row -->
                        <div class = "col-12">
                            <?php 
                                $attribute = "section_id";
                                $table = "section";
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