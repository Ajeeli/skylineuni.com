<?php
include("../../../../db_connection.php");

$sql = "select position from salary";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>
    <option value = "<?php echo $row["position"]; ?>"><?php echo $row["position"]; ?></option>
    <?php
        }
    } else {
        ?>
        <option value = "" disabled>No Positions Available</option>
        <?php
    }
?>

<?php 
$mysqli->close();
?>