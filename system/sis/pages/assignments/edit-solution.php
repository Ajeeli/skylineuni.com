<?php 
    session_start();
    include("../../../../db_connection.php");

    $title = "ASSIGNMENTS";
    $cssLink = "../../css/";
    include("../../inc/header.php");

    $stdID = $_SESSION['student']['id'];
    $sectionID = $_GET['sectionID'];
    $assignmentID = $_GET['assignmentID'];
    
    $sql = "SELECT 
    *
    FROM 
    enrollment
    WHERE 
    section_id = '$sectionID'
    AND
    student_id = $stdID";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $assignment1 = $row['assignment1'];
            $assignment2 = $row['assignment2'];
        }
    }
?>
<body class = "system-body sis-system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3 class = "sis-orange-text">Edit Solution</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb sis-breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Edit Solution</li>
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
                <form class = "adding-form py-5" action = "../../php/edit-solution-proc.php" method = "post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputSectionID">Section ID<span class = "asterisk">*</span></label>
                            <input type = "text" id="inputSectionID" name = "inputSectionID" class="form-control" value = "<?php echo $sectionID; ?>" required readonly> 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAssignmentID">Assignment<span class = "asterisk">*</span></label>
                            <select class="form-control" name = "inputAssignmentID" id = "inputAssignmentID" required readonly>
                            <?php
                            if ($assignmentID == 1) {
                                ?>
                                <option value = "1" selected>One</option>
                                <?php
                            } else if ($assignmentID == 2) {
                                ?>
                                <option value = "2" selected>Two</option>
                                <?php
                            }
                            ?> 
                            </select>
                        </div>
                    </div>

                    <div class="custom-file my-3">
                        <input type="file" class="custom-file-input" id="uploadFile" name = "uploadFile">
                        <label class="custom-file-label" for="customFile">Upload File</label>
                        <?php 
                        if ($assignmentID == 1) {
                            ?>
                            <input type = "hidden" class="custom-file-input" id="fileName" name = "fileName" value = "<?php echo $assignment1; ?>">
                            <?php
                        } else if ($assignmentID == 2) {
                            ?>
                            <input type = "hidden" class="custom-file-input" id="fileName" name = "fileName" value = "<?php echo $assignment2; ?>">
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-row py-4">
                        <div class = "form-group col-md-6">
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                            </div>
                        </div>
                        <div class = "form-group col-md-6 text-right">
                            <button type="submit" name = "submit" class="btn btn-primary btn-block">EDIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>