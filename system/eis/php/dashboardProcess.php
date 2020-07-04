<?php   // This code must be changed to OOP
include("../../../db_connection.php");

if ($table == "student") {
    define('IMAGE_DIR','../../sis/pages/students/img/'); // define the path to user images(students/img/)
    
    $sql = "SELECT $attribute1, $attribute2, $attribute3, $attribute4 FROM $table";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><img src = '<?php echo IMAGE_DIR . $row["$attribute1"]; ?>' class = "table-result-img"></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute4"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "students/editStudent.php?studentID=<?php echo $row["$attribute2"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../php/deleteRecord.php?key=<?php echo "$attribute2"; ?>&id=<?php echo $row["$attribute2"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>

<?php
        }
    }
}
// Passing database values to JS Sessions using PHP variables (used for dashboard charts)

function statistics($attributeName, $tableName){
    include("../../../db_connection.php");
    $sql = "SELECT $attributeName FROM $tableName";

    if ($result=mysqli_query($mysqli,$sql))
    {
        // Return the number of rows in result set
        $rowcount=mysqli_num_rows($result);
        if($rowcount == 0){
            echo "<script type = \"text/javascript\">
                // Store
                var table = <?php echo $tableName; ?>;
                var count = <?php echo $rowcount; ?>;
                sessionStorage.setItem('table', '0');
            </script>";
        }
        else {
            echo "<script type = \"text/javascript\">
                // Store
                var table = <?php echo $tableName; ?>;
                var count = <?php echo $rowcount; ?>;
                sessionStorage.setItem('table', 'count');
            </script>";
        }
        // Free result set
        mysqli_free_result($result);
    }
}

statistics("executive_id", "executive");
statistics("tutor_id", "tutor");
statistics("student_id", "student");
statistics("college_id", "college");
statistics("program_id", "program");
statistics("course_id", "course");
statistics("section_id", "section");

$mysqli->close();
?>