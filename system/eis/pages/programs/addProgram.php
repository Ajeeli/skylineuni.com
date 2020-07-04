<?php 
    session_start();
    $title = "ADD PROGRAM";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Add Program</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Programs > Add Program</li>
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
                            <input type = "hidden" class = "form-control" name = "programsForm" id = "programsForm" value = "programsForm">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputProgramID">Program ID<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputProgramID" name = "inputProgramID" placeholder = "10 Maximum Characters..." maxlength = "10" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputProgramName">Program Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputProgramName" name = "inputProgramName" maxlength = "100" required>
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
                        <div class="form-group col-md-6">
                            <label for="inputDegreeID">Degree<span class = "asterisk">*</span></label>
                            <select name = "inputDegreeID" class = "form-control" id="inputDegreeID" required>
                                <?php
                                    include("../../inc/degreeID.php");
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputTotalCredits">Total Credits<span class = "asterisk">*</span></label>
                            <input type="number" min = "0" class="form-control" id="inputTotalCredits" name = "inputTotalCredits" value = "100" max = "999" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDuration">Study Duration<span class = "asterisk">*</span></label>
                            <select name = "inputDuration" class = "form-control" id="inputDuration" required>
                                <option value = "1-2 years">1-2 years</option>
                                <option value = "2-4 years" selected>2-4 years</option>
                                <option value = "3-6 years">3-6 years</option>
                                <option value = "4-8 years">4-8 years</option>
                                <option value = "5-10 years">5-10 years</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputDescription">Program Description</label>
                            <textarea maxlength="1000" rows = "3" class="form-control" id="inputDescription" name = "inputDescription" placeholder="1000 maximum characters..."></textarea>
                        </div>
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
                            <button type="submit" name = "submit" class="btn btn-primary btn-block">ADD</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>