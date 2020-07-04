<?php 
    session_start();
    $title = "ADD PROFESSOR";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Add Professor</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Professors > Add Professor</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header py-3">
            <div class = "col-9">
                <h4>Basic Information</h4>
            </div>
            <div class = "col-3 text-right rdc-icons">
            </div>
        </div>
        <div class = "row frame-body">
            <div class = "col-10 offset-1">
                <form class = "adding-form py-5" action = "../../php/adding-form.php" method = "post" enctype="multipart/form-data">
                    <!-- Hidden row used for 'adding-form.php' to distinguish between different submitted forms -->
                    <div class = "form-row">
                        <div class = "col-12">
                            <input type = "hidden" class = "form-control" name = "professorsForm" id = "professorsForm" value = "professorsForm">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputFName">First Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputFName" name = "inputFName" maxlength = "25" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLName">Last Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputLName" name = "inputLName" maxlength = "25" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputGender">Gender<span class = "asterisk">*</span></label>
                            <select id="inputGender" name = "inputGender" class="form-control" required>
                                <option value = "M" selected>Male</option>
                                <option value = "F">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDOB">Date of Birth<span class = "asterisk">*</span></label>
                            <input type="date" class="form-control" id="inputDOB" name = "inputDOB" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputMobile">Phone Number<span class = "asterisk">*</span></label>
                            <input type="number_format" class="form-control" id="inputMobile" name = "inputMobile" maxlength = "15" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email<span class = "asterisk">*</span></label>
                            <input type="email" class="form-control" id="inputEmail" name = "inputEmail" maxlength = "50" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword">Password<span class = "asterisk">*</span></label>
                            <input type="password" class="form-control" id="inputPassword" name = "inputPassword" maxlength = "50" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputConfirmPassword">Confirm Password<span class = "asterisk">*</span></label>
                            <input type="password" class="form-control" id="inputConfirmPassword" name = "inputConfirmPassword" maxlength = "50" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputCity" name = "inputCity" maxlength = "50" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCountry">Country<span class = "asterisk">*</span></label>
                            <select id="inputCountry" name = "inputCountry" class="form-control" required>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPosition">Position<span class = "asterisk">*</span></label>
                            <select name = "inputPosition" class = "form-control" id="inputPosition" required>
                                <?php
                                    include("../../inc/positionID.php");
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputJoiningDate">Joining Date<span class = "asterisk">*</span></label>
                            <input type="date" class="form-control" id="inputJoiningDate" name = "inputJoiningDate" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCollegeID">College<span class = "asterisk">*</span></label>
                            <select name = "inputCollegeID" class = "form-control" id="inputCollegeID" required>
                                <?php
                                    include("../../inc/collegeID.php");
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="custom-file my-3">
                        <input type="file" class="custom-file-input" id="uploadImage" name = "uploadImage">
                        <label class="custom-file-label" for="customFile">Upload Image</label>
                    </div>
                    <div class="form-row py-4">
                        <div class = "form-group col-md-6">
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <!--
                                <label class="custom-control-label" for="customCheck1">Agree to <a href = "">terms and conditions</a></label>
                                -->
                            </div>
                        </div>
                        <div class = "form-group col-md-6 text-right">
                            <button type="submit" name = "submit" class="btn btn-primary btn-block">REGISTER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>