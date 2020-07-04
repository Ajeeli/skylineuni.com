<?php 
    session_start();
    $title = "ADD SALARY";
    $cssLink = "../../css/";
    include("../../inc/header.php");
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Add Salary</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Salaries > Add Salary</li>
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
                <form class = "adding-form py-5" action = "../../php/adding-form.php" method = "post" enctype="multipart/form-data">
                    <!-- Hidden row used for 'adding-form.php' to distinguish between different submitted forms -->
                    <div class = "form-row">
                        <div class = "col-12">
                            <input type = "hidden" class = "form-control" name = "salariesForm" id = "salariesForm" value = "salariesForm">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPosition">Position<span class = "asterisk">*</span></label>
                                <input type="text" class="form-control" id="inputPosition" name = "inputPosition" placeholder = "100 Maximum Characters..." maxlength = "100" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSalary">Salary $<span class = "asterisk">*</span></label>
                            <input type="number" class="form-control" id="inputSalary" name = "inputSalary" min = "0" max = "99999999" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputDescription">Salary Description</label>
                            <textarea maxlength="1000" rows = "3" class="form-control" id="inputDescription" name = "inputDescription" placeholder="1000 maximum characters..."></textarea>
                        </div>
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
                            <button type="submit" name = "submit" class="btn btn-primary btn-block">ADD</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>