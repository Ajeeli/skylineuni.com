<?php 

if(isset($_SESSION['executive']['id']) && !empty($_SESSION['executive']['id'])) {
    include("../../db_connection.php");
    
    $userID = $_SESSION['executive']['id'];

    $sql = "SELECT fname, photo
    FROM executive
    WHERE executive_id = $userID";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $name = $row['fname'];
            $img = $row['photo'];
        }
    }
    ?>
    <img src = "<?php echo "pages/executives/img/" . $img; ?>" height="50" width = "50">
    <span>&nbsp;<?php echo $name; ?></span>

<?php
    // Free result set
    mysqli_free_result($result);
}

$mysqli->close();
?>