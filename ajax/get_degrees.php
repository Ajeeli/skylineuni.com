<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/db_connection.php');

$sql = "SELECT degree_level_name FROM degree_level";

$sqlResult = $mysqli->query($sql);

$degrees = array();
if ($sqlResult->num_rows > 0) {
    // output data of each row
    while($row = $sqlResult->fetch_assoc()) {
        array_push($degrees, $row['degree_level_name']);
    }
}

echo json_encode($degrees);

?>
