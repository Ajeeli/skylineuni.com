<?php
$title = "BUSINESS ADMINISTRATION";
include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
include ($_SERVER['DOCUMENT_ROOT'] . '/db_connection.php');

?>

<body>
    <section class="sections">
        <div class = "container my-5 py-3">
            <div class = "row">
                <!-- Side-Bar Menu -->
                <div class = "col-3 pt-5 side-bar-menu">
                    <nav>
                        <ul>
                            <a href="arts_and_humanities.php">
                                <li class="activeLink">Arts</li>
                            </a>
                            <a href="business_administration.php">
                                <li>Business Administration</li>
                            </a>
                            <a href="computer_science_and_it.php">
                                <li>Information Technology</li>
                            </a>
                            <a href="engineering_and_science.php">
                                <li>Engineering</li>
                            </a>
                            <a href="law.php">
                                <li>Law</li>
                            </a>
                            <a href="sciences.php">
                                <li>Sciences</li>
                            </a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <!-- Section heading -->
                    <h2 class="h1-responsive about-section-headers-black">Business Administration</h2>
                    <hr class = "my-4">
                    <!-- Section description -->
                    <p class = "main-text">It is simply the administration of a business. It includes all aspects of overseeing and supervising business operations. From the point of view of management and leadership, it also covers fields that include accounting, finance, project management and marketing.</p>
                    <p class = "main-text">All kinds of business needs someone to run it successfully. Someone with the right qualifications.</p>
                    <p class = "main-text">Let that someone be you.</p>
                    <!-- Section image -->
                    <img src = "/img/businessAdministrator.jpg" class = "collegeImg my-3">
                    <p class = "main-text pb-5">Join our programs and be that one who is a successful business administrator.</p>

                            <div class="card">
                                <div class="card-header">
                                    <!-- Get College name -->
                                    <p>Programs</p>
                                </div>
                                <div class="card-body px-5">
                                    <ul class = "pl-5">
                                        <?php 
                                        $sql = "SELECT college_id FROM college WHERE college_name = '$title'";

                                        $result = $mysqli->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                $collegID = $row['college_id'];
                                            }
                                        }
                                        ?>
                                        <!-- Get Program name -->
                                        <?php 
                                        $sql2 = "SELECT program_id, program_name FROM program WHERE college_id = $collegID";

                                        $result2 = $mysqli->query($sql2);

                                        if ($result2->num_rows > 0) {
                                            // output data of each row
                                            while($row2 = $result2->fetch_assoc()) {
                                        ?>
                                        <li><a href = "/pages/programs/program_page.php?id=<?php echo $row2['program_id']; ?>"><?php echo $row2['program_name']; ?></a></li>
                                        <?php
                                            }
                                        } else {
                                            echo "No programs available";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                    <div class = "row py-3 mt-4">
                        <div class = "col-md-3 offset-md-6 col-12 offset-0">
                            <a href="/pages/apply.php" class="btn apply-button active btn-block">APPLY NOW</a>
                        </div>
                        <div class = "col-md-3 col-12">
                            <a href="" class="btn enquire-button active btn-block">ENQUIRE</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

<?php 
include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>