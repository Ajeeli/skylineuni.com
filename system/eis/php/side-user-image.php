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
    <div class = "col-12 user-image-col">
        <!-- edit -->
        <img class = "user-details img-center center-block" src = "<?php echo "pages/executives/img/" . $img; ?>">
    </div>
    <div class = "col-12 ">
        <p class = "user-details"><i class = "user-status fas fa-circle"></i> <?php echo $name; ?></p>
    </div>

<?php
    
    // Free result set
    mysqli_free_result($result);
} 
$mysqli->close();
?>