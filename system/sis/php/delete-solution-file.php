<?php 
    session_start();
    // used for DB connection
    include("../../../db_connection.php");
    $stdID = $_SESSION['student']['id'];

    if(isset($_GET['sectionID']) && $_GET['sectionID'] !== ''){
        $sectionID = $_GET['sectionID'];
    }
    if(isset($_GET['assignmentID']) && $_GET['assignmentID'] !== ''){
        $assignmentID = $_GET['assignmentID'];
    }
    
    if ($assignmentID == 1) {
        $sql="UPDATE 
        enrollment 
        SET 
        assignment1 = NULL 
        WHERE section_id = '$sectionID' 
        AND 
        student_id = $stdID";    
    } else if ($assignmentID == 2) {
        $sql="UPDATE 
        enrollment 
        SET 
        assignment2 = NULL 
        WHERE section_id = '$sectionID' 
        AND 
        student_id = $stdID";
    }

    if ($mysqli->query($sql) === TRUE) {
        ?>
        <h4 style = "color: green;">File removed successfully</h4>
        <?php
    } else {
        ?>
        <h4 style = "color: red;">Cannot remove file: Foreign key constraint</h4>
        <?php
    }

$mysqli->close();
?>