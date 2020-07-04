<?php

if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
    include('../../../db_connection.php');
    
    $stdID = $_SESSION['student']['id'];
    //$stdProgramID = $_SESSION['student']['programID'];
    
    $sql = "SELECT section.course_id, section.student_count, section.section_state, course.course_name, tutor.email
    FROM (((section
    INNER JOIN course ON course.course_id = section.course_id)
    INNER JOIN tutor ON section.tutor_id = tutor.tutor_id)
    INNER JOIN enrollment ON section.section_id = enrollment.section_id)
    WHERE student_id = $stdID AND section.section_state = 'Open'";
    
    /*
    $sql = "SELECT section.section_id, section.course_id, course.course_name, course.credits, section.midterm_exam, section.final_exam, tutor.fname, tutor.email
    FROM ((section
    INNER JOIN course ON course.course_id = section.course_id)
    INNER JOIN tutor ON section.tutor_id = tutor.tutor_id)
    INNER JOIN enrollment ON section.section_id = enrollment.section_id
    WHERE student_id = '$stdID'";
    */
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $courseID = $row['course_id'];
            $courseName = $row['course_name'];
            $studentCount = $row['student_count'];
            $email = $row['email'];
        ?>
    
<tr>
        <td><?php echo $courseID; ?></td>
        <td><?php echo $courseName; ?></td>
        <td><?php echo $studentCount; ?></td>
        <td><a href = "mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
    </tr>

    <?php
        }
    } else { ?>
            <tr>
                <td colspan = "4">No Courses Enrolled</td>
            </tr>
        <?php
        }
    
    // Free result set
    mysqli_free_result($result);
}

$mysqli->close();
?>