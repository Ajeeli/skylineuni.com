<?php
include("../../../../db_connection.php");

$sql = "select * from degree_level";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>
    <option value = "<?php echo $row["degree_level_id"]; ?>"><?php echo $row["degree_level_name"]; ?></option>
    <?php
        }
    } else {
        ?>
        <option value = "" disabled>No Degrees Available</option>
        <?php
    }
?>

<?php 
$mysqli->close();
?>