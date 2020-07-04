<?php

    function redirection() {
        header ("Location: ../pages/about.php#form-section");
    }
?>

<?php

include ('../dbconn.php');

$noError = true;
$status = 0;
$sql = false;
$query = false;

if (isset($_POST['submit'])) {
    if (isset($_POST{'name'})) {
        $name = $_POST['name'];
    } else {
        $noError = false;
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $noError = false;
    }
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    } else {
        $noError = false;
    }
} else {
    echo "Access Denied";
    $noError = false;
    exit;
}

$sql = "INSERT INTO contact (name, email, message, status) VALUES ('$name', '$email', '$message', '$status')";
    if ($sql) {
    $mysqli->query($sql);
    }
    else {

    }

    //////////////////////////////////

    $to = "$email";
    $subject = "Skyline University | Contact";
    $txt = "Thank you for contacting us, we will pass your email to the right person and write you back within 2 business days. Please do not hesitate contacting us again for any additional help." . "\r\n" . "Yours" . "\r\n" . "Skyline Board";
    $headers = "From: admin@ajeeli.com" . "\r\n" .
    "BCC: backup@ajeeli.com";

    mail($to,$subject,$txt,$headers);

    //////////////////////////////////

?>

<?php
$mysqli->close();
redirection();
exit;
?>