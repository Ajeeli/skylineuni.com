<?php 
    session_start();
    $title = "PROFESSORS";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Professors List</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Professors > All Professors</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header pt-2 pb-1">
            <div class = "col-9">
                <h4>All Professors</h4>
            </div>
            <div class = "col-3 text-right rdc-icons">

            </div>
        </div>
        <div class = "row frame-body py-3">
            <div class = "col-6">
                <a role = "button" class="btn btn-primary" href = "addProfessor.php">ADD NEW <i class="fas fa-plus fa-custom"></i></a>
            </div>
            <div class="col-6 dropdown text-right">
            </div>
        </div>
        <div class = "row frame-body">
            <div class = "col-12 mb-3">
                <form action = "" method = "post" class = "result-form pt-3 pl-3 pr-3">
                    <div class = "row">
                        <div class = "col-12 table-responsive">
                            <table class = "table result-table table-striped table-bordered table-hover mt-4">
                                <thead>
                                    <tr role = "row">
                                        <th rowspan = "1" colspan = "1" scope = "col"><img src = "../executives/img/face.png" class = "table-result-img"></th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Tutor ID</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Name</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">City</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Mobile</th>
                                        <th rowspan = "1" colspan = "1">Email</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Joining Date</th>
                                        <th rowspan = "1" colspan = "1" scope = "col">College Name</th>
                                        <th class = "action-column" rowspan = "1" colspan = "1" scope = "col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $table = "tutor";
                                    $table2 = "college";
                                    $attribute1 = "photo";
                                    $attribute2 = "tutor_id";
                                    $attribute3 = "fname";
                                    $attribute4 = "lname";
                                    $attribute5 = "position";
                                    $attribute6 = "city";
                                    $attribute7 = "phone_number";
                                    $attribute8 = "email";
                                    $attribute9 = "start_date";
                                    $attribute10 = "college_id";
                                    $attribute11 = "college_name";
                                    include("../../php/all-users.php");
                                    ?>
                                </tbody>
                            </table><br/>
                        </div>
                    </div>
                    <div class = "row"> <!-- Table result count row -->
                        <div class = "col-12">
                            <?php 
                                $attribute = "tutor_id";
                                $table = "tutor";
                                include("../../php/result-count.php");
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>