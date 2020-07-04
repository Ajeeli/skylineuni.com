<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/db_connection.php');

$sql = "SELECT college_name FROM college";

$sqlResult = $mysqli->query($sql);

$colleges = array();
if ($sqlResult->num_rows > 0) {
    // output data of each row
    while($row = $sqlResult->fetch_assoc()) {
        array_push($colleges, $row['college_name']);
    }
}

echo json_encode($colleges);

?>
