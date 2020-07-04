<?php

if(isset($_SESSION['tutor']['id']) && !empty($_SESSION['tutor']['id'])) {
    include('../../../../db_connection.php');
    
    $tutorID = $_SESSION['tutor']['id'];
    
    $sql = "SELECT 
    $table.$attribute1, $table.$attribute2, $table2.$attribute3, $table2.$attribute4, $table.$attribute5, $table3.$attribute6, $table3.$attribute7, $table.$attribute8, $table.$attribute9, $table.$attribute10, $table.$attribute11, $table.$attribute12, $table.$attribute13 
    FROM 
    (($table INNER JOIN $table2 ON $table2.$attribute2 = $table.$attribute2)
    INNER JOIN $table3 ON $table.$attribute5 = $table3.$attribute5)
    WHERE 
    $table.$attribute5 = '$tutorID' 
    AND 
    $table.$attribute13 = 'Open'";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

            <tr role = "row">
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute1"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute5"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute6"]; ?> <?php echo $row["$attribute7"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute8"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute9"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute10"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute11"]; ?></td>
                <td rowspan = "1" colspan = "1"><?php echo $row["$attribute12"]; ?></td>
            </tr>
<?php
        }
    } else {
        ?>
        <tr>
            <td colspan = "10">No Sections Registered to you</td>
        </tr>
        <?php
    }

$mysqli->close();
}
?>