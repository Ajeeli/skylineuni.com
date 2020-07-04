<?php
session_start();
include('../../../db_connection.php');

function redirect() {
    unset($_SESSION['newDept']);
    header("Location: ../pages/e-pay.php");
}

    if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
        $stdID = $_SESSION['student']['id'];

        if(isset($_SESSION['newDept'])) {
            $newDept = $_SESSION['newDept'];
        } else {
            echo "Error";
        }
    }
    
    $sql = "UPDATE
    student
    SET payment_dept = $newDept
    WHERE
    student_id = $stdID";
        
    if ($mysqli->query($sql) === TRUE) {
        //echo "| Successful |";
        redirect();
    } else {
        //echo "Error: " . $sql . "<br>" . $mysqli->error;
        echo "Error";
        unset($_SESSION['newDept']);
    }

$mysqli->close();

?>