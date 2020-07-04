<?php 
    // used for DB connection
    include("../../../db_connection.php");

    if (isset($_GET['sectionID'])){
        $sectionID = $_GET['sectionID'];
    }
    if (isset($_GET['exam'])) {
        $exam = ($_GET['exam']);
    }

    $sql="DELETE 
    FROM 
    exam 
    WHERE 
    section_id = '$sectionID' 
    AND 
    exam = '$exam'";

    if ($mysqli->query($sql) === TRUE) {
        ?>
        <h4 style = "color: green;">Exam deleted successfully</h4>
    <?php
    } else {
        ?>
        <h4 style = "color: red;">Cannot delete exam: Foreign key constraint</h4>
    <?php
    }

$mysqli->close();
?>