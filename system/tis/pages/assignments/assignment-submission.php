<?php 
    session_start();
    $title = "ALL ASSIGNMENTS";
    $cssLink = "../../css/";
    include("../../inc/header.php");
    include("../../../../db_connection.php");

    $tutorID = $_SESSION['tutor']['id'];
    
    if (isset($_POST['submit'])){
        if (isset($_POST['sectionID'])){
            $sectionID = $_POST['sectionID'];
        }
        if (isset($_POST['assignmentID'])){
            $assignmentID = $_POST['assignmentID'];
            $assignment = "assignment" . $assignmentID;
        }
        if (isset($_POST['studentID'])){
            $studentID = $_POST['studentID'];
        }
        if (isset($_POST['inputGrade'])){
            $inputGrade = $_POST['inputGrade'];
        }
        $sql = "UPDATE 
        enrollment 
        SET 
        $assignment" . "_grade = $inputGrade 
        WHERE 
        section_id = '$sectionID' 
        AND 
        student_id = $studentID";

            if ($mysqli->query($sql) === TRUE) {
                // echo "| New record created successfully |";
            } else {
                // echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        
    } else {
        $sectionID = $_GET['sectionID'];
        $assignmentID = $_GET['assignmentID'];
        $assignment = "assignment" . $assignmentID;
    }
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3> All Assignments</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="assignment1.php"> All Assignments </a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page"> Assignment Submissions</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header pt-2 pb-1">
            <div class = "col-9">
                <h4>Assignment <?php echo $assignmentID; ?> Submissions</h4>
            </div>
            <div class = "col-3 text-right rdc-icons">
            </div>
        </div>
        <div class = "row frame-body py-3">
            <div class = "col-6">
                <a role = "button" class="btn btn-primary" href = "../assignments/addAssignment1.php">ADD NEW Assignment <i class="fas fa-plus fa-custom"></i></a>
            </div>
            <div class="col-6 dropdown text-right">
            </div>
        </div>
        <div class = "row frame-body">
            <div class = "col-12 mb-3">
                <form action = "" method = "post" class = "result-form pt-3 pl-3 pr-3">
                    <div class = "row pt-5 pb-3">
                        <div class = "col-12">
                            <?php

                            $sql = "SELECT 
                            enrollment.section_id, enrollment.student_id, enrollment.$assignment AS assignment, enrollment.$assignment" . "_grade AS grade, student.student_id, student.fname, student.lname, student.email, student.photo, student.phone_number
                            FROM 
                            (enrollment INNER JOIN student ON enrollment.student_id = student.student_id) 
                            WHERE 
                            section_id = '$sectionID' 
                            AND  
                            enrollment.$assignment IS NOT NULL";

                            $result = $mysqli->query($sql);
                            if ($result->num_rows > 0) {
                                // counter used to make $vardHeading and $cardCollapsing unique
                                $counter = 1;
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    // variables used to identify each card, opening then and collapsing them based on their number
                                    $cardHeading = "headingOne" . "$counter";
                                    $cardCollapsing = "collapseOne" . "$counter";
                                    
                                    $sectionID = $row['section_id'];
                                    $studentID = $row['student_id'];
                                    $studentName = $row['fname'] . " " . $row['lname'];
                                    $studentEmail = $row['email'];
                                    $studentPhone = $row['phone_number'];
                                    $studentPhoto = $row['photo'];
                                    $file = $row['assignment'];
                                    $grade = $row['grade'];
                                    ?>
                                    <div class = "col-12">
                                        <!--Accordion wrapper-->
                                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                                            <!-- Accordion card -->
                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="<?php echo $cardHeading; ?>" style = "background-color: #6673FC;">
                                                    <a data-toggle="collapse" data-parent="" href="#<?php echo $cardCollapsing; ?>" aria-expanded="true"
                                                       aria-controls="<?php echo $cardCollapsing; ?>" style = "text-decoration: none; color: #fff;">
                                                        <h5 class="mb-0">
                                                            <!-- edit -->
                                                            <img class = "img-center center-block" style = "border: 3px solid white; border-radius: 50%;" src = "../../../sis/pages/students/img/<?php echo $studentPhoto; ?>" alt = "Student Photo" height="47" width = "47">&nbsp;&nbsp;&nbsp;<?php echo $studentName; ?>
                                                            <?php 
                                                            if ($grade != NULL) {
                                                            ?>
                                                                <img src = "../../img/graded.png" alt = "graded" style = "position: absolute; right: 20px; top: 10px" width = "50" height = "50">
                                                            <?php
                                                            }
                                                            ?>
                                                        </h5>
                                                    </a>
                                                </div>

                                                <!-- Card body -->
                                                <?php 
                                                if ($counter != 1) {
                                                ?>
                                                    <div id="<?php echo $cardCollapsing; ?>" class="collapse" role="tabpanel" aria-labelledby="<?php echo $cardHeading; ?>" data-parent="">
                                                <?php 
                                                } else {
                                                ?>
                                                    <div id="<?php echo $cardCollapsing; ?>" class="show" role="tabpanel" aria-labelledby="<?php echo $cardHeading; ?>" data-parent="">
                                                <?php
                                                }
                                                ?>
                                                    <div class="card-body">
                                                        <div class = "row pb-3">
                                                            <div class = "col-1 text-right" style = "padding-right: 0;">
                                                                <i class="fas fa-certificate pr-2" style = "color:green;"></i>
                                                            </div>
                                                            <div class = "col-md-3 col-11" style = "padding-left: 0;">
                                                                <div class = "row">
                                                                    <div class = "col-12">
                                                                        <h6>Student ID</h6>
                                                                    </div>
                                                                </div>
                                                                <div class = "row">
                                                                    <div class = "col-12">
                                                                        <p><?php echo $studentID; ?></p>
                                                                    </div>             
                                                                </div>
                                                            </div>
                                                            <div class = "col-1 text-right" style = "padding-right: 0;">
                                                                <i class="fas fa-file-signature pr-2" style = "color:blue;"></i>
                                                            </div>
                                                            <div class = "col-md-3 col-11" style = "padding-left: 0;">
                                                                <div class = "row">
                                                                    <div class = "col-12">
                                                                        <h6>Student Phone</h6>
                                                                    </div>
                                                                </div>
                                                                <div class = "row">
                                                                    <div class = "col-12">
                                                                        <p><a href = "tel:<?php echo $studentPhone; ?>"><?php echo $studentPhone; ?></a></p>
                                                                    </div>            
                                                                </div>
                                                            </div>
                                                            <?php if ($grade != NULL) {
                                                                ?>
                                                                <div class = "col-md-3 col-12 text-center" style = "padding-left: 0;">
                                                                    <div class = "row">
                                                                        <div class = "col-12">
                                                                            <h6>Mark</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class = "row">
                                                                        <div class = "col-12">
                                                                        <?php  
                                                                            if ($grade <= 7) {
                                                                                ?>
                                                                                <p style = "color: red;"><?php echo $grade; ?></p>
                                                                                <?php
                                                                            } else if ($grade > 7) {
                                                                                ?>
                                                                                <p style = "color: green;"><?php echo $grade; ?></p>
                                                                                <?php
                                                                            }    
                                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>

                                                        <div class = "row">
                                                            <div class = "col-1 text-right" style = "padding-right: 0;">
                                                                <i class="fas fa-clock pr-2" style = "color:gold;"></i>
                                                            </div>
                                                            <div class = "col-md-3 col-11" style = "padding-left: 0;">
                                                                <div class = "row">
                                                                    <div class = "col-12">
                                                                        <h6>Student Email</h6>	
                                                                    </div>
                                                                </div>
                                                                <div class = "row">
                                                                    <div class = "col-12">
                                                                        <p><a href = "mailto:<?php echo $studentEmail; ?>"><?php echo $studentEmail; ?></a></p>
                                                                    </div>        
                                                                </div>
                                                            </div>
                                                            <div class = "col-1 text-right" style = "padding-right: 0;">
                                                                <i class="fas fa-stream pr-2" style = "color:purple;"></i>
                                                            </div>
                                                            <div class = "col-md-3 col-11" style = "padding-left: 0;">
                                                                <div class = "row">
                                                                    <div class = "col-12">
                                                                        <h6>File</h6>	
                                                                    </div>
                                                                </div>
                                                                <div class = "row">
                                                                    <div class = "col-12">
                                                                        <p><a href = "../../../sis/pages/assignments/files/<?php echo $file; ?>" download><i class="fas fa-file-download"></i> <?php echo $file; ?></a></p>
                                                                    </div>       
                                                                </div>
                                                            </div>

                                                            <div class = "col-md-3 col-12" style = "padding-left: 0;">
                                                                <div class = "row">
                                                                    <div class = "col-12">
                                                                        <form class = "adding-form" action = "" method = "post">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-5">
                                                                                    <select class="form-control" id = "inputGrade" name = "inputGrade" required>
                                                                                        <?php 
                                                                                            for ($i = 0; $i <= 15; $i++){
                                                                                                echo "<option value = '$i'>$i</option>";
                                                                                            }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                                <input type = "hidden" name = "sectionID" value = "<?php echo $sectionID; ?>">
                                                                                <input type = "hidden" name = "assignmentID" value = "<?php echo $assignmentID; ?>">
                                                                                <input type = "hidden" name = "studentID" value = "<?php echo $studentID; ?>">
                                                                                <div class = "form-group col-md-7">
                                                                                    <button type="submit" name = "submit" class="btn btn-success btn-block">GRADE</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion wrapper -->

                                        </div>
                                    </div>
                            <?php
                                $counter++;
                                }
                            } else {
                            ?>
                                <option value = "" disabled>No Submissions Available</option>

                            <?php    
                                }
                            ?>
                            <br/>
                        </div>
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