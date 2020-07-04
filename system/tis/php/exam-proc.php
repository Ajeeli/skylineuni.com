<?php
    if (isset($_GET['sectionID']) && $_GET['sectionID'] != "") {
        $sectionID = $_GET['sectionID'];
    }
    if (isset($_GET['exam']) && $_GET['exam'] != "") {
        $exam = $_GET['exam'];
    }

    include("../../../../db_connection.php");

    $sql = "SELECT 
    $attribute1, $attribute2, $attribute3, $attribute4, $attribute5, $attribute6, $attribute7, $attribute8, $attribute9, $attribute10, $attribute11, $attribute12 
    FROM 
    $table1 
    WHERE 
    $attribute1 = '$sectionID' 
    AND 
    $attribute2 = '$exam'";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute4"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute5"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute6"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute7"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute8"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute9"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute10"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute11"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "../exams/edit-exam.php?sectionID=<?php echo $row["$attribute1"]; ?>&exam=<?php echo $row["$attribute2"]; ?>&questionID=<?php echo $row["$attribute12"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/delete-exam-question.php?key=<?php echo "$attribute12"; ?>&id=<?php echo $row["$attribute12"]; ?>&table=<?php echo "$table1"; ?>&sectionID=<?php echo $sectionID; ?>&exam=<?php echo $exam; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>

<?php
        }
    } else {
        ?>
        <tr>
            <td colspan = "10">No Exam Questions Available</td>
        </tr>
        <?php
    }

$mysqli->close();
?>