<?php 
    session_start();
    $title = "ADD Section";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Add Section</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Sections > Add Section</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header py-3">
            <div class = "col-9">
                <h4>Basic Information</h4>
            </div>
            <div class = "col-3 text-right rdc-icons">
            </div>
        </div>
        <div class = "row frame-body">
            <div class = "col-10 offset-1">
                <form class = "adding-form py-5" action = "../../php/adding-form.php" method = "post" enctype="multipart/form-data">
                    <!-- Hidden row used for 'adding-form.php' to distinguish between different submitted forms -->
                    <div class = "form-row">
                        <div class = "col-12">
                            <input type = "hidden" class = "form-control" name = "sectionsForm" id = "sectionsForm" value = "sectionsForm">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputSectionID">Section ID<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputSectionID" name = "inputSectionID" placeholder = "10 Maximum Characters..." maxlength = "10" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCourseID">Course<span class = "asterisk">*</span></label>
                            <select name = "inputCourseID" class = "form-control" id="inputCourseID" required>
                                <?php
                                    include("../../inc/courseID.php");
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class = "form-row">
                        <div class = "form-group col-md-12">
                            <label for = "inputTutorID">Tutor<span class = "asterisk">*</span></label>
                            <select name = "inputTutorID" class = "form-control" id="inputTutorID" required>
                                <?php
                                    include("../../inc/professorID.php");
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class = "form-row">
                        <div class="form-group col-md-6">
                            <label for="startDate">Start Date<span class = "asterisk">*</span></label>
                            <input type = "date" class="form-control" id="startDate" name = "startDate" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="semester">Semester<span class = "asterisk">*</span></label>
                            <select name = "semester" class = "form-control" id="semester" required>
                                <option value = "first">First</option>
                                <option value = "second">Second</option>
                                <option value = "third">Third</option>
                            </select>
                        </div>
                    </div>
                    <div class = "form-row">
                        <div class="form-group col-md-6">
                            <label for="midtermExam">Midterm Exam Date<span class = "asterisk">*</span></label>
                            <input type = "date" class="form-control" id="midtermExam" name = "midtermExam" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="finalExam">Final Exam Date<span class = "asterisk">*</span></label>
                            <input type = "date" class="form-control" id="finalExam" name = "finalExam" required>
                        </div>
                    </div>
                    <div class="form-row py-4">
                        <div class = "form-group col-md-6">
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <!--
                                <label class="custom-control-label" for="customCheck1">Agree to <a href = "">terms and conditions</a></label>
                                -->
                            </div>
                        </div>
                        <div class = "form-group col-md-6 text-right">
                            <button type="submit" name = "submit" class="btn btn-primary btn-block">ADD</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>