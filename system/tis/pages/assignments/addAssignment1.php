<?php 
    session_start();
    $title = "ADD ASSIGNMENT";
    $cssLink = "../../css/";
    include("../../inc/header.php");

    $tutorID = $_SESSION['tutor']['id'];
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Add Assignment</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Assignments > Add Assignment</li>
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
            <div class = "row frame-body py-5">
                <div class = "col-12">
                    <?php
                        include("../../../../db_connection.php");

                            $sql = "SELECT 
                            section_id, course.course_id, course_name, credits
                            FROM 
                            (section INNER JOIN course ON section.course_id = course.course_id)
                            WHERE 
                            section.tutor_id = $tutorID 
                            AND 
                            section.section_state = 'Open'";

                            $result = $mysqli->query($sql);

                            if ($result->num_rows > 0) {
                                $counter = 0;
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if ($counter > 0) {
                                        ?>
                                        <div class="card text-center mt-5">
                                        <?php
                                    } else {
                                        ?>
                                        <div class="card text-center">
                                        <?php
                                    }
                                        ?>
                                            <div class="card-header">
                                                Section <?php echo '[' . $row['section_id'] . ']'; ?>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $row['course_id']; ?></h5>
                                                <p class="card-text"><?php echo $row['course_name']; ?></p>
                                                <a href="addAssignment2.php?sectionID=<?php echo $row['section_id']; ?>" class="btn btn-primary">ADD ASSIGNMENT</a>
                                            </div>
                                            <div class="card-footer text-muted">
                                                <?php echo $row['credits']; ?> Credits
                                            </div>
                                        </div>

                            <?php
                                    $counter++;
                                }
                            } else {
                                ?>
                                    <div class="card text-center">
                                        <div class="card-header">
                                            No sections registered to you
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-text">No Courses Available</h5>
                                        </div>
                                        <div class="card-footer text-muted">
                                            -
                                        </div>
                                    </div>
                                <?php
                            }

                            $mysqli->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>