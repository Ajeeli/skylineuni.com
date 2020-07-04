<?php

if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
    include('../../../../db_connection.php');
    
    $stdID = $_SESSION['student']['id'];
    //$stdProgramID = $_SESSION['student']['programID'];
            
    $sql = "SELECT 
    section.section_id, section.course_id, course.course_name, assignment1_grade, assignment2_grade, midterm_grade, final_grade, grade_symbol
    FROM 
    ((section INNER JOIN course ON course.course_id = section.course_id)
    INNER JOIN enrollment ON section.section_id = enrollment.section_id)
    WHERE 
    student_id = $stdID 
    AND 
    section.section_state = 'Open'";
    
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $sectionID = $row['section_id'];
            $courseID = $row['course_id'];
            $courseName = $row['course_name'];
            $assignment1Grade = $row['assignment1_grade'];
            $assignment2Grade = $row['assignment2_grade'];
            $midtermGrade = $row['midterm_grade'];
            $finalGrade = $row['final_grade'];
            $symbolGrade = $row['grade_symbol'];
        ?>
    
        <tr>
            <td><?php echo $sectionID; ?></td>
            <td><?php echo $courseID; ?></td>
            <td><?php echo $courseName; ?></td>
            <td><?php echo $assignment1Grade; ?></td>
            <td><?php echo $assignment2Grade; ?></td>
            <td><?php echo $midtermGrade; ?></td>
            <td><?php echo $finalGrade; ?></td>
            <td><?php echo $symbolGrade; ?></td>
            <td>

            </td>
        </tr>

    <?php
        }
    } else { ?>
            <tr>
                <td colspan = "9">No Courses Enrolled</td>
            </tr>
        <?php
        }
    
    // Free result set
    mysqli_free_result($result);
}

$mysqli->close();
?>