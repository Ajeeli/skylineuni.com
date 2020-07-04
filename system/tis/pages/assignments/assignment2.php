<?php 
    session_start();
    $title = "ADD ASSIGNMENT";
    $cssLink = "../../css/";
    include("../../inc/header.php");

    $tutorID = $_SESSION['tutor']['id'];
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>All Assignment</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Assignments > All Assignments</li>
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
            <div class = "row frame-body py-5">
                <div class = "col-12">
                    <?php
                        include("../../../../db_connection.php");
                            // Sections
                            $sql = "SELECT 
                            section_id, course.course_id, course_name, credits
                            FROM 
                            (section INNER JOIN course ON section.course_id = course.course_id)
                            WHERE 
                            section.tutor_id = $tutorID 
                            AND 
                            section.section_state = 'Open'";

                            $result = $mysqli->query($sql);

                            if ($result->num_rows > 0) {
                                $counter = 0;
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $sectionID = $row['section_id'];
                                    $courseID = $row['course_id'];
                                    $courseName = $row['course_name'];
                                    $credits = $row['credits'];
                                    
                                    if ($counter > 0) {
                                        ?>
                                        <div class="card text-center mt-5">
                                        <?php
                                    } else {
                                        ?>
                                        <div class="card text-center">
                                        <?php
                                    }
                                        ?>
                                            <div class="card-header">
                                                <?php echo $courseName; ?> <?php echo '[' . $courseID . ']'; ?>
                                            </div>
                                            <div class="card-body p-0">
                                                <?php 
                                                    // Assignments
                                                    $sql2 = "SELECT 
                                                    assignment_id, deadline, description, file
                                                    FROM 
                                                    assignment
                                                    WHERE 
                                                    section_id = '$sectionID'";

                                                    $result2 = $mysqli->query($sql2);
                                                    if ($result2->num_rows == 2) {
                                                        // output data of each row
                                                        while($row2 = $result2->fetch_assoc()) {
                                                            if ($row2['assignment_id'] == 1) {
                                                                $id1 = $row2['assignment_id'];
                                                                $deadline1 = $row2['deadline'];
                                                                $description1 = $row2['description'];
                                                                $file1 = $row2['file'];
                                                            } else if ($row2['assignment_id'] == 2) {
                                                                $id2 = $row2['assignment_id'];
                                                                $deadline2 = $row2['deadline'];
                                                                $description2 = $row2['description'];
                                                                $file2 = $row2['file'];
                                                            }
                                                        }
                                                        ?>
                                                        <div class="card text-center">
                                                            <div class="card-header">
                                                                <ul class="nav nav-tabs card-header-tabs">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="assignment1.php">Assignment 1</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" href="#">Assignment 2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?php echo "Deadline: " . $deadline2; ?></h5>
                                                                <p class="card-text"><?php echo $description2; ?></p>
                                                                <a href="editAssignment.php?sectionID=<?php echo $sectionID; ?>&assignmentID=2" class="btn btn-warning mt-2"><i class="fas fa-edit"></i> EDIT ASSIGNMENT</a>
                                                                <a href="../../php/delete-assignment.php?sectionID=<?php echo $sectionID; ?>&assignmentID=2" class="btn btn-danger mt-2"><i class="fas fa-backspace"></i> DELETE ASSIGNMENT</a>
                                                                <?php 
                                                                if ($file2 == NULL){
                                                                    ?>
                                                                    <a href="#" class="btn btn-secondary mt-2" disabled><i class="fas fa-ban"></i> NO FILE</a>
                                                                    <?php
                                                                } else if ($file2 != NULL) {
                                                                    ?>
                                                                    <a href="files/<?php echo $file2; ?>" class="btn btn-success mt-2"><i class="fas fa-eye"></i> VIEW FILE</a>
                                                                    <a href="files/<?php echo $file2; ?>" class="btn btn-success mt-2" download><i class="fas fa-download"></i> DOWNLOAD FILE</a>
                                                                    <a href="../../php/delete-assignment-file.php?sectionID=<?php echo $sectionID; ?>&assignmentID=2" class="btn btn-danger mt-2"><i class="fas fa-backspace"></i> REMOVE FILE</a>
                                                                    <?php
                                                                }
                                                                ?>
                                                                <a href="assignment-submission.php?sectionID=<?php echo $sectionID; ?>&assignmentID=2" class="btn btn-primary mt-2"><i class="fas fa-file"></i> STUDENTS SUBMISSIONS</a>
                                                            </div>
                                                            <div class="card-footer text-muted">
                                                                Section <?php echo '[' . $sectionID . ']'; ?> - <?php echo $credits; ?> Credits
                                                            </div>
                                                        </div>
                                                
                                                    <?php
                                                        
                                                    } else if ($result2->num_rows == 1) {
                                                        // output data of each row
                                                        while($row2 = $result2->fetch_assoc()) {
                                                            if ($row2['assignment_id'] == 1) {
                                                                $id = $row2['assignment_id'];
                                                                $deadline1 = $row2['deadline'];
                                                                $description1 = $row2['description'];
                                                                $file1 = $row2['file'];
                                                            } else if ($row2['assignment_id'] == 2) {
                                                                $id = $row2['assignment_id'];
                                                                $deadline2 = $row2['deadline'];
                                                                $description2 = $row2['description'];
                                                                $file2 = $row2['file'];
                                                            }
                                                        }
                                                        if ($id == 1) {
                                                            ?>
                                                                <div class="card text-center">
                                                                    <div class="card-header">
                                                                        <ul class="nav nav-tabs card-header-tabs">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" href="#">Assignment 1</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link disabled" href="#">Assignment 2</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"><?php echo "Deadline: " . $deadline1; ?></h5>
                                                                        <p class="card-text"><?php echo $description1; ?></p>
                                                                        <a href="editAssignment.php?sectionID=<?php echo $sectionID; ?>&assignmentID=1" class="btn btn-warning mt-2">&nbsp;&nbsp;&nbsp;<i class="fas fa-edit"></i> EDIT ASSIGNMENT</a>
                                                                        <a href="../../php/delete-assignment.php?sectionID=<?php echo $sectionID; ?>&assignmentID=1" class="btn btn-danger mt-2"><i class="fas fa-backspace"></i> DELETE ASSIGNMENT</a>
                                                                        <?php 
                                                                        if ($file1 == NULL){
                                                                            ?>
                                                                            <a href="#" class="btn btn-secondary mt-2" disabled><i class="fas fa-ban"></i> NO FILE</a>
                                                                            <?php
                                                                        } else if ($file1 != NULL) {
                                                                            ?>
                                                                            <a href="files/<?php echo $file2; ?>" class="btn btn-success mt-2"><i class="fas fa-eye"></i> VIEW FILE</a>
                                                                            <a href="files/<?php echo $file2; ?>" class="btn btn-success mt-2" download><i class="fas fa-download"></i> DOWNLOAD FILE</a>
                                                                            <a href="../../php/delete-assignment-file.php?sectionID=<?php echo $sectionID; ?>&assignmentID=1" class="btn btn-danger mt-2"><i class="fas fa-backspace"></i> REMOVE FILE</a>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        <a href="assignment-submission.php?sectionID=<?php echo $sectionID; ?>&assignmentID=1" class="btn btn-primary mt-2"><i class="fas fa-file"></i> STUDENTS SUBMISSIONS</a>
                                                                    </div>
                                                                    <div class="card-footer text-muted">
                                                                        Section <?php echo '[' . $sectionID . ']'; ?> - <?php echo $credits; ?> Credits
                                                                    </div>
                                                                </div>
                                                            <?php
                                                        } else if ($id == 2) {
                                                            ?>
                                                                <div class="card text-center">
                                                                    <div class="card-header">
                                                                        <ul class="nav nav-tabs card-header-tabs">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link disabled" href="#">Assignment 1</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" href="#">Assignment 2</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"><?php echo "Deadline: " . $deadline2; ?></h5>
                                                                        <p class="card-text"><?php echo $description2; ?></p>
                                                                        <a href="editAssignment.php?sectionID=<?php echo $sectionID; ?>&assignmentID=2" class="btn btn-warning mt-2"><i class="fas fa-edit"></i> EDIT ASSIGNMENT</a>
                                                                        <a href="../../php/delete-assignment.php?sectionID=<?php echo $sectionID; ?>&assignmentID=2" class="btn btn-danger mt-2"><i class="fas fa-backspace"></i> DELETE ASSIGNMENT</a>
                                                                        <?php 
                                                                        if ($file2 == NULL){
                                                                            ?>
                                                                            <a href="#" class="btn btn-secondary mt-2" disabled><i class="fas fa-ban"></i> NO FILE</a>
                                                                            <?php
                                                                        } else if ($file2 != NULL) {
                                                                            ?>
                                                                            <a href="files/<?php echo $file2; ?>" class="btn btn-success mt-2"><i class="fas fa-eye"></i> VIEW FILE</a>
                                                                            <a href="files/<?php echo $file2; ?>" class="btn btn-success mt-2" download><i class="fas fa-download"></i> DOWNLOAD FILE</a>
                                                                            <a href="../../php/delete-assignment-file.php?sectionID=<?php echo $sectionID; ?>&assignmentID=2" class="btn btn-danger mt-2"><i class="fas fa-backspace"></i> REMOVE FILE</a>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        <a href="assignment-submission.php?sectionID=<?php echo $sectionID; ?>&assignmentID=2" class="btn btn-primary mt-2"><i class="fas fa-file"></i> STUDENTS SUBMISSIONS</a>
                                                                    </div>
                                                                    <div class="card-footer text-muted">
                                                                        Section <?php echo '[' . $sectionID . ']'; ?> - <?php echo $credits; ?> Credits
                                                                    </div>
                                                                </div>
                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                
                                                        <?php
                                                    } else if ($result2->num_rows === 0){
                                                        // output data of each row
                                                        ?>
                                                        <div class="card text-center">
                                                            <div class="card-body">
                                                                <h5 class="card-title">No Assignments Created</h5>
                                                                <p class="card-text">Click the button below to add a new assignment</p>
                                                                <a href="addAssignment1.php" class="btn btn-primary">ADD ASSIGNMENT</a>
                                                            </div>
                                                            <div class="card-footer text-muted">
                                                                Section <?php echo '[' . $sectionID . ']'; ?> - <?php echo $credits; ?> Credits
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>

                                <?php
                                    $counter++;
                                }
                            } else {
                                ?>
                                    <div class="card text-center">
                                        <div class="card-header">
                                            No sections registered to you
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-text">No Courses Available</h5>
                                        </div>
                                        <div class="card-footer text-muted">
                                            -
                                        </div>
                                    </div>
                                <?php
                            }

                            $mysqli->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>