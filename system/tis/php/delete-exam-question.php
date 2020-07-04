<?php 
    function redirect($sectionID, $exam) {
        header("Location: ../pages/exams/exam.php?sectionID=$sectionID&exam=$exam");
    }
    include("../../../db_connection.php");

    $success = false;

    if (isset($_GET['key'])){
        $key = $_GET['key'];
    }
    if (isset($_GET['id'])) {
        $id = ($_GET['id']);
    }
    if (isset($_GET['table'])) {
        $table = ($_GET['table']);
    }
    if (isset($_GET['sectionID'])){
        $sectionID = $_GET['sectionID'];
    }
    if (isset($_GET['exam'])) {
        $exam = ($_GET['exam']);
    }

    $sql="DELETE 
    FROM 
    $table 
    WHERE 
    $key = $id";

    if ($mysqli->query($sql) === TRUE) {
        $success = true;
        ?>
        <h4 style = "color: green;">Question deleted successfully</h4>
    <?php
    } else {
        ?>
        <h4 style = "color: red;">Cannot delete question: Foreign key constraint</h4>
    <?php
    }

$mysqli->close();

if ($success) {
    redirect($sectionID, $exam);
}
?>