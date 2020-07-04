<?php 
    session_start();
    $title = "ADD COURSE";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Add Course</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Courses > Add Course</li>
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
                            <input type = "hidden" class = "form-control" name = "coursesForm" id = "coursesForm" value = "coursesForm">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCourseID">Course ID<span class = "asterisk">*</span></label>
                            <input type="text" class = "form-control" id="inputCourseID" name = "inputCourseID" placeholder = "10 Maximum Characters..." maxlength = "10" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCourseName">Course Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputCourseName" name = "inputCourseName" maxlength = "100" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCredits">Credits<span class = "asterisk">*</span></label>
                            <select id="inputCredits" name = "inputCredits" class="form-control" required>
                                <option value = "1">1</option>
                                <option value = "2">2</option>
                                <option value = "3" selected>3</option>
                                <option value = "4">4</option>
                                <option value = "5">5</option>
                                <option value = "6">6</option>
                                <option value = "7">7</option>
                                <option value = "8">8</option>
                                <option value = "9">9</option>
                                <option value = "10">10</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPrerequisite">Prerequisite</label>
                            <select name = "inputPrerequisite" class = "form-control" id="inputPrerequisite">
                                <option value = "">-</option>
                                <?php
                                    include("../../inc/courseID.php");
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCourseFee">Course Fee</label>
                            <input type="number" min = "0" max = "99999" class="form-control" id="inputCourseFee" name = "inputCourseFee">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCourseType">Course Type<span class = "asterisk">*</span></label>
                            <select name = "inputCourseType" class = "form-control" id="inputCourseType" required>
                                <?php
                                    include("../../inc/courseType.php");
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputProgramID">Program<span class = "asterisk">*</span></label>
                            <select name = "inputProgramID" class = "form-control" id="inputProgramID" required>
                                <?php
                                    include("../../inc/programID.php");
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLaunchDate">Launch Date</label>
                            <input type="date" class="form-control" id="inputLaunchDate" name = "inputLaunchDate">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputDescription">Course Description</label>
                            <textarea maxlength="1000" rows = "3" class="form-control" id="inputDescription" name = "inputDescription" placeholder="1000 maximum characters..."></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="custom-file my-3">
                            <input type="file" class="custom-file-input" id="uploadImage" name = "uploadImage">
                            <label class="custom-file-label" for="customFile">Upload Image</label>
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