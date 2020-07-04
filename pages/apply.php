<?php
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

    #form-page-body {
        height: 100vh;
    }

</style>
<!-- End of custom CSS ----------------------------------------------------->

<body id="form-page-body">
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
            <form class="col-md-6 col-12 p-0" style="position: relative;" action="apply2.php#form-position" method="post" enctype="multipart/form-data">
                <!-- Form Heading -->
                <div class="bg-dark text-center align-center p-4">
                    <h4 class="m-auto text-white">ADMISSION FORM</h4>
                </div>

                <!-- Start of form elements -->
                <div class="form-row p-5">
                    <div class="col-12 col-group">

                        <!-- Personal details -->
                        <fieldset class="mt-4">

                            <div class="form-row mb-2">
                                <div class="col-md-6 col-12 mbs-7 col-group">
                                    <input id="fname" class="form-control" type="text" name="fname" placeholder="First Name" pattern="[A-Za-z\.]{2,30}" title="Please enter only alphabet characters" required>
                                </div>
                                <div class=" col-md-6 col-12 col-group">
                                    <input id="lname" class="form-control" type="text" name="lname" placeholder="Last Name" pattern="[A-Za-z\.]{4,10}" required>
                                </div>
                            </div>
                            <!-- Gender dropdown -->
                            <div class="form-row mb-2">
                                <div class="col-md-4 col-12 mbs-7 col-group">
                                    <select id="gender" class="form-control" name="gender" required>
                                        <option value="">Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-8 col-12 col-group">
                                    <input id="dob" type="date" class="form-control" name="DOB" required>
                                </div>
                            </div> <!-- End of Gender dropdown -->

                            <!-- Email input box -->
                            <div class="form-row">
                                <div class="col-12 mbs-7 col-group">
                                    <input id="email" class="form-control" type="email" name="email" placeholder="Email" required>
                                </div>
                            </div> <!-- End of Email input box -->
                        </fieldset> <!-- End of personal details -->



                        <!-- Area of Study details -->
                        <fieldset class="mt-4">

                            <!-- Degree dropdown menu -->
                            <div class="form-row">
                                <div class="col-12 mbs-7 col-group">
                                    <select id="degreeList" class="form-control" name="LevelList" required>
                                        <option value="" selected>Select Degree Level</option> <!-- Default Hint Value -->
                                    </select>
                                </div>
                            </div> <!-- End of Degree dropdown menu -->

                            <!-- College dropdown menu -->
                            <div class="form-row mt-2">
                                <div class="col-12 mbs-7 col-group">
                                    <select id="collegeList" class="form-control" name="collegeList" value="Choose Department" style="display:none;" required>
                                        <option value="" selected>Select College</option> <!-- Default Hint Value -->
                                    </select>
                                </div>
                            </div> <!-- End of College dropdown menu -->

                            <!-- Program dropdown menu -->
                            <div class="form-row mt-2">
                                <div class="col-12 mbs-7 col-group">
                                    <select id="programList" class="form-control" name="programList" value="Choose Program" style="display:none;" required>
                                        <option value="" selected>Select Program</option> <!-- Default Hint Value -->
                                    </select>
                                </div>
                            </div><!-- End of Program dropdown menu -->
                        </fieldset> <!-- End of Area of Study details -->

                        <!-- Submit button -->
                        <fieldset class="mt-4">
                            <div class="form-row my-4">
                                <div class="col-md-6 col-12 col-group text-left">
                                </div>
                                <div class="col-md-6 col-12 col-group text-right">
                                    <input class="btn btn-block apply-button" onclick="storeSessionData()" type="submit" name="submit1" value="NEXT" role="button">
                                </div>
                            </div>
                        </fieldset> <!-- End of Submit button -->

                    </div>
                </div> <!-- End of form elements -->
                <hr class="m-0">
                <div class="p-2 px-5">
                    <small class="text-secondary">By submitting this form, i hereby agree to <a href="#">SU Privacy Policy terms</a> which includes cookies, emails and text messages. Your information will be kept private and disclosed. </small>
                </div>

            </form> <!-- End of right panel form -->
        </div> <!-- End of main row and main form area -->

    </div> <!-- End of main container -->

    <!-- A div with a spinner GIF for loading -->
    <div id="spinner">
        <img src="../img/spinner.gif">
    </div>

    <!-- A file containing different form functions -->
    <script src="../js/form_functions.js"></script>

</body>
