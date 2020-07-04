<?php
    include('../../db_connection.php');

    // Update student online_status to 0 when user closes browser so that he doesnt show up as online to other students in the SIS dashboard
    $onlineStudent = $_SESSION['student']['id'];
    $sql = "UPDATE student SET online_status = 0 WHERE student_id = $onlineStudent";
    $mysqli->query($sql);
    $mysqli->close();
?>