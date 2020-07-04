<?php 
    session_start();
    $title = "COURSES";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Courses</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses > Courses</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "row">
            <div class = "col-12 mb-3">
                <?php 
                    include("../../php/courses-proc.php");
                ?>
            </div>
        </div>
    </div>
</body>