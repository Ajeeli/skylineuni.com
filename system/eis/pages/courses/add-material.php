<?php 
    session_start();
    $title = "ADD MATERIAL";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Add Material</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Courses > Add Material</li>
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
                <form class = "adding-form py-5" action = "../../php/add-material-proc.php" method = "post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCourseID">Course ID<span class = "asterisk">*</span></label>
                            <select id="inputCourseID" name = "inputCourseID" class="form-control" required>
                                <?php
                                    include("../../../../db_connection.php");

                                        $sql = "SELECT 
                                        course.course_id, course.course_name
                                        FROM 
                                        course";

                                        $result = $mysqli->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                        ?>
                                            <option value = "<?php echo $row["course_id"]; ?>"><?php echo '[' . $row["course_id"] . '] '; ?><?php echo $row["course_name"]; ?></option>
                                        <?php
                                            }
                                        } else {
                                            ?>
                                            <option value = "" selected disabled>No Courses Available</option>
                                            <?php
                                        }

                                    $mysqli->close();
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLectureName">Lecture Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputLectureName" name = "inputLectureName" maxlength = "255" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputLectureType">Lecture Type<span class = "asterisk">*</span></label>
                            <select id="inputLectureType" name = "inputLectureType" class="form-control" required>
                                <option value = "video" selected>Video</option>
                                <option value = "document">Document</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLecturePath">Lecture Path<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputLecturePath" name = "inputLecturePath" maxlength = "500" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputDescription">Description</label>
                            <textarea maxlength="1000" rows = "3" class="form-control" id="inputDescription" name = "inputDescription" placeholder="1000 maximum characters..."></textarea>
                        </div>
                    </div>
                    <div class="form-row py-4">
                        <div class = "form-group col-md-6">
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
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