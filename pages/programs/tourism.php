<?php
$title = "TOURISM";
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
                            <a href = "arts_and_humanities.php"><li>Arts &amp; Humanities</li></a>
                            <a href = "business_administration.php"><li>Business Administration</li></a>
                            <a href = "computer_science_and_it.php"><li>Computer Science &amp; IT</li></a>
                            <a href = "engineering_and_science.php"><li>Engineering &amp; Science</li></a>
                            <a href = "health_sciences.php"><li>Health Sciences</li></a>
                            <a href = "law.php"><li>Law</li></a>
                            <a href = "tourism.php"><li class = "activeLink">Tourism</li></a>
                        </ul>
                    </nav>
                </div>
                <!-- End of Side-Bar Menu -->
                
                <div class = "col-md-8 mx-md-auto col-12 justify-content text-justify">
                    <!-- Section heading -->
                    <h2 class="h1-responsive about-section-headers-black">Tourism</h2>
                    <hr class = "my-4">
                    <!-- Section description -->
                    <p class = "main-text">Travel and tourism now a days is a global industry and there are a wide range of opportunities available to tourism graduates.</p>
                    <p class = "main-text">Although many of us have been "<b>tourists</b>" at some point in our lives, defining what <b>tourism</b> actually is can be difficult. <b>Tourism</b> is the activities of people traveling to and staying in places outside their usual environment for leisure, business or other purposes for not more than a specific period.</p>
                    <p class = "main-text"><b>Tourism Studies</b> treats its study and <b>research</b> area as a whole, where physical, economic, social and cultural aspects of <b>tourism</b>, <b>tourist</b> markets, and destinations are the main corner-stones of learning.</p>
                    <!-- Section image -->
                    <img src = "/img/tourism.jpg" class = "collegeImg my-3">
                    <p class = "main-text pb-5">Below are all the <b>tourism</b> programs available at Skyline Technologies.</p>

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
                                                $collegeID = $row['college_id'];
                                            }
                                        }
                                        ?>
                                        <!-- Get Program name -->
                                        <?php
                                        $sql2 = "SELECT program_id, program_name FROM program WHERE college_id = $collegeID";

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