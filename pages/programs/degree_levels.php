<?php
$title =  "ALL DEGREES";
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
                    <h2 class="h1-responsive about-section-headers-black">Skyline University Degrees</h2>
                    <hr>
                    <!-- Section description -->
                    <p class="dark-grey-text w-responsive mx-auto">There are four major categories of degrees available for Skyline University students:</p>
                    <p class="dark-grey-text w-responsive mx-auto">associate, bachelor's, master's, and doctoral degrees.</p>
                    <p class="dark-grey-text w-responsive mx-auto">Skyline University award conferred by the university signifying that the student has satisfactorily completed a course of study.</p>
                    <p class="dark-grey-text w-responsive mx-auto">Earning one of these degrees can take 2-8 years, depending on the level of the degree and field of study.</p>
                    <p class="dark-grey-text w-responsive mx-auto mb-5">A list of all degrees conducted online through our university is listed below.</p>
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
                    <div class="card">
                        <div class="card-header">
                            <!-- Get College name -->
                            <?php echo $row['college_name']; ?>
                        </div>
                        <div class="card-body px-5">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php");
?>