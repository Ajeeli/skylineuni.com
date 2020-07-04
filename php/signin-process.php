<?php 
    session_start();

    function redirection($login) {
        if ($login == true) {
            $_SESSION['user']['signedin'] = true;
            header ("Location: ../index.php");
        }
        else {
            $_SESSION['user']['signinError'] = true;
            header ("Location: ../pages/signin.php#form-section");
        }
    }
?>

<?php 
include ('../dbconn.php');

$noError = true;
$login = false;
$sql = false;
$query = false;
$stateArg = false;

    if (isset($_POST['submit'])) {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $noError = false;
        }
        if(isset($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            $noError = false;
        }
    } else {
        echo "Access Denied";
        $noError = false;
        exit;
    }
?>

<?php   // Checking against database - email & password existence and correctness

    if ($noError) {
        $sql = "SELECT email, password FROM registrants WHERE email = '$email' AND password = '$password'";
        $result = $mysqli->query($sql);
        
        if ($result->num_rows !== 0) {
            $login = true;
        }
    }
?>

<?php
$mysqli->close();
redirection($login);
exit;
?>