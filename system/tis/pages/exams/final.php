<?php 
    session_start();
    $title = "FINAL EXAM";
    $cssLink = "../../css/";
    include("../../inc/header.php");

    $tutorID = $_SESSION['tutor']['id'];
?>
<body class = "system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3>Final Exam</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Exams > Final Exam</li>
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
                            section_id, final_exam, course.course_id, course_name, credits
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
                                    $sectionID = $row['section_id'];
                                    $courseID = $row['course_id'];
                                    $courseName = $row['course_name'];
                                    $credits = $row['credits'];
                                    $final_exam = $row['final_exam'];
                                    $today = date("Y-m-d");
                                    
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
                                                Section <?php echo '[' . $sectionID . ']'; ?>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $courseID; ?></h5>
                                                <p class="card-text"><?php echo $courseName; ?></p>
                                                
                                                <?php 
                                                $sql2 = "SELECT 
                                                *
                                                FROM 
                                                exam
                                                WHERE
                                                exam = 'final' 
                                                AND section_id = '$sectionID'";

                                                $result2 = $mysqli->query($sql2);
                                    
                                                // if today date is greater than exam date, no further updates to exam questions are allowed
                                                if ($today < $final_exam) {
                                                    if ($result2->num_rows > 0) {
                                                        ?>
                                                        <a href="add-exam.php?sectionID=<?php echo $sectionID; ?>&exam=final" class="btn btn-primary">ADD QUESTION</a>
                                                        <a href="exam.php?sectionID=<?php echo $sectionID; ?>&exam=final" class="btn btn-warning">VIEW QUESTIONS</a>
                                                        <a href="../../php/delete-exam.php?sectionID=<?php echo $sectionID; ?>&exam=final" class="btn btn-danger">DELETE EXAM</a>
                                                        <?php  

                                                    } else if ($result2->num_rows === 0){
                                                        ?>
                                                        <a href="add-exam.php?sectionID=<?php echo $sectionID; ?>&exam=final" class="btn btn-primary">ADD EXAM</a>
                                                        <?php 
                                                    }
                                                } else {
                                                    ?>
                                                    <h4 style = "color: red;">Exam date is due</h4>
                                                    <?php
                                                } 
                                                ?>
                                            </div>
                                            <div class="card-footer text-muted">
                                                <?php echo $credits; ?> Credits - Exam Date: <?php echo $final_exam; ?>
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