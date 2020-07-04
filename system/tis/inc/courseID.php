<?php
include("../../../../db_connection.php");

$sql = "SELECT 
course_id, course_name 
FROM 
course";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>
    <option value = "<?php echo $row["course_id"]; ?>"><?php echo '[' . $row["course_id"] . '] '; ?><?php echo $row["course_name"]; ?></option>
    <?php
        }
    } else {
        ?>
        <option value = "" disabled>No Courses Available</option>
        <?php
    }

$mysqli->close();
?>