<?php 
    session_start();
    $title = "ENROLLMENT INFO";
    $cssLink = "../css/";
    include("../inc/header.php");
?>
<body class = "system-body sis-system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3 class = "sis-orange-text">Enrollment Info</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb sis-breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Enrollment Info</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
            <div class = "row frame-header py-3">
                <div class = "col-6">
                </div>
                <div class="col-6 dropdown text-right">
                </div>
            </div>
            <div class = "row frame-body">
                <div class = "col-12 table-responsive">
                    <table class = "table enrollment-info sis-table table-striped table-bordered table-hover mt-4">
                        <?php 
                            include("../php/enrollment-info-proc.php");
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>