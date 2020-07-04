<?php 
        // used for DB connection
        include("../../../db_connection.php");

        if(isset($_GET['sectionID']) && $_GET['sectionID'] !== ''){
            $sectionID = $_GET['sectionID'];
        }
        if(isset($_GET['assignmentID']) && $_GET['assignmentID'] !== ''){
            $assignmentID = $_GET['assignmentID'];
        }
    
        $sql="UPDATE 
        assignment 
        SET 
        file = NULL 
        WHERE section_id = '$sectionID' 
        AND 
        assignment_id = $assignmentID";

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