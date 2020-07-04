<?php 
    session_start();
    $title = "EDIT Section";
    $cssLink = "../../css/";
    include("../../inc/header.php");
    include("../../../../db_connection.php");

    function redirect(){
        header("location: ../../../index.php");
        exit;
    }
    
    if(isset($_GET['sectionID']) && $_GET['sectionID'] !== ''){
        $sectionID = $_GET['sectionID'];
        
        $sql = "SELECT * FROM section WHERE section_id = '$sectionID'";
        
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $sectionID = $row['section_id'];
                $courseID = $row['course_id'];
                $tutorID = $row['tutor_id'];
                $date = $row['start_date'];
                $semester = $row['semester'];
                $midExam = $row['midterm_exam'];
                $finalExam = $row['final_exam'];
            }
        }
    } else {
        redirect();
    }
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Edit Section</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Sections > Edit Section</li>
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
                <form class = "adding-form py-5" action = "../../php/editing-form.php" method = "post" enctype="multipart/form-data">
                    <!-- Hidden row used for 'adding-form.php' to distinguish between different submitted forms -->
                    <div class = "form-row">
                        <div class = "col-12">
                            <input type = "hidden" class = "form-control" name = "sectionsFormEdit" id = "sectionsFormEdit" value = "sectionsFormEdit">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputSectionID">Section ID<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputSectionID" name = "inputSectionID" maxlength = "10" value = "<?php echo $sectionID; ?>" required readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCourseID">Course<span class = "asterisk">*</span></label>
                            <select name = "inputCourseID" class = "form-control" id="inputCourseID" required autofocus>
                                <?php
                                    $sql = "SELECT course_id, course_name FROM course";

                                    $result = $mysqli->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            if ($row["course_id"] == $courseID) {
                                            ?>
                                                <option value = "<?php echo $row["course_id"]; ?>" selected><?php echo '[' . $row["course_id"] . '] '; ?><?php echo $row["course_name"]; ?></option>
                                            <?php
                                          } else {
                                            ?>
                                                <option value = "<?php echo $row["course_id"]; ?>"><?php echo '[' . $row["course_id"] . '] '; ?><?php echo $row["course_name"]; ?></option>
                                                <?php
                                            }
                                        }
                                    } else {
                                        ?>
                                        <option value = "" disabled>No Courses Available</option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class = "form-row">
                        <div class = "form-group col-md-12">
                            <label for = "inputTutorID">Tutor<span class = "asterisk">*</span></label>
                            <select name = "inputTutorID" class = "form-control" id="inputTutorID" required>
                                <?php
                                    $sql = "select tutor_id, fname, lname from tutor";

                                    $result = $mysqli->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            if ($row["tutor_id"] == $tutorID) {
                                            ?>
                                                <option value = "<?php echo $row["tutor_id"]; ?>" selected><?php echo '[' . $row["tutor_id"] . '] '; ?> <?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value = "<?php echo $row["tutor_id"]; ?>"><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></option>
                                                <?php
                                            }
                                        }
                                    } else {
                                        ?>
                                        <option value = "" disabled>No Tutors Available</option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class = "form-row">
                        <div class="form-group col-md-6">
                            <label for="startDate">Start Date<span class = "asterisk">*</span></label>
                            <input type = "date" class="form-control" id="startDate" name = "startDate" value = "<?php echo $date; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="semester">Semester<span class = "asterisk">*</span></label>
                            <select name = "semester" class = "form-control" id="semester" required>
                                <?php 
                                    if ($semester == "first"){ ?>
                                        <option value = "first" selected>First</option>
                                        <option value = "second">Second</option>
                                        <option value = "third">Third</option>
                                <?php
                                    } else if ($semester == "second"){ ?>
                                        <option value = "first">First</option>
                                        <option value = "second" selected>Second</option>
                                        <option value = "third">Third</option>
                                <?php
                                    } else if ($semester == "third"){ ?>
                                        <option value = "first">First</option>
                                        <option value = "second">Second</option>
                                        <option value = "third" selected>Third</option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class = "form-row">
                        <div class="form-group col-md-6">
                            <label for="midtermExam">Midterm Exam Date<span class = "asterisk">*</span></label>
                            <input type = "date" class="form-control" id="midtermExam" name = "midtermExam" value = "<?php echo $midExam; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="finalExam">Final Exam Date<span class = "asterisk">*</span></label>
                            <input type = "date" class="form-control" id="finalExam" name = "finalExam" value = "<?php echo $finalExam; ?>" required>
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
                            <button type="submit" name = "submit" class="btn btn-primary btn-block">CONFIRM</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>

<?php 
$mysqli->close();
?>