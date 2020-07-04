<?php
// Send Email
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
        // Send Email

        $name = $fname . " " . $lname;
        // PHP Mailer Class
        $to = "$email";
        $subject = "Brochure Request";

        $message = "
        <html style = 'box-sizing: border-box;'>
        <head>
        <title>Brochure Request</title>
        </head>
        <body style = 'background-color: #F2F2F2; width: 100%; padding-top: 50px; padding-bottom: 50px;'>
        <div style = 'background-color: #fff; width: 60%; border-top: 25px solid #F2F2F2; border-bottom: 25px solid #F2F2F2; padding: 25px; margin: 50px auto;'>
            <img src = 'www.skylineuni.com/img/blue-university.png' style = 'width: 100%; height: 200px;' alt = 'Brochure Header Image'>

            <p>Hello <strong>$name</strong>,</p>
            <p>Thanks for getting in touch. It’s great news that you’re thinking of studying with us.</p>
            <p>At Skyline University our ambition is to change the lives of our students, and our industry-informed and practical-based courses deliver the specialist knowledge and advanced skills needed for you to take control of your career. Our globally-minded education prepares our students for international careers as modern, enterprising citizens highly sought after by business and industry.</p>
            <p>
            You will study in an inspiring, enterprising, and diverse community where you will be encouraged to develop your ambitions, and make important contributions to your subject and profession.
            </p>
            <p>
            Please click <a href = 'www.skylineuni.com'>here</a> to view your digital copy of the requested brochure.
            </p>
            <p>Alternatively if you would like to talk to a \"Skyline\" representative in person, visit us at one of the many international education events we attend. <a href = 'www.skylineuni.com'>Find out where we'll be exhibiting</a>.</p>
            <table>
            <tr>
            <td><a href = 'www.skylineuni.com'><img src = 'www.skylineuni.com/img/international-flag.jpg' style = 'width: 100%; height: 100px;' alt = 'Skyline Colleges Image'></a></td>
            <td><a href = 'www.skylineuni.com'><img src = 'www.skylineuni.com/img/Highly-Skilled-Graduates.jpg' style = 'width: 100%; height: 100px;' alt = 'Skyline Programs Image'></a></td>
            <td><a href = 'www.skylineuni.com'><img src = 'www.skylineuni.com/img/Qualified-Professors.jpg' style = 'width: 100%; height: 100px;' alt = 'Skyline Courses Image'></a></td>
            </tr>
            </table>
            <p>We look forward to hearing from you soon.</p>
            <p><strong>Skyline University</strong></p>
            <table background= 'www.skylineuni.com/img/pattern.png' style = 'width: 100%; font-size: 24px; color: grey; padding: 25px;'>
            <tr>
            <td align='center' style = 'width: 33%;'><a href = 'www.skylineuni.com/pages/contact/index.php' style = 'text-decoration: none; color: grey;'>Contact us</a></td>
            <td align='center' style = 'width: 33%;'><a href = 'www.skylineuni.com/pages/contact/index.php' style = 'text-decoration: none; color: grey;'>Call us</a></td>
            <td align='center' style = 'width: 33%;'><a href = 'www.skylineuni.com/pages/contact/index.php' style = 'text-decoration: none; color: grey;'>Visit us</a></td>
            </tr>
            </table>
            <p style = 'color: silver; padding-bottom: 25px;'>Office 62, Building 2317, Road 2830, Block 428 , Seef District, Manama, Bahrain</p>
            <a href = 'http://www.skylineuni.com/pages/privacy-policy.php'>Privacy Policy</a>
        </div>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Add to headers string
        $headers .= 'From: <info@skylineuni.com>' . "\r\n";
        $headers .= 'BCC: backup@skylineuni.com' . "\r\n";

        mail($to,$subject,$message,$headers);  
        }
?>
