<?php 
include("../../../db_connection.php");
function redirect($sectionID, $exam) {
    header("Location: ../pages/exams/add-exam.php?sectionID=$sectionID&exam=$exam");
}

$success = false;

    if(isset($_POST['submit'])){
        if(isset($_POST['inputSectionID'])){
            $sectionID = $_POST['inputSectionID'];
        }
        if(isset($_POST['inputExam'])){
            $exam = $_POST['inputExam'];
        }
        if(isset($_POST['inputQuestionType'])){
            $questionType = $_POST['inputQuestionType'];
        }
        
        if ($questionType == 'MC') {
            if(isset($_POST['inputQuestionMC'])){
                $question = $_POST['inputQuestionMC'];
            }
            if(isset($_POST['inputTrueMC'])){
                $trueMC = $_POST['inputTrueMC'];
            }
            if(isset($_POST['inputFalseMC1'])){
                $falseMC1 = $_POST['inputFalseMC1'];
            }
            if(isset($_POST['inputFalseMC2'])){
                $falseMC2 = $_POST['inputFalseMC2'];
            }
            if(isset($_POST['inputFalseMC3'])){
                $falseMC3 = $_POST['inputFalseMC3'];
            }
        } else if ($questionType == 'TF') {
            if(isset($_POST['inputQuestionTF'])){
                $question = $_POST['inputQuestionTF'];
            }
            if(isset($_POST['inputTF'])){
                $TF = $_POST['inputTF'];
            }
        } else if ($questionType == 'MW') {
            if(isset($_POST['inputQuestionMW'])){
                $question = $_POST['inputQuestionMW'];
            }
            if(isset($_POST['inputMW'])){
            $MW = $_POST['inputMW'];
            }
        } else if ($questionType == 'NUM') {
            if(isset($_POST['inputQuestionNUM'])){
                $question = $_POST['inputQuestionNUM'];
            }
            if(isset($_POST['inputNUM'])){
            $NUM = $_POST['inputNUM'];
            }
        }
    }
    
    if ($questionType == 'MC') {
        $sql = "INSERT INTO exam (section_id, exam, question_type, question, mc_t, mc_f1, mc_f2, mc_f3) VALUES ('$sectionID', '$exam', '$questionType', '$question', '$trueMC', '$falseMC1', '$falseMC2', '$falseMC3')";
    } else if ($questionType == 'TF') {
        $sql = "INSERT INTO exam (section_id, exam, question_type, question, tf) VALUES ('$sectionID', '$exam', '$questionType', '$question', '$TF')";
    } else if ($questionType == 'MW') {
        $sql = "INSERT INTO exam (section_id, exam, question_type, question, mw) VALUES ('$sectionID', '$exam', '$questionType', '$question', '$MW')";
    } else if ($questionType == 'NUM') {
        $sql = "INSERT INTO exam (section_id, exam, question_type, question, num) VALUES ('$sectionID', '$exam', '$questionType', '$question', '$NUM')";
    }

    if ($mysqli->query($sql) === TRUE) {
        echo "| New record created successfully |";
        $success = true;
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

$mysqli->close();

if ($success) {
    redirect($sectionID, $exam);
}
?>