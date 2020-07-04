<?php 
    session_start();
    $title = "COLLEGES";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Colleges List</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Professors</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Colleges > All Colleges</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class = "hover-moveUP">
        <div class = "row frame-header pt-2 pb-1">
            <div class = "col-9">
                <h4>All Colleges</h4>
            </div>
            <!--
            <div class = "col-3 text-right rdc-icons"> <!-- rdc-icons: reload, download, close icons
                <i class="fas fa-redo-alt fa-custom"></i>
                <i class="fas fa-arrow-alt-circle-down fa-custom"></i>
                <i class="fas fa-times fa-custom"></i>
            </div>
            -->
        </div>
        <div class = "row frame-body py-3">
            <div class = "col-6">
                <a role = "button" class="btn btn-primary" href = "addCollege.php">ADD NEW <i class="fas fa-plus fa-custom"></i></a>
            </div>
            <!--
            <div class="col-6 dropdown text-right">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    TOOLS
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i> Print</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i> Save as PDF</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> Export to Excel</a>
                </div>
            </div>
            -->
        </div>
        <div class = "row frame-body">
            <div class = "col-12 mb-3">
                <form action = "" method = "post" class = "result-form pt-3 pl-3 pr-3">
                    <!--
                    <div class = "row">
                        <div class = "col-3">
                            <select name = "entries" id = "entries" class = "form-control">
                                <option value = "10" selected>Show 10 Entries</option>
                                <option value = "10">Show 10 Entries</option>
                                <option value = "25">Show 25 Entries</option>
                                <option value = "50">Show 50 Entries</option>
                                <option value = "100">Show 100 Entries</option>
                            </select>
                        </div>
                        <div class = "col-3 offset-6">
                            <div class = "input-group">
                                <input type = "search" class = "form-control" name = "search" id = "search" placeholder = "Search for...">
                                <span class = "input-group-btn">
                                    <button class = "btn btn-default go-button" type = "button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class = "row">
                        <div class = "col-12 table-responsive">
                            <table class = "table result-table table-striped table-bordered table-hover mt-4">
                                <thead>
                                    <tr role = "row">
                                        <th rowspan = "1" colspan = "1" scope = "col">College Name<!--<i class="fas fa-sort"></i>--></th>
                                        <th rowspan = "1" colspan = "1" scope = "col">College Email<!--<i class="fas fa-sort"></i>--></th>
                                        <th rowspan = "1" colspan = "1" scope = "col">Dean ID<!--<i class="fas fa-sort"></i>--></th>
                                        <th class = "action-column" rowspan = "1" colspan = "1" scope = "col">Action<!--<i class="fas fa-sort"></i>--></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $table = "college";
                                    $table2 = "executive";
                                    $attribute = "college_id";
                                    $attribute1 = "dean_id";
                                    $attribute2 = "college_name";
                                    $attribute3 = "email";
                                    //$attribute4 = "fname";
                                    $attribute5 = "";
                                    //$attribute6 = "position";
                                    //$attribute7 = "executive_id";
                                    include("../../php/all-users.php");
                                    ?>
                                </tbody>
                            </table><br/>
                        </div>
                    </div>
                    <div class = "row"> <!-- Table result count row -->
                        <div class = "col-12">
                            <?php 
                                $attribute = "college_id";
                                $table = "college";
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