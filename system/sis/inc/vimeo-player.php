<script src = "../../js/viewer.js"; ?> " type = "text/javascript"></script>

    <?php
    include('../../../../db_connection.php');

    // SQL statement used to load introduction video from database into "uni-frame" iframe
    $sql = "SELECT lecture_path
    FROM 
    course_lecture
    WHERE 
    course_id = '$CourseID' 
    AND 
    lecture_type = 'video' 
    AND 
    lecture_name LIKE 'Introduction%'";
    
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $lecturePath = $row['lecture_path'];
        }
    } else { // Autoplay default introduction video
        $lecturePath = "https://player.vimeo.com/video/57106028";
    }

    $mysqli->close();
    ?>
        <iframe name = "uni-frame" class = "vimeo-player" src = "<?php echo $lecturePath; ?>?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        <hr>
        <h4><?php echo $_POST['CourseID']; ?></h4>
        <div class="row text-left">
            <div class="col-12">
                <ul class="nav nav-pills mb-3 bg-dark" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Course Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Materials</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <?php 
                        include('../../../../db_connection.php');
                        
                        $sql2 = "SELECT *
                        FROM 
                        course
                        WHERE 
                        course_id = '$CourseID'";

                        $result2 = $mysqli->query($sql2);
                        if ($result2->num_rows > 0) {
                                // output data of each row
                            while($row2 = $result2->fetch_assoc()) {
                                $description = $row2['description'];
                                
                                ?>
                                <p><?php echo $description; ?></p>
                        <?php
                            }
                        // Free result set
                        mysqli_free_result($result2);
                        $mysqli->close();
                        } else {
                            ?>
                            <p>No Description Available</p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <?php 
                        include('../../../../db_connection.php');
                        $counter = 1;
                        
                        $sql2 = "SELECT *
                        FROM 
                        course_lecture
                        WHERE 
                        course_id = '$CourseID' 
                        AND 
                        lecture_type = 'video'";

                        $result2 = $mysqli->query($sql2);
                        if ($result2->num_rows > 0) {
                                // output data of each row
                            while($row2 = $result2->fetch_assoc()) {

                                $lectureName = $row2['lecture_name'];
                                $lectureType = $row2['lecture_type'];
                                $lecturePath = $row2['lecture_path'];
                                $description = $row2['description'];
                                
                                ?>
                                <p><a href = "<?php echo $lecturePath . '?autoplay=1'; ?>" target="uni-frame" onclick = "viewer()"><?php echo $counter . ' - ' . $lectureName; ?></a></p>
                        <?php
                                $counter++;
                            }
                        // Free result set
                        mysqli_free_result($result2);
                        $mysqli->close();
                        } else {
                            ?>
                            <p>No Videos Available</p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <?php 
                        include('../../../../db_connection.php');
                        $counter = 1;
                        
                        $sql2 = "SELECT *
                        FROM 
                        course_lecture
                        WHERE 
                        course_id = '$CourseID' 
                        AND 
                        lecture_type = 'document'";

                        $result2 = $mysqli->query($sql2);
                        if ($result2->num_rows > 0) {
                                // output data of each row
                            while($row2 = $result2->fetch_assoc()) {

                                $lectureName = $row2['lecture_name'];
                                $lectureType = $row2['lecture_type'];
                                $lecturePath = $row2['lecture_path'];
                                $description = $row2['description'];
                                
                                ?>
                                <p><a href = "<?php echo $lecturePath; ?>" target="uni-frame" onclick = "viewer()"><?php echo $counter . ' - ' . $lectureName; ?></a></p>
                        <?php
                                $counter++;
                            }
                        // Free result set
                        mysqli_free_result($result2);
                        $mysqli->close();
                        } else {
                            ?>
                            <p>No Material Available</p>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>