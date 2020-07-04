<?php
session_start();

function redirection($credentialsOK, $user){
    if($credentialsOK == true) {        
        if ($user == "student") {
            $_SESSION['sysLogin']['SISLogin'] = true;
            header ("Location: ../sis/sis.php");
            
        } else if ($user == "tutor") {
            $_SESSION['sysLogin']['TISLogin'] = true;
            header ("Location: ../tis/tis.php");
            
        } else if ($user == "executive") {
            $_SESSION['sysLogin']['EISLogin'] = true;
            header ("Location: ../eis.php");
        }
        
    } else if ($credentialsOK == false){
        $_SESSION['sysLogin']['EISLogin'] = false;
        $_SESSION['sysLogin']['SISLogin'] = false;
        $_SESSION['sysLogin']['TISLogin'] = false;
        header ("Location: ../index.php");
    }
}

include('../../../db_connection.php');

    if(isset($_POST['submit'])) {
        if(isset($_POST['inputEmail'])){
            $email = $_POST['inputEmail'];
        }
        if(isset($_POST['inputPassword'])){
            $password = $_POST['inputPassword'];
        }
    } else {
        echo "Form Submission Error";
    }

//$sql = "(SELECT Email, Password, SID FROM students) UNION (SELECT Email, Password, TID FROM tutors) UNION (SELECT Email, Password, EID FROM executives)";

$user = "";

$sql = "SELECT student_id, email, password, program_id FROM student";

    $credentialsOK = false;

    if ($result = mysqli_query($mysqli, $sql)) {
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            if (($email == $row["email"]) && ($password == $row["password"])){
                $credentialsOK = true;
                $user = "student";
                $_SESSION['student']['id'] = $row['student_id'];
                $_SESSION['student']['programID'] = $row['program_id'];
            }
        }
        /* free result set */
        $result->free();
    }

$sql = "SELECT tutor_id, email, password FROM tutor";
if ($result = mysqli_query($mysqli, $sql)) {
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            if (($email == $row["email"]) && ($password == $row["password"])){
                $credentialsOK = true;
                $user = "tutor";
                $_SESSION['tutor']['id'] = $row['tutor_id'];
            }
        }
        /* free result set */
        $result->free();
    }

$sql = "SELECT executive_id, email, password FROM executive";
if ($result = mysqli_query($mysqli, $sql)) {
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            if (($email == $row["email"]) && ($password == $row["password"])){
                $credentialsOK = true;
                $user = "executive";
                $_SESSION['executive']['id'] = $row['executive_id'];
            }
        }
        /* free result set */
        $result->free();
    }

/* close connection */
mysqli_close($mysqli);

redirection($credentialsOK, $user);
?>