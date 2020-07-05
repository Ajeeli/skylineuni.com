<?php
    $title = "CONTACT US";
    include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");

    // Send Email
    $send = 0;

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
    if(isset($_POST['phone'])) {
        $phone = $_POST['phone'];
        $send++;
    }
    if(isset($_POST['message'])) {
        $message = $_POST['message'];
        $send++;
    }

    if ($send == 5) {
        // Send Email

        $name = $fname . " " . $lname;
        // PHP Mailer Class
        $to = "contact@skylineuni.com";
        $subject = "$name - Contact Message";

        $message = "
        <html style = 'box-sizing: border-box;'>
        <head>
        <title>Contact Message</title>
        </head>
        <body>
        <div>
            <small>Contactee Details</small><br/>
            <small>$name</small><br/>
            <small>$email</small><br/>
            <small>$phone</small><br/>
            <p style = 'padding-top: 25px;'>$message</p>
        </div>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Add to headers string
        $headers .= 'From: <' . $email . '>' . "\r\n";
        $headers .= 'BCC: backup@skylineuni.com' . "\r\n";

        mail($to,$subject,$message,$headers);
    }
?>


<body>
	<div class="container-contact100 py-5">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action = "" method = "post">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="fname" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="lname" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="+44 7 123456789">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Message
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-02.jpg');">
                <?php 
                if ($send == 5) {
                ?>
                <div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-checkmark-circle"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20" style = "color: green;">
							Message Sent Successfully
						</span>

						<span class="txt2">
							Thank you for contacting us, your message has been received. A skyline representative will reply within 3 businesss days.
						</span>
					</div>
				</div>
                <?php
                }
                ?>
                
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Office 62, Building 2317, Road 2830, Block 428 , Seef District, Manama, Bahrain
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+973 39545754
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@skylineuni.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>

<?php
    include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>