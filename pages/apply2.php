<?php
// Preventing direct access to application second form using URL without submitting first form
if (!isset($_POST['submit1'])) {
    header ("Location: /pages/apply.php");
    exit();
} else {
    if (isset($_POST['programList'])) {
        $programName = trim($_POST['programList']);
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $gender = trim($_POST['gender']);
        $DOB = trim($_POST['DOB']);
        $email = trim($_POST['email']);
    }
}

$title = "Application";
include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header_skeleton.php");
?>

<!-- Custom CSS for this page ----------------------------------------------------->
<style>
    body {
        background: rgb(240, 240, 240);
        align-items: center;
    }

    .main-form-area {
        box-shadow: 20px 20px 20px grey;
        min-height: 600px;

    }

    /* Left panel CSS */
    .overlay {
        background: rgba(0, 30, 50, 0.8);
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .left-panel-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
        color: white;
    }

    /* Set placholder color for input fields */
    form .form-control::-webkit-input-placeholder {
        color: rgb(160, 160, 160);
    }

    /* Set placholder color for date fields */
    input[type=date]:invalid::-webkit-datetime-edit {
        color: rgb(160, 160, 160);
    }

    /* Set placholder color for dropdown lists fields */
    select:required:invalid {
        color: rgb(160, 160, 160);
    }

    option[value=""][disabled] {
        color: rgb(160, 160, 160);
    }

    select option {
        color: black;
    }

    /* Change all filled-out form elements background colour */
    .form-control:valid {
        background-color: rgba(232, 240, 254, 1);
        border: 1px solid black;
    }

    /* Change browser autocomplete form element background colour */
    input:-webkit-autofill,
    textarea:-webkit-autofill,
    select:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px rgba(232, 240, 254, 1) inset !important;
    }

    #spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -100px;
        margin-top: -100px;
        display: none;
    }

</style>
<!-- End of custom CSS ----------------------------------------------------->

<body>
    <div class="container pt-5">
        <!-- Changed col-10 to col-md-10 and col 12 for same purpose as below -->
        <div class="main-form-area row col-md-10 col-12 p-0 m-5 mx-auto">
            <!-- Changed Left & Right panel's Col-6 to col-md-6 for devices larger than mobiles and col-12 to fit mobile screens -->
            <!-- Left form panel -->
            <div class="col-md-6 col-12 p-0 d-flex" style="background-image: url(../img/applying_online.jpg); background-color: rgb(60, 100, 120); background-blend-mode: multiply;">

                <div class="left-panel-content py-3" style="background-color: rgba(0,0,0,0.5)">
                    <h3 class="font-weight-bold">REGISTER NOW</h3>
                    <h6>AUTUMN 2020</h6>
                </div>
            </div> <!-- End of left form panel -->

            <!-- Right panel form -->
            <form class="application-form col-md-6 col-12 p-0" style="position: relative;" action="apply3.php#form-position" method="post" enctype="multipart/form-data">
                <!-- Form Heading -->
                <div class="bg-dark text-center align-center p-4">
                    <h4 class="m-auto text-white">ADMISSION FORM</h4>
                </div>

                <!-- Hidden form data from first page to be sent to database after form completion -->
                <div class="form-row">
                    <div class="col-12 col-group">
                        <input type="hidden" name="startDate" value="<?php echo date('y-m-d'); ?>">
                        <input type="hidden" name="programName" value="<?php echo $programName; ?>">
                        <input type="hidden" name="fname" value="<?php echo $fname; ?>">
                        <input type="hidden" name="lname" value="<?php echo $lname; ?>">
                        <input type="hidden" name="gender" value="<?php echo $gender; ?>">
                        <input type="hidden" name="DOB" value="<?php echo $DOB; ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>

                <div class="form-row p-5">
                    <div class="col-12 col-group">
                        <fieldset id="residencefieldset" class="mt-4">
                            <div class="form-row">
                                <div class="col-12 col-group">
                                    <p class="fieldset-headers mb-1">Residence Details</p>
                                </div>
                            </div>

                            <!-- Country of residence -->
                            <div class="form-row mb-2">
                                <div class="col-md-6 col-12 col-group">
                                    <!-- Insert Country based on IP address using Ajax API -->
                                    <select id="country" name="country" class="form-control" required>
                                        <?php include("../inc/countries.html"); ?>
                                        <script src="../js/get_country.js"></script>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 col-group">
                                    <input class="form-control" type="text" name="city" placeholder="City" required>
                                </div>
                            </div>

                            <!-- Phone number -->
                            <div class="form-row mb-2">
                                <div class="col-md-3 col-12 col-group">
                                    <!-- Insert phone extention based on IP address using cURL API -->
                                    <input class="form-control" type="tel" name="phoneEXT" placeholder="<?php include("../inc/get_country_calling_code.php") ?>" value="<?php include("../inc/get_country_calling_code.php") ?>" required>
                                </div>
                                <div class="col-md-9 col-12 col-group">
                                    <input class="form-control" type="tel" name="phone" placeholder="Phone" required>
                                </div>
                            </div> <!-- End of Phone number -->


                            <!-- Nationality -->
                            <div class="form-row">
                                <div class="col-12 col-group">
                                    <p class="fieldset-headers mb-1">Nationality</p>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col-12 col-group">
                                    <select id="country" name="nationality" class="form-control" required>
                                        <?php include("../inc/countries.html"); ?>
                                    </select>
                                </div>
                            </div> <!-- End of Nationality -->

                            <!-- Level of Education -->
                            <div class="mb-1">
                                What is the highest level of education you have completed?
                            </div>

                            <div class="form-row mb-3">
                                <div class="col-12 col-group">
                                    <select id="educationLevelDropDown" class="form-control mb-2" onchange="onEducationLevelChange()" name="educationLevel" required>
                                        <option value="">Select ...</option>
                                        <option value="Highschool">Highschool Degree</option>
                                        <option value="Associate">Associate Degree</option>
                                        <option value="Bachelors">Bachelor's Degree</option>
                                        <option value="Masters">Masters Degree</option>
                                        <option value="Phd">Phd Degree</option>
                                        <option value="None">I don't have any degree yet</option>
                                    </select>
                                </div>
                            </div> <!-- End of Level of Education -->

                            <!-- Proof of degree -->
                            <div id="degreeProofDiv" style="display: none;">
                                <div class="mb-1">
                                    Can you provide a copy of your degree?
                                </div>
                                <div class=" form-row mb-4">
                                    <div class="col-12 col-group">
                                        <select id="degreeCopyDropDown" class="form-control mb-2" onchange="onDegreeCopyChange()" name="degreeCopy" required>
                                            <option value="">Select ...</option>
                                            <option value="Yes">Yes, i can provide a copy</option>
                                            <option value="Yes (later)">Yes, but not now</option>
                                            <option value="No">No, i cannot provide any copy</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- End of Proof of degree -->
                        </fieldset> <!-- End of form input and elements -->

                        <!-- Submit Button -->
                        <fieldset class="mt-2">
                            <div class="form-row mb-2 mt-4">
                                <div class="col-md-6 col-12 col-group text-left">
                                </div>
                                <div class="col-md-6 col-12 col-group text-right">
                                    <input class="btn btn-block apply-button" type="submit" name="submit2" value="SUBMIT" role="button">
                                </div>
                            </div>
                        </fieldset> <!-- Submit Button -->
                    </div>
                </div>
            </form>
        </div> <!-- End of main row and main form area -->
    </div> <!-- End of main container -->


    <!-- A file containing different form functions -->
    <script src="../js/form_functions.js"></script>

</body>
