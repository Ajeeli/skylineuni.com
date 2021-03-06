<?php
    include('../../../../db_connection.php');
    
    $stdID = $_SESSION['student']['id'];
    $stdProgramID = $_SESSION['student']['programID'];

    $sql = "SELECT 
    course.course_id, course.course_name, course.description, course.photo, course_type.type_name
    FROM 
    (((course INNER JOIN section ON section.course_id = course.course_id)
    INNER JOIN enrollment ON section.section_id = enrollment.section_id)
    INNER JOIN course_type ON course.course_type = course_type.type_id)
    WHERE 
    enrollment.student_id = '$stdID' 
    AND 
    enrollment.grade_symbol IS NULL";
    
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            
            $Photo = $row['photo'];
            $CourseID = $row['course_id'];
            $CourseName = $row['course_name'];
            $Description = $row['description'];
            $CourseType = $row['type_name'];
        ?>

            <!-- Card -->
            <div class="card card-image my-4" style="background-image: <?php echo "url('../../../eis/pages/courses/img/" . $Photo . "')"; ?>">
                <!-- Content -->
                <div class="card-inner-box text-black text-center rgba-black-strong py-5 px-4">
                    <div>
                        <h5 class="pink-text"><i class="fas fa-chart-pie"></i> <strong><?php echo $CourseType; ?></strong></h5>
                        <h3 class="card-title pt-2"><strong><?php echo $CourseName; ?></strong></h3>
                        <p><strong><?php echo $Description; ?></strong></p>
                        <form action = "course-material.php" method = "post">
                            <input type = "hidden" name = "stdID" value = "<?php echo $stdID; ?>">
                            <input type = "hidden" name = "CourseID" value = "<?php echo $CourseID; ?>">
                            <input type = "hidden" name = "CourseName" value = "<?php echo $CourseName; ?>">
                            <input type = "submit" name = "submit" value = "View material" class="btn btn-success text-white mt-4" style = "text-shadow: none;">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Card -->

    <?php
        }
    } else { ?>
        <!-- Card -->
        <div class="card card-image" style="background-image: linear-gradient(to bottom right, grey, silver);">
            
            <!-- Content -->
            <div class="text-white text-center rgba-black-strong py-5 px-4">
                <div>
                    <h5 class="pink-text"></h5>
                    <h3 class="card-title pt-2"><strong>No Courses Enrolled</strong></h3>
                    <p>You have not enrolled in any courses yet. To enroll in courses for this semester, go to courses/enrollment, or click on Enroll</p>
                    <a href = "../courses/enrollment.php" class="btn btn-success"><i class="fas fa-clone left"></i> Enroll</a>
                </div>
            </div>
        </div>
        <!-- Card -->
        <?php
        }
    
    // Free result set
    mysqli_free_result($result);

$mysqli->close();
?>