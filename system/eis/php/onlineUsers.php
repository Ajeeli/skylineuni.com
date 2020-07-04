<?php 
include('../../../db_connection.php');

$sql = "SELECT photo, fname, lname
FROM executive
WHERE online_status=1";

$result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><img src = '<?php echo "../pages/executives/img/" . $row["photo"]; ?>' class = "table-result-img"></td>
                <td><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></td>
                <td><i class = "user-status fas fa-circle"></i></td>
            </tr>
            <?php
            }
    } else {
        ?>
            <tr>
                <td><i class="fas fa-bed"></i></td>
                <td>No Online Users</td>
                <td><i class = "user-status-offline fas fa-circle"></i></td>
            </tr>
        <?php
        }
                
        // Free result set
        mysqli_free_result($result);
          
$mysqli->close();
?>