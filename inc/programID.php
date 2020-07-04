<?php

include("../dbconn.php");

$sql = "select ProgramID, ProgramName from programs";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>
    <option value = "<?php echo $row["ProgramID"]; ?>"><?php echo $row["ProgramName"]; ?></option>
    <?php
        }
    } else {
        ?>
        <option value = "" disabled>No Programs Available</option>
        <?php
    }
?>

<?php 
$mysqli->close();
?>