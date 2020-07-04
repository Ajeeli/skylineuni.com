<?php

if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
    include('../../../../db_connection.php');
    
    $stdID = $_SESSION['student']['id'];
    //$stdProgramID = $_SESSION['student']['programID'];
            
    $sql = "SELECT 
    section.section_id, section.course_id, course.course_name, course.credits, course.course_fee, section.midterm_exam, section.final_exam, tutor.fname
    FROM 
    ((section INNER JOIN course ON course.course_id = section.course_id)
    INNER JOIN tutor ON section.tutor_id = tutor.tutor_id)
    INNER JOIN enrollment ON section.section_id = enrollment.section_id
    WHERE 
    student_id = $stdID 
    AND 
    section.section_state = 'Open'";
    
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $CourseID = $row['course_id'];
            $CourseName = $row['course_name'];
            $Credits = $row['credits'];
            $CourseFee = $row['course_fee'];
            $SectionID = $row['section_id'];
            $TutorName = $row['fname'];
            $MidtermExam = $row['midterm_exam'];
            $FinalExam = $row['final_exam'];
        ?>
    
        <tr>
            <td><?php echo $CourseID; ?></td>
            <td><?php echo $CourseName; ?></td>
            <td><?php echo $Credits; ?></td>
            <td><?php echo $TutorName; ?></td>
            <td><?php echo $MidtermExam; ?></td>
            <td><?php echo $FinalExam; ?></td>
            <td>
            <form action = "" method = "post">
                <!-- Used '$SectionID' in button 'name' to ensure that the name value changes with each result and the '$_POST' value changes accordingly, this allows us to insert unique sql with each button in the form -->
                <button class = "btn btn-danger btn-block" type = "submit" name = "<?php echo $SectionID; ?>">Withdraw</button>
                <?php 
                if(isset($_POST[$SectionID])) {
                    $sql = "DELETE FROM enrollment WHERE section_id = '$SectionID' AND student_id = '$stdID'";
            
                    if ($mysqli->query($sql) === TRUE) {
                        echo "Withdrew Successfully";
                        
                        // Update StudentCount field in sections table when a student enrolls in a course
                        $updatesql = "UPDATE section SET student_count = (student_count - 1) WHERE section_id = '$SectionID'";
                        if ($mysqli->query($updatesql) === TRUE) {
                            //echo "Student Count Updated";
                        } else {
                            echo "Error: " . $updatesql . "<br>" . $mysqli->error;
                        }
                        // Update PaymentDept field in students table when a student enrolls in a course
                        $updatesql = "UPDATE student SET payment_dept = (payment_dept - $CourseFee) WHERE student_id = '$stdID'";
                        if ($mysqli->query($updatesql) === TRUE) {
                            //echo "Student Dept Updated";
                        } else {
                            echo "Error: " . $updatesql . "<br>" . $mysqli->error;
                        }
                    } else {
                        echo "Cannot Withdraw";
                        // Original Error
                        // echo "Error: " . $sql . "<br>" . $mysqli->error;
                    }
                }
                ?>
            </form>
            </td>
        </tr>

    <?php
        }
    } else { ?>
            <tr>
                <td colspan = "7">No Courses Enrolled</td>
            </tr>
        <?php
        }
    
    // Free result set
    mysqli_free_result($result);
}

$mysqli->close();
?>