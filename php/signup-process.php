<?php
    session_start();

    function redirection($register) {
        if ($register == true) {
            $_SESSION['user']['signedup'] = true;
            header ("Location: ../index.php");
        } else {
            $_SESSION['user']['signupError'] = true;
            header ("Location: ../pages/signup.php#form-section");
        }
    }
?>

<?php

include ('../dbconn.php');

$noError = true;
$status = 0;
$sql = false;
$query = false;
$register = false;
$newEmail = false;

if (isset($_POST['submit'])) {
    
    if(isset($_POST['fname'])) {
        $fname = $_POST['fname'];
    } else {
        $noError = false;
    }
    if(isset($_POST['lname'])) {
        $lname = $_POST['lname'];
    } else {
        $noError = false;
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $noError = false;
    }
    if(isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $noError = false;
    }
    if(isset($_POST['country'])) {
        $country = $_POST['country'];
    } else {
        $noError = false;
    }
    if(isset($_POST['city'])) {
        $city = $_POST['city'];
    } else {
        $noError = false;
    }
    if(isset($_POST['address'])) {
        $address = $_POST['address'];
    } else {
        $noError = false;
    }
    if(isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $noError = false;
    }
    if(isset($_POST['cpassword'])) {
        $cpassword = $_POST['cpassword'];
        if ($password !== $cpassword){
            echo "Error passwords dont match";
            $noError = false;
        }
    } else {
        $noError = false;
    }
} else {
    echo "Access Denied";
    $noError = false;
    exit;
}

?>

<?php   // Checking against database - email existence

    if ($noError) {
        $sql = "SELECT email FROM registrants WHERE email = '$email'";
        $result = $mysqli->query($sql);
        
        if ($result->num_rows == 0) {
            $newEmail = true;
        }
    }
?>

<?php   // If email doesn't exit in DB - register user

    if ($newEmail) {
        $sql = "INSERT INTO registrants (first_name, last_name, email, phone, address, city, country, password, status) VALUES ('$fname', '$lname', '$email', '$phone', '$country', '$city', '$address', '$password', '$status')";
        
        if ($mysqli->query($sql) === true) {
            $register = true;
            
            ///////////////////////////////////

            $to = "$email";
            $subject = "Skyline University Registration";
            $txt = "Thank you for registering with skyline university, please do not hesitate contacting us for further help" . "\r\n" . "Yours" . "\r\n" . "Skyline Board";
            $headers = "From: admin@ajeeli.com" . "\r\n" .
            "BCC: backup@ajeeli.com";

            mail($to,$subject,$txt,$headers);

            //////////////////////////////////
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<?php 
$mysqli->close();
redirection($register);
exit;
?>