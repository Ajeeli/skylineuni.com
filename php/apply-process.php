<!-- Apply Application Process -->
<?php
    session_start();
    //$_SESSION["payed"] = false;
/*
    function redirection($enroll) {
        if ($enroll == true) {
            $_SESSION['user']['applied'] = true;
            header ("Location: ../index.php");
        } else {
            $_SESSION['user']['applyError'] = true;
            header ("Location: ../pages/apply.php#form-section");
        }
    }
*/
?>

<?php 

include ('../dbconn.php');

$noError = true;
$status = 0;
$sql = false;
$query = false;
$enroll = false;
$newEmail = false;

if (isset($_POST['submit'])) {
    
    if(isset($_POST['programID'])) {
        $programID = $_POST['programID'];
    } else {
        $noError = false;
    }
    /*
    if(isset($_POST['area-of-study'])) {
        $areaOfStudy = $_POST['area-of-study'];
    } else {
        $noError = false;
    }
    */
    
    if(isset($_POST['AppDate'])) {
        $AppDate = $_POST['AppDate'];
    } else {
        $noError = false;
    }
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
    if(isset($_POST['fname']) && isset($_POST['lname'])) {
        $name = $fname . ' ' . $lname;
    }
    if(isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $noError = false;
    }
    if(isset($_POST['DOB'])) {
        $DOB = $_POST['DOB'];
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
        if(isset($_POST['cpassword'])){
            $cpassword = $_POST['cpassword'];
            if ($password !== $cpassword) {
                $noError = false;
            }
        }
    } else {
        $noError = false;
    }
    if(isset($_POST['file'])){
        $filename = $_POST['file'];
    } else {
        //echo "Error: File Submition |";
    }

} else {
    echo "Access Denied";
    $noError = false;
    exit;
}

?>

<?php   // Checking against database - email existence

    if ($noError) {
        $sql = "SELECT Email FROM applications WHERE Email = '$email'";
        $result = $mysqli->query($sql);
        
        if ($result->num_rows == 0) {
            $newEmail = true;
        }
    }
?>

<?php 
if ($newEmail) {
// File upload component
    $noError = 1;
    $uploaddir = '';

    $uploaddir = '../files/';

    $uploadfile = $uploaddir . $email . '-' . basename($_FILES['file']['name']);

    // Check if file already exists
    /*
    if (file_exists($uploadfile)) {
        echo "Sorry, file already exists.";
        $noError = 0;
    }*/

    // Check file size
    if ($_FILES["file"]["size"] > 5000000) {
        //echo "| Sorry, your file is too large |";
        $noError = 0;
    }

    // Allow certain file formats
    $allowed = array('jpg','jpeg','png','gif', 'pdf', 'doc', 'docx');
    $filename = $email . '-' . $_FILES['file']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$allowed) ) {
        //echo '| File type not allowed |';
        $noError = 0;
    }

    if ($noError === 1) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            //echo "| File is valid, and was successfully uploaded |";
        } else {
            $noError = 0;
        }
    } else {
        //echo "Error | File was not uploaded |";
    }
}
    // End of file upload component
?>

<?php   // If email doesn't exit in DB - enroll user

    if ($newEmail) {
        
        $sql = "INSERT INTO applications (Name, Gender, DOB, Email, Password, Mobile, City, Country, Address, AppDate, AppFee, File, ProgramID) VALUES ('$name', '$gender', '$DOB', '$email', '$password', '$phone', '$city', '$country', '$address', '$AppDate', 15, '$filename', '$programID')";
        
        if ($mysqli->query($sql) === true) {
            $enroll = true;
            
            ///////////////////////////////////

            $to = "$email";
            $subject = "Skyline University Enrollment";
            $txt = "Dear Mr/Ms. $name," . "\r\n\n" . "Thank you for enrolling with Skyline University, in order to complete your application process, a $30 fee is applicable. Once the fee has been paid, the admission department at Skyline University will process your application, if you are eligible to enroll at Skyline University, a follow up email will be sent. Please do not hesitate contacting us for further help." . "\r\n\n" . "Sincerely" . "\r\n" . "Skyline Board";
            $headers = "From: admin@ajeeli.com" . "\r\n" .
            "BCC: backup@ajeeli.com";

            mail($to,$subject,$txt,$headers);
            
            
            $title = "ADMISSION FEE | SKYLINE UNIVERSITY";
            include ('../inc/pageLinks.php');
        ?>

        <!DOCTYPE html>
        <html lang = "en">
        <head>
            <!-- Meta Tags -->
            <meta charset = "UTF-8">
            <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
            <meta name = "viewport" content = "width=device-width, initial-scale = 1.0, fit-to-shrink=no, user-scalable=no">
            <meta name = "description" content = "Skyline Online University SOU is a high standard university that allows people from all around the world to educate themselves at near zero costs, it is organized by high level teachers and professors">
            <meta name = "author" content = "Skyline Technologies W.L.L">
            <meta name = "keywords" content = "skytechbh, skyline, skyline technologies, bahrain, worldwide, university, online university, cheap university, good university">
            <!-- Bootstrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <!-- Icons -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
            <!-- Fonts -->
            <!-- CSS Link -->
            <link type = "text/css" rel = "stylesheet" href = "<?php echo $cssLink . 'style.css'; ?>">
            <link type = "text/css" rel = "stylesheet" href = "<?php echo $cssLink . 'programs-images'; ?>">
            <!-- JS Links -->
            <!-- PHP Links -->
            <!-- Title -->
            <title><?php echo $title; ?></title>

            <style>  
                #paypal-submit-btn {
                    position: absolute;
                    margin: 0;
                    left: 50%;
                    top: 50%;
                    -ms-transform: translateY(-50%);
                    transform: translateY(-50%);
                    -ms-transform: translateX(-50%);
                    transform: translateX(-50%);
                    margin-top: 3%;
                }
                #back-link {
                    position: absolute;
                    margin: 0;
                    left: 50%;
                    top: 50%;
                    -ms-transform: translateY(-50%);
                    transform: translateY(-50%);
                    -ms-transform: translateX(-50%);
                    transform: translateX(-50%);
                    margin-top: 10%;
                }
                html {
                    border-top: 3px ridge blue;
                    border-left: 3px ridge blue;
                    border-right: 3px ridge blue;
                    border-top-left-radius: 3px;
                    border-top-right-radius: 3px;
                }
                body {
                    margin: 3px 3px 0 3px;
                    border-top: 3px ridge blue;
                    border-left: 3px ridge blue;
                    border-right: 3px ridge blue;
                    border-top-left-radius: 3px;
                    border-top-right-radius: 3px;
                }
            </style>
        </head>
        <body>

        <section class="my-5 py-5">
            <div class = "container my-5">
                <!-- Section heading -->
                <h2 class="h1-responsive about-section-headers-black text-center">Admission Fee Payment</h2>
                <!-- Section description -->
                <p class = "main-text mt-5">In order to complete your admmission process with Skyline University, a $15 USD Admission Fee must be payed before your application is reviewed by Skyline University Admission Department.</p>

                <?php
                include("../dbconn.php");
                // Get the AppID (Application ID) from the application table of the user who just submitted the application, and use it as the item-number in the paypal hidden input in the form below
                $appID = $mysqli->query("SELECT AppID FROM applications WHERE Email = '$email'")->fetch_object()->AppID;  
                $mysqli->close();

                // Include Paypal function
                include("functions.php");
                ?>

                <!-- Paypal hidden inputs (sent to paypal) -->
                <form class="paypal" action="payments.php" method="post" id="paypal_form">
                    <div class = "form-row">
                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="no_note" value="1" />
                        <input type="hidden" name="lc" value="<?php echo $country; ?>" />
                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                        <input type="hidden" name="first_name" value="<?php echo $fname; ?>" />
                        <input type="hidden" name="last_name" value="<?php echo $lname; ?>" />
                        <input type="hidden" name="payer_email" value="<?php echo $email; ?>" />
                        <input type="hidden" name="item_number" value="<?php echo $appID; ?>" />
                        <input type="hidden" name="page-name" value="apply-process" />
                        <input type="submit" name="submit" value="SUBMIT PAYMENT" class="btn btn-primary" id = "paypal-submit-btn" onclick="setSessions()" />
                    </div>
                </form>
                
                <!-- End of Paypal hidden inputs -->
                <a href = "../pages/apply.php" id = "back-link"><i class="fas fa-arrow-circle-left"></i> Back to Admission Form</a>
            </div>
        </section>

        <script type = "text/javascript">
            function setSessions() {
                <?php 
                // Set session variables and use in "payment-successful.php" to insert into students table if applicant pays addmision fee and payment is successful
                $_SESSION["name"] = "$name";
                $_SESSION["gender"] = "$gender";
                $_SESSION["DOB"] = "$DOB";
                $_SESSION["email"] = "$email";
                $_SESSION["password"] = "$password";
                $_SESSION["mobile"] = "$phone";
                $_SESSION["city"] = "$city";
                $_SESSION["country"] = "$country";
                $_SESSION["enrollment_date"] = date('y-m-d');
                $_SESSION["programID"] = "$programID";
                $_SESSION["itemid"] = "$appID";
                $_SESSION["page_name"] = "apply-process";
            
                //$_SESSION["payed"] = true;
                ?>
            }
        </script>
        </body>
        </html>

        <?php
            //////////////////////////////////
            
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
?>

<?php 
//$mysqli->close();
//redirection($enroll);
?>
<!-- End of Apply Application Process -->