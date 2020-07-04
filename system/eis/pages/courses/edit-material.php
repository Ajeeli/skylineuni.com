<?php 
    session_start();
    $title = "EDIT MATERIAL";
    $cssLink = "../../css/";
    include("../../inc/header.php");
    include("../../../../db_connection.php");

    function redirect(){
        header("location: ../../../index.php");
        exit;
    }
    
    if(isset($_GET['lectureID']) && $_GET['lectureID'] !== ''){
        $lectureID = $_GET['lectureID'];
        
        $sql = "SELECT * FROM course_lecture WHERE lecture_id = $lectureID";
        
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $courseID = $row['course_id'];
                $lectureName = $row['lecture_name'];
                $lectureType = $row['lecture_type'];
                $lecturePath = $row['lecture_path'];
                $description = $row['description'];
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
                <h3>Edit Material</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Courses > Edit Material</li>
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
                            <input type = "hidden" class = "form-control" name = "materialFormEdit" id = "materialFormEdit" value = "materialFormEdit">
                            <input type = "hidden" class = "form-control" name = "inputLectureID" id = "inputLectureID" value = "<?php echo $lectureID; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCourseID">Course ID<span class = "asterisk">*</span></label>
                            <select name = "inputCourseID" class = "form-control" id="inputCourseID" required>
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
                        <div class="form-group col-md-6">
                            <label for="inputLectureName">Lecture Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputLectureName" name = "inputLectureName" maxlength = "255" value = "<?php echo $lectureName; ?>" required autofocus>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputLectureType">Lecture Type<span class = "asterisk">*</span></label>
                            <select name = "inputLectureType" class = "form-control" id="inputLectureType" required>
                                <?php
                                    if ($lectureType == "video") {
                                        ?>
                                            <option value = "video" selected>Video</option>
                                            <option value = "document">Document</option>
                                        <?php
                                      } else if ($lectureType == "document"){
                                        ?>
                                            <option value = "video">Video</option>
                                            <option value = "document" selected>Document</option>
                                            <?php
                                        }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLecturePath">Lecture Path<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputLecturePath" name = "inputLecturePath" maxlength = "500" value = "<?php echo $lecturePath; ?>" required>
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