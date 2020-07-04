<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/db_connection.php');

$college_id = isset($_GET['college_id']) ? $_GET['college_id'] : null;

$sql = "SELECT program_name FROM program WHERE college_id = $college_id"; 

$sqlResult = $mysqli->query($sql);

$programs = array();
if ($sqlResult->num_rows > 0) {
    // output data of each row
    while($row = $sqlResult->fetch_assoc()) {
        array_push($programs, $row['program_name']);
    }
}

echo json_encode($programs);

?>
