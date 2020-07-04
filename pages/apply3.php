<?php
// Preventing direct access to application third form using URL without submitting first or second form
if (!isset($_POST['submit2'])) {
    header ("Location: /pages/apply.php");
    exit();
} else {
    $noError = true;
    
    if (isset($_POST['startDate'])) {
        $startDate = $_POST['startDate'];
    } else {
        $noError = false;
    } if (isset($_POST['programName'])) {
        $programName = $_POST['programName'];
    } else {
        $noError = false;
    } if (isset($_POST['fname'])) {
        $fname = trim($_POST['fname']);
    } else {
        $noError = false;
    } if (isset($_POST['lname'])) {
        $lname = trim($_POST['lname']);
    } else {
        $noError = false;
    } if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $noError = false;
    } if (isset($_POST['DOB'])) {
        $DOB = $_POST['DOB'];
    } else {
        $noError = false;
    } if (isset($_POST['email'])) {
        $email = trim($_POST['email']);
    } else {
        $noError = false;
    } if (isset($_POST['country'])) {
        $country = trim($_POST['country']);
    } else {
        $noError = false;
    } if (isset($_POST['city'])) {
        $city = trim($_POST['city']);
    } else {
        $noError = false;
    } if (isset($_POST['phone'])) {
        if (isset($_POST['phoneEXT'])) {
            $phone = trim($_POST['phoneEXT'] . $_POST['phone']);
        }
    }    
    else {
        $noError = false;

    } if (isset($_POST['nationality'])) {
        $nationality = trim($_POST['nationality']);
    } else {
        $noError = false;
    } if (isset($_POST['educationLevel'])) {
        $educationLevel = trim($_POST['educationLevel']);
    } else {
        $noError = false;
    }  if (isset($_POST['degreeCopy'])) {
        $degreeCopy = trim($_POST['degreeCopy']);
    } else {
        $noError = false;
    }
}
        
        
$title = "Application";
include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header_skeleton.php");

if ($noError) {
    include ('../db_connection.php');
    // Checking against database - email existence
    $sql = "SELECT email FROM prospect_students WHERE email = '$email'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        ?>

<body>
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-6 offset-3 text-center">
                <h2 style="color: orange;">You have already registered with this email.</h2>
            </div>
        </div>
    </div>
</body>

<?php
        exit();
    } else {
        
        $sql2 = "SELECT 
        program_id
        FROM
        program
        WHERE
        program_name = '$programName'";
        
        $result2 = $mysqli->query($sql2);
        if ($result2->num_rows > 0) {
            // output data of each row
            while($row2 = $result2->fetch_assoc()) {
                $programID = $row2['program_id'];
            }
        }
        
        // Secure password generator
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); // Declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; // Put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $pass = implode($pass); // Turn the array into a string
        // End of password generator
        
        $sql3 = "INSERT INTO
        prospect_students (fname, lname, gender, DOB, email, program_id, residence_country, city, phone_number, nationality, education_level, degree_copy, password)
        VALUES ('$fname', '$lname', '$gender', '$DOB', '$email', '$programID', '$country', '$city', '$phone', '$nationality', '$educationLevel', '$degreeCopy', '$pass')";
        $mysqli->query($sql3);
        $mysqli->close();
        
        // Send Email
        $name = $fname . " " . $lname;
        // PHP Mailer Class
        $to = "$email";
        $subject = "Welcome to SOU";

        $message = "
        <html>
        <head>
        <title>Welcome to Skyline Online University</title>
        </head>
        <body'>
        <img src = 'https://www.skylineuni.com/img/Skyline405.png' alt = 'Skyline University Logo' style = 'padding-top: 50px;'>
        <p style = 'padding-top: 50px; padding-bottom: 50px;'>Dear Mr/Ms. <strong>$name</strong>,</p>
        <p style = 'padding-bottom: 25px;'>Thank you for submitting your application. You have been successfully registered as a student in SOU, you may login into your student account using the following login credentials.</p>
        <p>Email: <b>$email</b></p>
        <p style = 'padding-bottom: 25px;'>Password: <b>$pass</b></p>
        <p style = 'padding-bottom: 25px;'>You may change your password later from the settings in your account dashboard. To login into the Student Information System (SIS), please visit the university website, or click on the following link: <a href = 'https://www.skylineuni.com/system/index.php'>SIS</a></p>
        <p style = 'padding-top: 25px;'>Office of Admissions</p>
        <p style = 'padding-bottom: 25px;'>Skyline University</p>
        <p style = 'padding-bottom: 50px;'>Were you sent this email in error? Please report this email by replying with “Not Me”.</p>
        <small>This e-mail message and its attachments are for the sole use of the intended recipient and may contain confidential and privileged information. If you received this message by error, please delete it from your computer, and inform the sender. Any unauthorized review, use, disclosure or distribution of this message and/or its attachments is prohibited.</small>
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <admin@skylineuni.com>' . "\r\n";
        $headers .= 'BCC: backup@skylineuni.com' . "\r\n";

        mail($to,$subject,$message,$headers);
        
    ?>

<body>
    <div class="container py-5" id="form-position">
        <div class="row">
            <div class="col-md-10 col-12">
                <h2>Application Submitted Successfully</h2>
                <hr>
            </div>
        </div>
        <div class="row col-md-10 col-12 mb-5 p-4 text-white bg-info align-items-center rounded" style="box-shadow: 10px 10px 15px grey;">
            <i class="fas fa-check-circle p-1" style="color:white; font-size:48px;"></i>
            <h4 class="ml-3">A confirmation email has been sent to <?php echo $email; ?></h4>
        </div>

        <div class="row">
            <div class="col-md-5 col-12">
                <p>Your application has been submitted successfully. <b>Please check your email for the login credentials</b>, you can access the Student Information System (SIS) using the provided password sent to your email.</p>
                <p class="pb-5">If you need further assistance, please go to contact us page for further details.</p>
                <a class="btn btn-secondary btn-sm" href="/index.php" role="button">Back to Home</a>
            </div>
            <div class="col-md-5 col-12">
                <img src="/img/apply_finish.png" height=250>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-5col-12">
                <hr>
                <small>By completing this form, I hereby affirm that I agree with the <a href="/pages/privacy-policy.php">Skyline University Privacy Policy</a> terms and to receive updates from the university that may include emails, calls, and text messages.</small>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5" style="height: 100px; width: 100%; background-color: silver;"></div>
</body>

<?php
    }
}
?>
