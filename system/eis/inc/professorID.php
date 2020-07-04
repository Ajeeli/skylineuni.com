<?php
include("../../../../db_connection.php");

$sql = "select tutor_id, fname, lname from tutor";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>
    <option value = "<?php echo $row["tutor_id"]; ?>">[<?php echo $row["tutor_id"]; ?>] <?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></option>
    <?php
        }
    } else {
        ?>
        <option value = "" disabled>No Professors Available</option>
        <?php
    }
?>

<?php 
$mysqli->close();
?>