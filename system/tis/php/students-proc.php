<?php

if(isset($_SESSION['tutor']['id']) && !empty($_SESSION['tutor']['id'])) {
    define('IMAGE_DIR','../../../sis/pages/students/img/'); // define the path to user images(students/img/)
    include('../../../../db_connection.php');
    
    $tutorID = $_SESSION['tutor']['id'];
    
    $sql = "SELECT 
    section.section_id, section.course_id, student.student_id, student.photo, student.fname, student.lname, student.email, student.phone_number, enrollment.midterm_grade, enrollment.assignment1_grade, enrollment.assignment2_grade, enrollment.final_grade, enrollment.grade_symbol
    FROM 
    ((section INNER JOIN enrollment ON section.section_id = enrollment.section_id) 
    INNER JOIN student ON enrollment.student_id = student.student_id) 
    WHERE 
    section.tutor_id = $tutorID 
    AND 
    section.section_state = 'Open'";
    
    /* Check for issue later (it is has been checked against the top sql and is identical, however, it doesnt work)
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
    
    <td rowspan = "1" colspan = "1"><a href = "mailto:<?php echo $row["$attribute8"]; ?>"><?php echo $row["$attribute8"]; ?></a></td>
                <td rowspan = "1" colspan = "1"><a href = "tel:<?php echo $row["$attribute9"]; ?>"><?php echo $row["$attribute9"]; ?></a></td>
    */

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($row["$attribute10"] == NULL && $row["$attribute11"] == NULL) {
                $courseWork = "";
            } else {
                $courseWork = $row["$attribute10"] + $row["$attribute11"];    
            }
    ?>

            <tr role = "row">
                <td rowspan = "1" colspan = "1"><img src = '<?php echo IMAGE_DIR . $row["$attribute3"]; ?>' class = "table-result-img"></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute1"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute4"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute5"]; ?> <?php echo $row["$attribute6"]; ?></td>
                <td rowspan = "1" colspan = "1"><a href = "mailto:<?php echo $row["$attribute7"]; ?>"><?php echo $row["$attribute7"]; ?></a></td>
                <td rowspan = "1" colspan = "1"><a href = "tel:<?php echo $row["$attribute8"]; ?>"><?php echo $row["$attribute8"]; ?></a></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute9"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute12"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $courseWork; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute13"]; ?></td>
            </tr>
<?php
        }
    } else {
        ?>
        <tr>
            <td colspan = "10">No Enrolled Students</td>
        </tr>
        <?php
    }

$mysqli->close();
}
?>