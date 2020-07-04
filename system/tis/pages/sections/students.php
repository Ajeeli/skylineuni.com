<?php 
    session_start();
    $title = "SECTION STUDENTS";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Section Students List</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Sections > All Sections Students</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header pt-2 pb-1">
            <div class = "col-9">
                <h4>All Sections Students</h4>
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
                                        <th rowspan = "1" colspan = "1" scope = "col"><img src = "../tutors/img/face.png" class = "table-result-img"></th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Section ID</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Student ID</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Name</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Email</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Phone</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Midterm Exam</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Final Exam</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Course Work</th>
                                        <th class = "action-column" rowspan = "1" colspan = "1" scope = "col">Grade Symbol</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $table1 = "section";
                                    $table2 = "student";
                                    $table3 = "course";
                                    $table4 = "enrollment";
                                    $attribute1 = "section_id";
                                    $attribute2 = "course_id";
                                    $attribute3 = "photo";
                                    $attribute4 = "student_id";
                                    $attribute5 = "fname";
                                    $attribute6 = "lname";
                                    $attribute7 = "email";
                                    $attribute8 = "phone_number";
                                    $attribute9 = "midterm_grade";
                                    $attribute10 = "assignment1_grade";
                                    $attribute11 = "assignment2_grade";
                                    $attribute12 = "final_grade";
                                    $attribute13 = "grade_symbol";
                                    $attribute14 = "section_state";
                                    $attribute15 = "tutor_id";
                                    include("../../php/students-proc.php");
                                    ?>
                                </tbody>
                            </table><br/>
                        </div>
                    </div>
                    <div class = "row"> <!-- Table result count row -->
                        <div class = "col-12">
                            <?php 
                                $table1 = "section";
                                $table2 = "enrollment";
                                $table3 = "student";
                                $attribute1 = "section_id";
                                $attribute2 = "tutor_id";
                                $attribute3 = "student_id";
                                $attribute4 = "section_state";
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