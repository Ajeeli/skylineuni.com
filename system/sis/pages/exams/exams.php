<?php 
    session_start();
    $title = "EXAMS";
    $cssLink = "../../css/";
    include("../../inc/header.php");
    if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
        $stdID = $_SESSION['student']['id'];
    }
?>
<body class = "system-body sis-system-body">
    <div class = "container-fluid">
        <div class = "row my-4">
            <div class = "col-6 pt-2">
                <h3 class = "sis-orange-text">Exams</h3>
            </div>
            <div class = "col-6 breadcrumbDiv">
                <nav aria-label="breadcrumb" class = "path-nav">
                    <ol class="breadcrumb sis-breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard.php"><i class="fas fa-home fa-custom"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Exams > ALL Exams</li>
                    </ol>
                </nav>
            </div>
        </div>
            <div class = "row frame-body sis-main-page">
            <div class = "col-12">
                <?php
                    include("../../../../db_connection.php");

                        $sql = "SELECT 
                        section.section_id, semester, midterm_exam, midterm_grade, final_exam, final_grade, course.course_id, course_name, credits
                        FROM 
                        ((section INNER JOIN course ON section.course_id = course.course_id)
                        INNER JOIN enrollment ON section.section_id = enrollment.section_id)
                        WHERE 
                        enrollment.student_id = '$stdID' 
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
                                $midtermExam = $row['midterm_exam'];
                                $midtermGrade = $row['midterm_grade'];
                                $finalExam = $row['final_exam'];
                                $finalGrade = $row['final_grade'];
                                $semester = $row['semester'];
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
                                            // Variables used to count midterm and final questions in exam table
                                            $midtermQuestions = 0;
                                            $finalQuestions = 0;

                                            $sql2 = "SELECT 
                                            exam
                                            FROM 
                                            exam
                                            WHERE
                                            section_id = '$sectionID'";

                                            $result2 = $mysqli->query($sql2);
                                            if ($result2->num_rows > 0) {
                                                // output data of each row
                                                while($row2 = $result2->fetch_assoc()) {
                                                    if ($row2['exam'] == 'midterm') {
                                                        $midtermQuestions++;
                                                    } else if ($row2['exam'] == 'final') {
                                                        $finalQuestions++;
                                                    }
                                                }
                                            }

                                            // If today date is the same as midterm exam date
                                            if ($today == $midtermExam && $midtermGrade == NULL) {
                                                // Check if midterm exam questions exceed 100, exam will auto generate
                                                if ($midtermQuestions >= 100) {
                                                    ?>
                                                    <a href="exam-system/index.php?sectionID=<?php echo $sectionID; ?>&exam=midterm" class="btn btn-primary">ATTEMPT EXAM</a>
                                                    <?php  

                                                } else if ($midtermQuestions < 100){
                                                    ?>
                                                    <h4 style = "color: red;">Midterm exam will be ready in few moments...</h4>
                                                    <?php 
                                                }
                                            // If today date is less than midterm exam date
                                            } else if ($today < $midtermExam) {
                                                ?>
                                                <h4 style = "color: green;">Midterm Exam is due on <?php echo $midtermExam; ?></h4>
                                                <?php
                                            }
                                            // If today date is the same as final exam date
                                            if ($today == $finalExam && $finalGrade == NULL) {
                                                // Check if final exam questions exceed 100, exam will auto generate
                                                if ($finalQuestions >= 100) {
                                                    ?>
                                                    <a href="exam-system/index.php?sectionID=<?php echo $sectionID; ?>&exam=final" class="btn btn-primary" target = "_blank">ATTEMPT EXAM</a>
                                                    <?php  

                                                } else if ($finalQuestions < 100){
                                                    ?>
                                                    <h4 style = "color: red;">Final exam will be ready in few moments...</h4>
                                                    <?php 
                                                }
                                            // If today date is less than final exam date and greater than midterm exam date
                                            } else if ($today < $finalExam && $today > $midtermExam) {
                                                ?>
                                                <h4 style = "color: green;">Final Exam is due on <?php echo $finalExam; ?></h4>
                                                <?php
                                            } else if ($today > $finalExam && $today > $midtermExam) {
                                                ?>
                                                <h4 style = "color: green;">Final exam date has passed</h4>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <?php 
                                        if ($today <= $midtermExam) {
                                            ?>
                                            <div class="card-footer text-muted">
                                            <?php echo $credits; ?> Credits - Exam Date: <?php echo $midtermExam; ?>
                                            </div>
                                            <?php
                                        } else if ($today > $midtermExam) {
                                            ?>
                                            <div class="card-footer text-muted">
                                                <?php echo $credits; ?> Credits - Exam Date: <?php echo $finalExam; ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                        <?php
                            $counter++;
                            }
                        } else {
                            ?>
                                <div class="card text-center">
                                    <div class="card-header">
                                        No Courses Enrolled
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
</body>