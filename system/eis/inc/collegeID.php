<?php
include("../../../../db_connection.php");

$sql = "select college_id, college_name from college";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>
    <option value = "<?php echo $row["college_id"]; ?>"><?php echo $row["college_name"]; ?></option>
    <?php
        }
    } else {
        ?>
        <option value = "" disabled>No Colleges Available</option>
        <?php
    }
?>

<?php 
$mysqli->close();
?>