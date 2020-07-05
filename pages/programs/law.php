<?php
$title = "LAW";
include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
include ($_SERVER['DOCUMENT_ROOT'] . '/db_connection.php');

?>

<body>
    <section class="sections">
        <div class = "container my-5 py-3">
            <div class = "row">
                <!-- Side-Bar Menu -->
                <div class = "col-md-3 col-12 pt-5 side-bar-menu">
                    <nav>
                    <ul>
                            <a href="arts.php">
                                <li>Arts</li>
                            </a>
                            <a href="business_administration.php">
                                <li>Business Administration</li>
                            </a>
                            <a href="information_technology.php">
                                <li>Information Technology</li>
                            </a>
                            <a href="engineering.php">
                                <li>Engineering</li>
                            </a>
                            <a href="law.php">
                                <li  class="activeLink">Law</li>
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
                    <h2 class="h1-responsive about-section-headers-black">Law</h2>
                    <hr class = "my-4">
                    <!-- Section description -->
                    <p class = "main-text">Legal studies refer to an academic endeavor focused on learning laws, learning how to apply those laws, and learning how to process transactions and legal claims on behalf of clients.</p>
                    <p class = "main-text">Law degrees have always been among the most sought-after and widely respected programs to study at university. For many, a law degree is the first step along the path to a career in the legal sector, often followed by the further study and training needed to become a practicing solicitor or barrister.</p>
                    <p class = "main-text">A graduate in law always has a job waiting for him and they are always considered the middle class of the society. Here is your chance to become part of this society.</p>
                    <!-- Section image -->
                    <img src = "/img/law.jpg" class = "collegeImg my-3">
                    <p class = "main-text pb-5">Start by enrolling with us, following is a list of all programs within the college of law.</p>

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