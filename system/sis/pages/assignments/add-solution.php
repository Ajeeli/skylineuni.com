<?php 
    session_start();
    $title = "ASSIGNMENTS";
    $cssLink = "../../css/";
    include("../../inc/header.php");

    $stdID = $_SESSION['student']['id'];
    $sectionID = $_GET['sectionID'];
    $assignmentID = $_GET['assignmentID'];
?>
<body class = "system-body sis-system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3 class = "sis-orange-text">Add Solution</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb sis-breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Add Solution</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header py-3">
            <div class = "col-9">
                <?php 
                if (isset($_GET['message'])) {
                    ?>
                    <h4><?php echo $_GET['message']; ?></h4>
                    <?php
                } else {
                    ?>
                    <h4>Basic Information</h4>
                    <?php
                }
                ?>
            </div>
            <div class = "col-3 text-right rdc-icons">
            </div>
        </div>
        <div class = "row frame-body">
            <div class = "col-10 offset-1">
                <form class = "adding-form py-5" action = "../../php/add-solution-proc.php" method = "post" enctype="multipart/form-data">
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
                        <input type="file" class="custom-file-input" id="uploadFile" name = "uploadFile" required>
                        <label class="custom-file-label" for="customFile">Upload File</label>
                    </div>
                    <div class="form-row py-4">
                        <div class = "form-group col-md-6">
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
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