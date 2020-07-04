<?php
if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
    include('../../../../db_connection.php');
    
    $stdID = $_SESSION['student']['id'];
    $stdProgramID = $_SESSION['student']['programID'];
    
    // select open sections to enroll in
    $sql = "SELECT 
    section.section_id, section.start_date, section.course_id, section.student_count, section.section_state, program.program_name, tutor.fname, tutor.lname, course.course_name, course.course_fee, course.prerequisite 
    FROM (((section
    INNER JOIN course ON course.course_id = section.course_id) 
    INNER JOIN tutor ON section.tutor_id = tutor.tutor_id) 
    INNER JOIN program ON course.program_id = program.program_id) 
    WHERE 
    !EXISTS (SELECT * FROM (enrollment INNER JOIN section ON enrollment.section_id = section.section_id) 
    WHERE (enrollment.student_id = $stdID AND section.course_id = course.course_id AND (grade_symbol < 'D' || grade_symbol IS NULL))) 
    AND 
    course.program_id = '$stdProgramID' 
    AND 
    section.section_state = 'Open'
    AND 
    section.student_count < 500
    AND 
    (course.prerequisite IS NULL 
    OR 
    EXISTS (SELECT * FROM (enrollment INNER JOIN section ON enrollment.section_id = section.section_id) 
    WHERE 
    section.course_id = course.prerequisite 
    AND 
    grade_symbol < 'F' 
    AND 
    enrollment.student_id = $stdID))";
    
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            
            $SectionID = $row['section_id'];
            $studentCount = $row['student_count'];
            $CourseID = $row['course_id'];
            $CourseName = $row['course_name'];
            $CourseFee = $row['course_fee'];
            $CoursePrerequisite = $row['prerequisite'];
            $TutorName = $row['fname'] . ' ' . $row['lname'];
            $ProgramName = $row['program_name'];
            $sectionDate = $row['start_date'];
            $today = date("Y-m-d");
            //$gradeSymbol = $row['grade_symbol'];
            
            ?>

            <tr>
                <td><?php echo $SectionID; ?></td>
                <td><?php echo $CourseID; ?></td>
                <td><?php echo $CourseName; ?></td>
                <td><?php echo $CoursePrerequisite; ?></td>
                <td><?php echo $TutorName; ?></td>
                <td><?php echo $ProgramName; ?></td>
                <td><?php echo $studentCount; ?></td>
                <td>
                    <form action = "" method = "post">
                        <!-- Used '$SectionID' in button 'name' to ensure that the name value changes with each result and the '$_POST' value changes accordingly, this allows us to insert unique sql with each button in the form -->
                        <button class = "btn btn-success btn-block" type = "submit" id = "enrollBtn" name = "<?php echo $SectionID; ?>">ENROLL</button>
                        <?php 
                        if(isset($_POST[$SectionID])) {

                            $sql = "INSERT INTO enrollment (section_id, student_id) VALUES ('$SectionID', '$stdID')";
                            if ($mysqli->query($sql) === TRUE) {
                                echo "Enrolled Successfully";
                                ?>
                                <?php
                                // Update StudentCount field in sections table when a student enrolls in a course
                                $updatesql = "UPDATE section SET student_count = (student_count + 1) WHERE section_id = '$SectionID'";
                                if ($mysqli->query($updatesql) === TRUE) {
                                    //echo "Student Count Updated";
                                } else {
                                    echo "Error: " . $updatesql . "<br>" . $mysqli->error;
                                }
                                // Update PaymentDept field in students table when a student enrolls in a course
                                $updatesql = "UPDATE student SET payment_dept = (payment_dept + $CourseFee) WHERE student_id = '$stdID'";
                                if ($mysqli->query($updatesql) === TRUE) {
                                    //echo "Student Dept Updated";
                                } else {
                                    echo "Error: " . $updatesql . "<br>" . $mysqli->error;
                                }
                            } else {
                            ?>
                                <?php
                                echo "Already Enrolled";
                            }
                        }
                        ?>
                    </form>
                </td>
            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td colspan = "8">No Courses Available</td>
        </tr>
        <?php
    }
    // Free result set
    mysqli_free_result($result);
}
$mysqli->close();
?>