<?php
    function redirect() {
        header ("Location: /index.php?target=brochure");
        exit();
    }

    $send = 0;

    if (isset($_POST['submit'])) {
        if(isset($_POST['fname'])) {
            $fname = $_POST['fname'];
            $send++;
        }
        if(isset($_POST['lname'])) {
            $lname = $_POST['lname'];
            $send++;
        }
        if(isset($_POST['email'])) {
            $email = $_POST['email'];
            $send++;
        }
    }
    if ($send == 3) {
        $name = $fname . " " . $lname;
        
        $to = "$email";
        $subject = "Brochure Request";
        $txt = "Dear Mr/Ms. $name," . "\r\n\n" . "Thank you for submitting your application. The following is the requested brochure. additionally, a digital brochure copy is attached to this email. Please do not hesitate contacting us for further help." . "\r\n\n" . "Sincerely" . "\r\n" . "Skyline Board";
        $headers = "From: admin@ajeeli.com" . "\r\n" .
        "BCC: backup@ajeeli.com";

        mail($to,$subject,$txt,$headers);
        
        redirect();
    }
?>