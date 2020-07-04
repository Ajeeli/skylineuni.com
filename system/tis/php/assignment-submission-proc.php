<?php

if(isset($_SESSION['tutor']['id']) && !empty($_SESSION['tutor']['id'])) {
    define('IMAGE_DIR','../../../sis/pages/students/img/'); // define the path to user images(students/img/)
    include('../../../../db_connection.php');
    
    $tutorID = $_SESSION['tutor']['id'];
    
    $sql = "SELECT section.section_id, course.course_name, section.student_count
    FROM 
    ((section INNER JOIN enrollment ON section.section_id = enrollment.section_id) 
    INNER JOIN course ON section.course_id = course.course_id) 
    WHERE 
    section.tutor_id = $tutorID 
    AND 
    section.section_state = 'Open'";
    
    /* Check for issue later
    $sql = "SELECT 
    $table1.$attribute1, $table1.$attribute2, $table3.$attribute3, $table2.$attribute4, $table2.$attribute5, $table2.$attribute6, $table2.$attribute7, $table2.$attribute8, $table4.$attribute9, $table4.$attribute10, $table4.$attribute11, $table4.$attribute12
    FROM 
    ((($table1 INNER JOIN $table3 ON $table1.$attribute1 = $table4.$attribute1)
    INNER JOIN $table2 ON $table4.$attribute4 = $table2.$attribute4)
    INNERR JOIN $table3 ON $table1.$attribute2 = $table3.$attribute2)
    WHERE 
    $table1.$attribute14 = $tutorID 
    AND 
    $table1.$attribute13 = 'Open'";
    */

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

            <tr role = "row">
                <td rowspan = "1" colspan = "1"><?php echo $row["section_id"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["course_name"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["student_count"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["student_count"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["student_count"]; ?></td>
            </tr>
<?php
        }
    }

$mysqli->close();
}
?>