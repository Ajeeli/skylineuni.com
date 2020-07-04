<?php

function redirection() {
    header ("Location: ");
}


if (isset($_POST['submit'])) {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
}

$password = "";
// Password Random Generator
for ($i = 0; $i < 8; $i++) {
    if ($i%3 == 0) {
        $password .= chr(rand(65,90));
    }
    $password .= rand(0,9);
}

$to = "$email";
$subject = "Password Reset";
$txt = "The password for your account has been rest, use the following generated password to login into your account: '$password'";
$headers = "From: admin@ajeeli.com" . "\r\n" .
"BCC: backup@ajeeli.com";

mail($to,$subject,$txt,$headers);

redirection();
?>