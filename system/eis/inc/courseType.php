<?php
include("../../../../db_connection.php");

$sql = "SELECT type_id, type_name FROM course_type";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>
    <option value = "<?php echo $row["type_id"]; ?>"><?php echo $row["type_name"]; ?></option>
    <?php
        }
    } else {
        ?>
        <option value = "" disabled>No Types Available</option>
        <?php
    }
?>