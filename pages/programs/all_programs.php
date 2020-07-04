<?php
$title =  "ALL PROGRAMS";
include ($_SERVER['DOCUMENT_ROOT'] . '/db_connection.php');
include ($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
?>

<body>
<!-- Testimonials Section -->
<section class="sections my-5">
    <div class = "container">
        <div class="row py-3">
            <div class="col-md-10 offset-md-1 col-12 offset-0">
                <!-- Section heading -->
                <h2 class="h1-responsive about-section-headers-black">All Programs</h2>
                <hr>
                <!-- Section description -->
                <p class="dark-grey-text w-responsive mx-auto">There is a big variety and wide choice of programs that have been offered and planned for the future at our skylineuni.com university. Some of the programs are offered immediately and some are still under constructions.</p>
                <p>We offer social science, applied and pure science, health science, engineering and computer science.</p>
                <p>A list of the programs offered are below:</p>
            </div>
        </div>
        <?php
        $sql = "SELECT college_id, college_name FROM college";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        ?>

        <div class="row py-3">
            <div class="col-md-10 offset-md-1 col-12 offset-0">
                <div class="card card-container">
                    <div class="card-header card-header">
                        <!-- Get College name -->
                        <?php echo $row['college_name']; ?>
                    </div>
                    <div class="card-body px-5 card-body">
                        <ul class = "pl-5">
                            <!-- Get Program name -->
                            <?php 
                            $programID = $row['college_id'];
                            $sql2 = "SELECT program_id, program_name FROM program WHERE college_id = $programID";

                            $result2 = $mysqli->query($sql2);

                            if ($result2->num_rows > 0) {
                                // output data of each row
                                while($row2 = $result2->fetch_assoc()) {
                                        ?>
                                        <li><a href = "program_page.php?id=<?php echo $row2['program_id']; ?>"><?php echo $row2['program_name']; ?></a></li>
                                        <?php
                                }
                            } else {
                                echo "No programs available";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php
            }
        }
        ?>

    </div>
</section>
</body>
<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>