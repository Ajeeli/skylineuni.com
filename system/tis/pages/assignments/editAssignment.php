<?php 
    session_start();
    $title = "ADD ASSIGNMENT";
    $cssLink = "../../css/";
    include("../../inc/header.php");
    include("../../../../db_connection.php");

    $tutorID = $_SESSION['tutor']['id'];
    $sectionID = $_GET['sectionID'];
    $assignmentID = $_GET['assignmentID'];

    $sql = "SELECT 
    *
    FROM 
    assignment
    WHERE 
    section_id = '$sectionID'
    AND
    assignment_id = '$assignmentID'";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $startDate = $row['start_date'];
            $deadline = $row['deadline'];
            $description = $row['description'];
            $file = $row['file'];
        }
    }
                                
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Add Assignment</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Assignments > Add Assignment</li>
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
                <form class = "adding-form py-5" action = "../../php/editAssignment-proc.php" method = "post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputSectionID">Section ID<span class = "asterisk">*</span></label>
                            <input type = "text" id="inputSectionID" name = "inputSectionID" class="form-control" value = "<?php echo $sectionID; ?>" required readonly>
                                
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAssignmentID">Assignment<span class = "asterisk">*</span></label>
                            <input type = "text" id="inputAssignmentID" name = "inputAssignmentID" class="form-control" value = "<?php echo $assignmentID; ?>" required readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputStartDate">Start Date<span class = "asterisk">*</span></label>
                            <input type="date" class="form-control" id="inputStartDate" name = "inputStartDate" value = "<?php echo $startDate; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDeadline">Deadline<span class = "asterisk">*</span></label>
                            <input type="date" class="form-control" id="inputDeadline" name = "inputDeadline" value = "<?php echo $deadline; ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputDescription">Description</label>
                            <textarea maxlength="1000" rows = "3" class="form-control" id="inputDescription" name = "inputDescription" placeholder="1000 maximum characters..."><?php echo $description; ?></textarea>
                        </div>
                    </div>
                    <div class="custom-file my-3">
                        <input type="file" class="custom-file-input" id="uploadFile" name = "uploadFile">
                        <label class="custom-file-label" for="customFile">Upload File</label>
                        <input type = "hidden" class="custom-file-input" id="fileName" name = "fileName" value = "<?php echo $file; ?>">
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

<?php 
$mysqli->close();
?>