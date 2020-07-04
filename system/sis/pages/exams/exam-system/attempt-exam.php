<?php 
    session_start();
    
    function redirect($stdID, $sectionID, $exam) {
        header("Location: exam-result.php?stdID=$stdID&sectionID=$sectionID&exam=$exam");
    }

    include("../../../../../db_connection.php");
    
    $title = "EXAMS";
    $cssLink = "css/";

    if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
        $stdID = $_SESSION['student']['id'];
        
        if (isset($_POST['sectionID'])) {
            $sectionID = $_POST['sectionID'];
        }
        if (isset($_POST['exam'])) {
            $exam = $_POST['exam'];
        }
    }
    
    if (isset($_POST['submit'])) {
        if(isset($_POST['sectionID'])) {
            $sectionID = $_POST['sectionID'];
        }
        if(isset($_POST['exam'])) {
            $exam = $_POST['exam'];
        }
        if(isset($_POST['questionID'])) {
            $questionID = $_POST['questionID'];
        }
        if(isset($_POST['inputAnswer'])) {
            $inputAnswer = $_POST['inputAnswer'];
        }
            
        $sqlAnswer = "INSERT INTO 
        exam_attempt
        VALUES ('$questionID', '$sectionID', '$stdID', '$exam', '$inputAnswer')";
        
        $resultAnswer = $mysqli->query($sqlAnswer);
    }

    // Select random question from 'exam' table, question does not exist in 'exam_attempt' table
    // ** Generating random unique questions for exam
    $sql = "SELECT 
    *
    FROM 
    exam
    WHERE 
    section_id = '$sectionID' 
    AND 
    exam = '$exam' 
    AND 
    NOT EXISTS 
    (SELECT question_id from exam_attempt WHERE exam.question_id = exam_attempt.question_id)
    ORDER BY 
    RAND() 
    LIMIT 1";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $questionID = $row['question_id'];
            $questionType = $row['question_type'];
            $question = $row['question'];
            $mct = $row['mc_t'];
            $mcf1 = $row['mc_f1'];
            $mcf2 = $row['mc_f2'];
            $mcf3 = $row['mc_f3'];
            $tf = $row['tf'];
            $mw = $row['mw'];
            $num = $row['num'];
            $today = date("Y-m-d");
        }
    } else {
        redirect($stdID, $sectionID, $exam);
    }

    $sql2 = "SELECT 
    COUNT(question_id) AS answers
    FROM 
    exam_attempt
    WHERE 
    section_id = '$sectionID' 
    AND 
    student_id = '$stdID'";

    $result2 = $mysqli->query($sql2);

    if ($result2->num_rows > 0) {
        // output data of each row
        while($row2 = $result2->fetch_assoc()) {
            $answers = $row2['answers'];
        }
    } else {
        $answers = 0;
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
    <div class = "container-fluid examBody">
        <div class = "row py-3 examBodyHeader">
            <div class = "col-6">
                <h5>
                <?php 
                if ($questionType == "MC") {
                    echo "Question: Multiple Choice";
                } else if ($questionType == "TF") {
                    echo "Question: True & False";
                } else if ($questionType == "MW") {
                    echo "Question: Missing Word";
                } else if ($questionType == "NUM") {
                    echo "Question: Calculation";
                }
                ?>
                </h5>
            </div>
            <div class = "col-6 text-right">
                <?php
                if ($answers < 29) {
                    ?>
                    <h5><i><b><?php echo (30 - $answers); ?></b> Questions remaining</i></h5>
                    <?php
                } else {
                    ?>
                    <h5><i><b><?php echo (30 - $answers); ?></b> Question remaining</i></h5>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class = "row my-4">
            <div class = "col-12">

            </div>
        </div>
        <div class = "row my-4 px-5">
            <div class = "col-12">
                <h6><?php echo $question; ?></h6>
            </div>
        </div>
            <?php
            if ($questionType == "MC") {
                ?>
                <form class = "pt-3 px-5" action = "" method = "post">
                    <!-- Hidden Values -->
                    <input type="hidden" class="custom-control-input" id="sectionID" name="sectionID" value = "<?php echo $sectionID; ?>">
                    <input type="hidden" class="custom-control-input" id="exam" name="exam" value = "<?php echo $exam; ?>">
                    <input type="hidden" class="custom-control-input" id="questionID" name="questionID" value = "<?php echo $questionID; ?>">
                    <div class = "form-row">
                        <!-- Group of default radios - option 1 -->
                        <div class = "col-12">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="inputMC1" name="inputAnswer" value = "<?php echo $mct; ?>">
                                <label class="custom-control-label" for="inputMC1"><?php echo $mct; ?></label>
                            </div>
                        </div>
                    </div>
                    <div class = "form-row">
                        <!-- Group of default radios - option 2 -->
                        <div class = "col-12">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="inputMC2" name="inputAnswer" value = "<?php echo $mcf1; ?>">
                                <label class="custom-control-label" for="inputMC2"><?php echo $mcf1; ?></label>
                            </div>
                        </div>
                    </div>
                    <div class = "form-row">
                        <!-- Group of default radios - option 3 -->
                        <div class = "col-12">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="inputMC3" name="inputAnswer" value = "<?php echo $mcf2; ?>">
                                <label class="custom-control-label" for="inputMC3"><?php echo $mcf2; ?></label>
                            </div>
                        </div>
                    </div>        
                    <div class = "form-row">
                        <!-- Group of default radios - option 3 -->
                        <div class = "col-12">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="inputMC4" name="inputAnswer" value = "<?php echo $mcf3; ?>">
                                <label class="custom-control-label" for="inputMC4"><?php echo $mcf3; ?></label>
                            </div>
                        </div>
                    </div>
                    <div class = "form-row pt-5">
                        <div class = "offset-3 col-6">
                            <input type="submit" id="submit" name = "submit" class="form-control btn btn-primary" value = "NEXT QUESTION">
                        </div>
                    </div>
                </form>
                <?php
            } else if ($questionType == "TF") {
                ?>
                <form class = "pt-3 px-5" action = "" method = "post">
                    <!-- Hidden Values -->
                    <input type="hidden" class="custom-control-input" id="sectionID" name="sectionID" value = "<?php echo $sectionID; ?>">
                    <input type="hidden" class="custom-control-input" id="exam" name="exam" value = "<?php echo $exam; ?>">
                    <input type="hidden" class="custom-control-input" id="questionID" name="questionID" value = "<?php echo $questionID; ?>">
                    <div class = "form-row">
                        <!-- Group of default radios - option 1 -->
                        <div class = "col-12">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="inputTrue" name="inputAnswer" value = "true">
                                <label class="custom-control-label" for="inputTrue">True</label>
                            </div>
                        </div>
                    </div>
                    <div class = "form-row">
                        <div class = "col-12">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="inputFalse" name="inputAnswer" value = "false">
                                <label class="custom-control-label" for="inputFalse">False</label>
                            </div>
                        </div>
                    </div>
                    <div class = "form-row pt-5">
                        <div class = "offset-3 col-6">
                            <input type="submit" id="submit" name = "submit" class="form-control btn btn-primary" value = "NEXT QUESTION">
                        </div>
                    </div>
                </form>
                <?php
            } else if ($questionType == "MW") {
                ?>
                <form class = "pt-3 px-5" action = "" method = "post">
                    <!-- Hidden Values -->
                    <input type="hidden" class="custom-control-input" id="sectionID" name="sectionID" value = "<?php echo $sectionID; ?>">
                    <input type="hidden" class="custom-control-input" id="exam" name="exam" value = "<?php echo $exam; ?>">
                    <input type="hidden" class="custom-control-input" id="questionID" name="questionID" value = "<?php echo $questionID; ?>">
                    <div class = "form-row">
                        <div class = "col-12">
                            <label for="inputMW">Your Answer</label>
                            <input type="text" id="inputMW" name = "inputAnswer" class="form-control">
                        </div>
                    </div>
                    <div class = "form-row pt-5">
                        <div class = "offset-3 col-6">
                            <input type="submit" id="submit" name = "submit" class="form-control btn btn-primary" value = "NEXT QUESTION">
                        </div>
                    </div>
                </form>
                <?php
            } else if ($questionType == "NUM") {
                ?>
                <form class = "pt-3 px-5" action = "" method = "post">
                    <!-- Hidden Values -->
                    <input type="hidden" class="custom-control-input" id="sectionID" name="sectionID" value = "<?php echo $sectionID; ?>">
                    <input type="hidden" class="custom-control-input" id="exam" name="exam" value = "<?php echo $exam; ?>">
                    <input type="hidden" class="custom-control-input" id="questionID" name="questionID" value = "<?php echo $questionID; ?>">
                    <div class = "form-row">
                        <div class = "col-12">
                            <label for="inputNUM">Your Answer</label>
                            <input type="text" id="inputNUM" name = "inputAnswer" class="form-control">
                        </div>
                    </div>
                    <div class = "form-row pt-5">
                        <div class = "offset-3 col-6">
                            <input type="submit" id="submit" name = "submit" class="form-control btn btn-primary" value = "NEXT QUESTION">
                        </div>
                    </div>
                </form>
                <?php
            }
            ?>
    </div>
</body>