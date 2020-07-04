<?php
include("../../../../db_connection.php");

$sql = "select executive_id, fname, lname, position from executive";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>
    <option value = "<?php echo $row["executive_id"]; ?>"><?php echo $row["position"] . '. '; ?><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></option>
    <?php
        }
    } else {
        ?>
        <option value = "" disabled>No Executives Available</option>
        <?php
    }
?>

<?php 
$mysqli->close();
?>