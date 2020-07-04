<?php 
    session_start();

    include("../../../../../db_connection.php");
    
    $title = "EXAM RESULT";
    $cssLink = "css/";
        
    if (isset($_GET['sectionID'])) {
        $sectionID = $_GET['sectionID'];
    }
    if (isset($_GET['stdID'])) {
        $stdID = $_GET['stdID'];
    }
    if (isset($_GET['exam'])) {
        $exam = $_GET['exam'];
    }

    // Select and compare students answers with questions correct answers to automatically mark them and insert grade in database
    $sql = "SELECT 
    question_id, student_answer 
    FROM 
    exam_attempt
    WHERE 
    section_id = '$sectionID' 
    AND 
    exam = '$exam' 
    AND 
    student_id = '$stdID'";

    $result = $mysqli->query($sql);
    $grade = 0;

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $questionID = $row['question_id'];
            $studentAnswer = $row['student_answer'];
            
            $sql2 = "SELECT 
            question_type, mc_t, tf, mw, num
            FROM 
            exam
            WHERE 
            question_id = $questionID";

            $result2 = $mysqli->query($sql2);

            if ($result2->num_rows > 0) {
                // output data of each row
                while($row2 = $result2->fetch_assoc()) {
            
                    $questionType = $row2['question_type'];
                    $answerMCT = $row2['mc_t'];
                    $answerTF = $row2['tf'];
                    $answerMW = $row2['mw'];
                    $answerNUM = $row2['num'];
            
                    if ($questionType == "MC") {
                        if ($studentAnswer == $answerMCT) {
                            $grade++;
                        }
                    } else if ($questionType == "TF") {
                        if ($studentAnswer == $answerTF) {
                            $grade++;
                        }
                    } else if ($questionType == "MW") {
                        if ($studentAnswer == $answerMW) {
                            $grade++;
                        }
                    } else if ($questionType == "NUM") {
                        if ($studentAnswer == $answerNUM) {
                            $grade++;
                        }
                    }
                }
            }
        }
    }
    
    // Concatenation used
    $sql3 = "UPDATE 
    enrollment
    SET $exam" . "_grade = $grade
    WHERE 
    section_id = '$sectionID' 
    AND 
    student_id = $stdID";

    if ($mysqli->query($sql3) === TRUE) {
        //echo "Record updated successfully";
    } else {
        //echo "Error updating record: " . $mysqli->error;
        echo "Error inserting grade: ";
    }

    $mysqli->close();
                
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <!-- Meta Tags -->
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0, fit-to-shrink=no, user-scalable=no">
    <meta name = "description" content = "Skyline Online University SOU is a high standard university that allows people from all around the world to educate themselves at near zero costs, it is organized by high level teachers and professors">
    <meta name = "author" content = "Skyline Technologies W.L.L">
    <meta name = "keywords" content = "">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Fonts -->
    <!-- CSS Link -->
    <link type = "text/css" rel = "stylesheet" href = "css/exam.css">
    <!-- JS Links -->
    
    <!-- Morris.js Links (jQuery Charts library) -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> Already included with bootstrap-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!-- PHP Links -->
    <!-- Title -->
    <title><?php echo $title; ?></title>
</head>
    
<body class = "examWindow">
    <div class = "container-fluid">
        <div class = "row my-4" text-center>
            <div class = "col-md-12 text-center mt-5 pt-5">
                <?php 
                if ($exam = "midterm") {
                    if ($grade < 15) {
                        ?>
                        <h6>You have failed the exam, but you still have a chance to perform better at the finals</h6>
                        <h1 class = "py-3" style = "color: red; font-weight: bolder;"><?php echo $grade; ?>/30</h1>
                        <?php
                    } else if ($grade < 30) {
                        ?>
                        <h6>You have passed the exam, best luck</h6>
                        <h6 class = "py-3" style = "color: green; font-weight: bolder;"><?php echo $grade; ?>/30</h6>
                        <?php
                    } else if ($grade == 30) {
                        ?>
                        <h6>Congratulations, You have scored a full mark!</h6>
                        <h6 class = "py-3" style = "color: green; font-weight: bolder;"><?php echo $grade; ?>/30</h6>
                        <?php
                    }
                } else if ($exam = "final"){
                    if ($grade < 20) {
                        ?>
                        <h6>You have failed the exam, best luck</h6>
                        <h6 class = "py-3" style = "color: red; font-weight: bolder;"><?php echo $grade; ?>/40</h6>
                        <?php
                    } else if ($grade < 40) {
                        ?>
                        <h6>You have passed the exam, best luck</h6>
                        <h6 class = "py-3" style = "color: green; font-weight: bolder;"><?php echo $grade; ?>/40</h6>
                        <?php
                    } else if ($grade == 40) {
                        ?>
                        <h6>Congratulations, You have scored a full mark!</h6>
                        <h6 class = "py-3" style = "color: green; font-weight: bolder;"><?php echo $grade; ?>/40</h6>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <?php
        /* Complete code to display answers
        
        <div class = "row my-4">
            <div class = "col-md-12">
                <div class="table-responsive">
                    <!--Table-->
                    <table class="table table-striped">
                        
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Question Type</th>
                                <th>Your Answer</th>
                                <th>Correct Answer</th>
                                <th>State</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        
                        <!--Table body-->
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Kate</td>
                                <td>Moss</td>
                                <td>USA / The United Kingdom / China / Russia </td>
                                <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
                                <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
                                <td>23</td>
                            </tr>
                        </tbody>
                        <!--Table body-->
                    </table>
                <!--Table-->
                </div>
            </div>
        </div>
        */
        ?>
        <div class = "row my-4">
            <div class = "offset-4 col-md-4">
                <a href = "../../courses/grades.php" target = "management-frame" class = "side-menu-links btn btn-primary btn-block" onclick = "pageHead()">Check Grades</a>
            </div>
        </div>
    </div>
</body>