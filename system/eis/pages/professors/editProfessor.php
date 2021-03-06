<?php 
    session_start();
    $title = "EDIT PROFESSOR";
    $cssLink = "../../css/";
    include("../../inc/header.php");
    include("../../../../db_connection.php");

    function redirect(){
        header("location: ../../../index.php");
        exit;
    }
    
    if(isset($_GET['tutorID']) && $_GET['tutorID'] !== ''){
        $tutorID = $_GET['tutorID'];
        
        $sql = "SELECT * FROM tutor WHERE tutor_id = '$tutorID'";
        
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $tutorID = $row['tutor_id'];
                $collegeID = $row['college_id'];
                $position = $row['position'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $gender = $row['gender'];
                $DOB = $row['DOB'];
                $email = $row['email'];
                $password = $row['password'];
                $phoneNumber = $row['phone_number'];
                $city = $row['city'];
                $country = $row['country'];
                $date = $row['start_date'];
                $photo = $row['photo'];
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
                <h3>Edit Professor</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Professors > Edit Professor</li>
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
                            <input type = "hidden" class = "form-control" name = "professorsFormEdit" id = "professorsFormEdit" value = "professorsFormEdit">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class = "form-group col-12">
                            <label for="tutorID">Tutor ID</label>
                            <input type = "text" class = "form-control" name = "tutorID" id = "tutorID" value = "<?php echo $tutorID; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputFName">First Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputFName" name = "inputFName" maxlength = "25" value = "<?php echo $fname; ?>" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLName">Last Name<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputLName" name = "inputLName" maxlength = "25" value = "<?php echo $lname; ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputGender">Gender<span class = "asterisk">*</span></label>
                            <select id="inputGender" name = "inputGender" class="form-control" required>
                                <?php 
                                    if ($gender == "M"){ ?>
                                        <option value = "M" selected>Male</option>
                                        <option value = "F">Female</option>
                                <?php
                                    } else if ($gender == "F"){ ?>
                                        <option value = "M">Male</option>
                                        <option value = "F" selected>Female</option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDOB">Date of Birth<span class = "asterisk">*</span></label>
                            <input type="date" class="form-control" id="inputDOB" name = "inputDOB" value = "<?php echo $DOB; ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputMobile">Phone Number<span class = "asterisk">*</span></label>
                            <input type="number_format" class="form-control" id="inputMobile" name = "inputMobile" maxlength = "15" value = "<?php echo $phoneNumber; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email<span class = "asterisk">*</span></label>
                            <input type="email" class="form-control" id="inputEmail" name = "inputEmail" maxlength = "50" value = "<?php echo $email; ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword">Password<span class = "asterisk">*</span></label>
                            <input type="password" class="form-control" id="inputPassword" name = "inputPassword" maxlength = "50" value = "<?php echo $password; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputConfirmPassword">Confirm Password<span class = "asterisk">*</span></label>
                            <input type="password" class="form-control" id="inputConfirmPassword" name = "inputConfirmPassword" maxlength = "50" value = "<?php echo $password; ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City<span class = "asterisk">*</span></label>
                            <input type="text" class="form-control" id="inputCity" name = "inputCity" maxlength = "50" value = "<?php echo $city; ?>" required>
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
                                    $sql = "select position from salary";

                                    $result = $mysqli->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            if ($row["position"] == $position) {
                                        ?>
                                                <option value = "<?php echo $row["position"]; ?>" selected><?php echo $row["position"]; ?></option>
                                            <?php
                                              } else {
                                            ?>
                                                <option value = "<?php echo $row["position"]; ?>"><?php echo $row["position"]; ?></option>
                                                <?php
                                                }
                                            }
                                    } else {
                                        ?>
                                        <option value = "" disabled>No Positions Available</option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputJoiningDate">Joining Date<span class = "asterisk">*</span></label>
                            <input type="date" class="form-control" id="inputJoiningDate" name = "inputJoiningDate" value = "<?php echo $date; ?>" required>
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
                    </div>
                    <div class="custom-file my-3">
                        <input type="file" class="custom-file-input" id="uploadImage" name = "uploadImage">
                        <label class="custom-file-label" for="customFile">Upload Image</label>
                        <!-- Get image file name from database and store it in imageName as hidden input for further processing (needed only when updating images)-->
                        <input type = "hidden" class="custom-file-input" id="imageName" name = "imageName" value = "<?php echo $photo; ?>">
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