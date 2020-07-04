<?php 
    session_start();
    $title = "EDIT COURSE";
    $cssLink = "../../css/";
    include("../../inc/header.php");
    include("../../../../db_connection.php");

    function redirect(){
        header("location: ../../../index.php");
        exit;
    }
    
    if(isset($_GET['courseID']) && $_GET['courseID'] !== ''){
        $courseID = $_GET['courseID'];
        
        $sql = "SELECT * FROM course WHERE course_id = '$courseID'";
        
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $courseID = $row['course_id'];
                $programID = $row['program_id'];
                $courseType = $row['course_type'];
                $prerequisite = $row['prerequisite'];
                $courseName = $row['course_name'];
                $credits = $row['credits'];
                $courseFee = $row['course_fee'];
                $date = $row['launch_date'];
                $description = $row['description'];
                $photo = $row['photo'];
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
                <h3>Edit Course</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Courses > Edit Course</li>
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
                            <input type = "hidden" class = "form-control" name = "coursesFormEdit" id = "coursesFormEdit" value = "coursesFormEdit">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCourseID">Course ID<span class = "asterisk">*</span></label>
                            <input type="text" class = "form-control" id="inputCourseID" name = "inputCourseID" maxlength = "10" value = "<?php echo $courseID; ?>" required readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCourseName">Course Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputCourseName" name = "inputCourseName" maxlength = "100" value = "<?php echo $courseName; ?>" required autofocus>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCredits">Credits<span class = "asterisk">*</span></label>
                            <select id="inputCredits" name = "inputCredits" class="form-control" required>
                                <?php 
                                    for ($i = 1; $i < 11; $i++){
                                        if ($credits == $i) {
                                            ?>
                                                <option value = "<?php echo $i; ?>" selected><?php echo $i; ?></option>
                                            <?php
                                        } else {
                                            ?>
                                                <option value = "<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPrerequisite">Prerequisite</label>
                            <select name = "inputPrerequisite" class = "form-control" id="inputPrerequisite">
                                <option value = "">-</option>
                                <?php
                                    $sql = "SELECT course_id, course_name FROM course";

                                    $result = $mysqli->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            if ($row["course_id"] == $prerequisite) {
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
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCourseFee">Course Fee</label>
                            <input type="number" min = "0" max = "99999" class="form-control" id="inputCourseFee" name = "inputCourseFee" value = "<?php echo $courseFee; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCourseType">Course Type<span class = "asterisk">*</span></label>
                            <select name = "inputCourseType" class = "form-control" id="inputCourseType" required>
                                <?php
                                    $sql = "SELECT type_id, type_name FROM course_type";

                                    $result = $mysqli->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            if ($row["type_id"] == $courseType) {
                                            ?>
                                                <option value = "<?php echo $row["type_id"]; ?>" selected><?php echo $row["type_name"]; ?></option>
                                            <?php
                                          } else {
                                            ?>
                                                <option value = "<?php echo $row["type_id"]; ?>"><?php echo $row["type_name"]; ?></option>
                                            <?php
                                            }
                                        }
                                    } else {
                                        ?>
                                        <option value = "" disabled>No Types Available</option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputProgramID">Program<span class = "asterisk">*</span></label>
                            <select name = "inputProgramID" class = "form-control" id="inputProgramID" required>
                                <?php
                                    $sql = "select program_id, program_name from program";

                                    $result = $mysqli->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            if ($row["program_id"] == $programID) {
                                            ?>
                                                <option value = "<?php echo $row["program_id"]; ?>" selected><?php echo $row["program_name"]; ?></option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value = "<?php echo $row["program_id"]; ?>"><?php echo $row["program_name"]; ?></option>
                                                <?php
                                            }
                                        }
                                    } else {
                                        ?>
                                        <option value = "" disabled>No Programs Available</option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLaunchDate">Launch Date</label>
                            <input type="date" class="form-control" id="inputLaunchDate" name = "inputLaunchDate" value = "<?php echo $date; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputDescription">Course Description</label>
                            <?php 
                                if (!isset($description) || $description == "") {
                                    ?>
                                    <textarea maxlength="1000" rows = "3" class="form-control" id="inputDescription" name = "inputDescription" placeholder="1000 maximum characters..."></textarea>
                                <?php
                                } else {
                                ?>
                                    <textarea maxlength="1000" rows = "3" class="form-control" id="inputDescription" name = "inputDescription"><?php echo $description; ?></textarea>
                                <?php 
                                    }
                                ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="custom-file my-3">
                            <input type="file" class="custom-file-input" id="uploadImage" name = "uploadImage" value = "<?php echo $photo; ?>">
                            <label class="custom-file-label" for="customFile">Upload Image</label>
                            <!-- Get image file name from database and store it in imageName as hidden input for further processing (needed only when updating images)-->
                            <input type = "hidden" class="custom-file-input" id="imageName" name = "imageName" value = "<?php echo $photo; ?>">
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