<?php
    $title = "PROGRAMS";
	include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
    include ($_SERVER['DOCUMENT_ROOT'] . '/db_connection.php');
        
        // Get program id from previous clicked link stored in global array $_GET
        $getID = $_GET['id'];

        // use the program id stored in $_GET to get its information from database and disblay results
        $sql = "SELECT * FROM program, degree_level WHERE program_id = '$getID'
        AND program.degree_level_id = degree_level.degree_level_id";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $programID = $row['program_id'];
                $programName = $row['program_name'];
                $programDescription = $row['description'];
                $degreeName = $row['degree_level_name'];
                $duration = $row['duration'];
                $totalCredits = $row['total_credits'];
                $collegeID = $row['college_id'];
                $Temp_Field = $row['Temp_Field'];
            }
        }
?>

<body>
    <section class="sections">
        <div class="container my-5 py-3">
            <div class="row">
                <div class="col-3 pt-5 side-bar-menu">
                    <nav>
                        <ul>
                            <?php
                            // Get a list of all programs within the same college of the already selected program, and display them in the sidebar menu
                            $sql2 = "SELECT program_id, program_name FROM program WHERE college_id = $collegeID";
                            
                            $result2 = $mysqli->query($sql2);
                            
                            if ($result2->num_rows > 0) {
                                // output data of each row
                                while($row2 = $result2->fetch_assoc()) {
                                    $menuProgramID = $row2['program_id'];
                                    $menuProgramName = $row2['program_name'];
                                    
                                    if ($programName != $menuProgramName){
                            ?>
                            <a href='/pages/programs/program_page.php?id=<?php echo $row2['program_id']; ?>'>
                                <li><?php echo "$menuProgramName"; ?></li>
                            </a>
                            <?php
                                        
                                        // if the program in the sidebar menu is the same as the already selected program, add the class 'activeLink' to it, displaying it on the sidebar menu with a different background color
                                    } else if($programName == $menuProgramName){
                            ?>
                            <a href='/pages/programs/program_page.php?id=<?php echo $row2['program_id']; ?>'>
                                <li class='activeLink'><?php echo "$menuProgramName"; ?></li>
                            </a>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <!-- Section heading -->
                    <h2 class="h1-responsive about-section-headers-black"><?php echo $programName; ?></h2>
                    <hr class="my-4">
                    <!-- Section description -->
                    <p class="main-text pb-5"><?php echo $programDescription; ?></p>

                    <!-- Top Apply and Enquire Buttons -->
                    <div class="row py-3">
                        <div class="col-md-3 offset-md-6 col-12 offset-0">
                            <a href="/pages/apply.php" class="btn apply-button active btn-block" style="padding: 10px; padding-left: 0; padding-right: 0">APPLY NOW</a>
                        </div>
                        <div class="col-md-3 col-12">
                            <a href="" class="btn apply-button active btn-block" style="padding: 10px; background-color: #00838F; padding-left: 0; padding-right: 0;">ENQUIRE</a>
                        </div>
                    </div>
                    <!-- End of Top Apply and Enquire Buttons -->

                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1" style="text-decoration: none; color: #fff;">
                                    <h5 class="mb-0">
                                        <i class="fas fa-plus-circle pr-2"></i> Key Summary
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="">
                                <div class="card-body">
                                    <div class="row pb-3">
                                        <div class="col-1 text-right" style="padding-right: 0;">
                                            <i class="fas fa-certificate pr-2" style="color:green;"></i>
                                        </div>
                                        <div class="col-md-3 col-11" style="padding-left: 0;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>Award</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p><?php echo $degreeName . " Degree"; ?></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-1 text-right" style="padding-right: 0;">
                                            <i class="fas fa-file-signature pr-2" style="color:blue;"></i>
                                        </div>
                                        <div class="col-md-7 col-11" style="padding-left: 0;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>Program Title</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p><?php echo $degreeName . " degree in " . $programName; ?></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-1 text-right" style="padding-right: 0;">
                                            <i class="fas fa-clock pr-2" style="color:gold;"></i>
                                        </div>
                                        <div class="col-md-3 col-11" style="padding-left: 0;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>Duration</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p><?php echo $duration; ?></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-1 text-right" style="padding-right: 0;">
                                            <i class="fas fa-stream pr-2" style="color:purple;"></i>
                                        </div>
                                        <div class="col-md-3 col-11" style="padding-left: 0;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>Total Credits</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p><?php echo $totalCredits; ?></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-1 text-right" style="padding-right: 0;">
                                            <i class="fas fa-money-check-alt pr-2" style="color:grey;"></i>
                                        </div>
                                        <div class="col-md-3 col-11" style="padding-left: 0;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>Fees</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>NA</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3" style="text-decoration: none; color: #fff;">
                                        <h5 class="mb-0">
                                            <i class="fas fa-plus-circle pr-2"></i> Requirements
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree3" class="collapse show" role="tabpanel" aria-labelledby="headingThree3" data-parent="">
                                    <div class="card-body">
                                        The requirements for this program are as follows:
                                        <ul style="list-style-position: inside;" class="pl-5 pt-2">
                                            <li>16 Years or older</li>
                                            <li>A high school degree or equivalent</li>
                                            <li>Proficiency in English</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingOne3">
                                    <a data-toggle="collapse" data-parent="" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne1" style="text-decoration: none; color: #fff;">
                                        <h5 class="mb-0">
                                            <i class="fas fa-plus-circle pr-2"></i> Program Details
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseOne3" class="collapse show" role="tabpanel" aria-labelledby="headingOne3" data-parent="">
                                    <div class="card-body">
                                        <?php echo $Temp_Field; ?>


                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->



                            <?php /*
                            
                            */ ?>

                        </div>
                        <!-- Accordion wrapper -->

                        <!-- Bottom Apply and Enquire Buttons -->
                        <div class="row py-3">
                            <div class="col-md-3 offset-md-6 col-12 offset-0">
                                <a href="/pages/apply.php" class="btn apply-button active btn-block" style="padding: 10px; padding-left: 0; padding-right: 0">APPLY NOW</a>
                            </div>
                            <div class="col-md-3 col-12">
                                <a href="" class="btn apply-button active btn-block" style="padding: 10px; background-color: #00838F; padding-left: 0; padding-right: 0;">ENQUIRE</a>
                            </div>
                        </div>
                        <!-- End of Bottom Apply and Enquire Buttons -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php 
	include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>
