<?php 
    session_start();
    $title = "EDIT PROGRAM";
    $cssLink = "../../css/";
    include("../../inc/header.php");
    include("../../../../db_connection.php");

    function redirect(){
        header("location: ../../../index.php");
        exit;
    }
    
    if(isset($_GET['programID']) && $_GET['programID'] !== ''){
        $programID = $_GET['programID'];
        
        $sql = "SELECT * FROM program WHERE program_id = '$programID'";
        
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $programID = $row['program_id'];
                $collegeID = $row['college_id'];
                $degreeID = $row['degree_level_id'];
                $programName = $row['program_name'];
                $totalCredits = $row['total_credits'];
                $duration = $row['duration'];
                $description = $row['description'];
            }
        }
    } else {
        redirect();
    }
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Edit Program</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Programs > Edit Program</li>
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
                <form class = "adding-form py-5" action = "../../php/editing-form.php" method = "post" enctype="multipart/form-data">
                    <!-- Hidden row used for 'adding-form.php' to distinguish between different submitted forms -->
                    <div class = "form-row">
                        <div class = "col-12">
                            <input type = "hidden" class = "form-control" name = "programsFormEdit" id = "programsFormEdit" value = "programsFormEdit">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputProgramID">Program ID<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputProgramID" name = "inputProgramID" maxlength = "10" value = "<?php echo $programID; ?>" required readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputProgramName">Program Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputProgramName" name = "inputProgramName" maxlength = "100" value = "<?php echo $programName; ?>" required autofocus>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCollegeID">College<span class = "asterisk">*</span></label>
                            <select name = "inputCollegeID" class = "form-control" id="inputCollegeID" required>
                                <?php

                                $sql = "select college_id, college_name from college";

                                $result = $mysqli->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        if ($row["college_id"] == $collegeID) {
                                    ?>
                                            <option value = "<?php echo $row["college_id"]; ?>" selected><?php echo $row["college_name"]; ?></option>
                                        <?php
                                      } else {
                                        ?>
                                            <option value = "<?php echo $row["college_id"]; ?>"><?php echo $row["college_name"]; ?></option>
                                            <?php
                                        }
                                    }
                                } else {
                                    ?>
                                    <option value = "" disabled>No Colleges Available</option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDegreeID">Degree<span class = "asterisk">*</span></label>
                            <select name = "inputDegreeID" class = "form-control" id="inputDegreeID" required>
                                <?php
                                    $sql = "select * from degree_level";

                                    $result = $mysqli->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            if ($row["degree_level_id"] == $degreeID) {
                                        ?>
                                                <option value = "<?php echo $row["degree_level_id"]; ?>" selected><?php echo $row["degree_level_name"]; ?></option>
                                            <?php
                                              } else {
                                            ?>
                                                <option value = "<?php echo $row["degree_level_id"]; ?>"><?php echo $row["degree_level_name"]; ?></option>
                                                <?php
                                                }
                                            }
                                    } else {
                                        ?>
                                        <option value = "" disabled>No Degrees Available</option>
                                        <?php
                                    }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputTotalCredits">Total Credits<span class = "asterisk">*</span></label>
                            <input type="number" min = "0" max = "999" class="form-control" id="inputTotalCredits" name = "inputTotalCredits" value = "<?php echo $totalCredits; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDuration">Study Duration<span class = "asterisk">*</span></label>
                            <select name = "inputDuration" class = "form-control" id="inputDuration" required>
                                <?php 
                                    if ($duration == "1-2 years"){ ?>
                                        <option value = "1-2 years" selected>1-2 years</option>
                                        <option value = "2-4 years">2-4 years</option>
                                        <option value = "3-6 years">3-6 years</option>
                                        <option value = "4-8 years">4-8 years</option>
                                        <option value = "5-10 years">5-10 years</option>
                                <?php
                                    } else if ($duration == "2-4 years"){ ?>
                                        <option value = "1-2 years">1-2 years</option>
                                        <option value = "2-4 years" selected>2-4 years</option>
                                        <option value = "3-6 years">3-6 years</option>
                                        <option value = "4-8 years">4-8 years</option>
                                        <option value = "5-10 years">5-10 years</option>
                                <?php
                                    } else if ($duration == "3-6 years"){ ?>
                                        <option value = "1-2 years">1-2 years</option>
                                        <option value = "2-4 years">2-4 years</option>
                                        <option value = "3-6 years" selected>3-6 years</option>
                                        <option value = "4-8 years">4-8 years</option>
                                        <option value = "5-10 years">5-10 years</option>
                                <?php
                                    } else if ($duration == "4-8 years"){ ?>
                                        <option value = "1-2 years">1-2 years</option>
                                        <option value = "2-4 years">2-4 years</option>
                                        <option value = "3-6 years">3-6 years</option>
                                        <option value = "4-8 years" selected>4-8 years</option>
                                        <option value = "5-10 years">5-10 years</option>
                                <?php
                                    } else if ($duration == "5-10 years"){ ?>
                                        <option value = "1-2 years">1-2 years</option>
                                        <option value = "2-4 years">2-4 years</option>
                                        <option value = "3-6 years">3-6 years</option>
                                        <option value = "4-8 years">4-8 years</option>
                                        <option value = "5-10 years" selected>5-10 years</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputDescription">Program Description</label>
                            <?php 
                                if (!isset($description) || $description == "") {
                                    ?>
                                    <textarea maxlength="1000" rows = "3" class="form-control" id="inputDescription" name = "inputDescription" placeholder="1000 maximum characters..."></textarea>
                                <?php
                                } else {
                                ?>
                                    <textarea maxlength="1000" rows = "3" class="form-control" id="inputDescription" name = "inputDescription"><?php echo $description; ?></textarea>
                                <?php 
                                    }
                                ?>
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
                            <button type="submit" name = "submit" class="btn btn-primary btn-block">CONFIRM</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>

<?php 
$mysqli->close();
?>