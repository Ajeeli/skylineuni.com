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
            <div class="col-12 dropdown text-right">
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
                                        <th rowspan = "1" colspan = "1" scope = "col">Section ID <i class="fas fa-sort"></i></th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Course ID</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Course Name</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Credits</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Tutor Name</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Semester</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Start Date</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Midterm Exam</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Final Exam</th>
                                        <th class = "action-column" rowspan = "1" colspan = "1" scope = "col">Student Count</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $table = "section";
                                    $table2 = "course";
                                    $table3 = "tutor";
                                    $attribute1 = "section_id";
                                    $attribute2 = "course_id";
                                    $attribute3 = "course_name";
                                    $attribute4 = "credits";
                                    $attribute5 = "tutor_id";
                                    $attribute6 = "fname";
                                    $attribute7 = "lname";
                                    $attribute8 = "semester";
                                    $attribute9 = "start_date";
                                    $attribute10 = "midterm_exam";
                                    $attribute11 = "final_exam";
                                    $attribute12 = "student_count";
                                    $attribute13 = "section_state";
                                    include("../../php/section-proc.php");
                                    ?>
                                </tbody>
                            </table><br/>
                        </div>
                    </div>
                    <div class = "row"> <!-- Table result count row -->
                        <div class = "col-12">
                            <?php 
                                $attribute1 = "section_id";
                                $attribute2 = "tutor_id";
                                $table1 = "section";
                                $table2 = "tutor";
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