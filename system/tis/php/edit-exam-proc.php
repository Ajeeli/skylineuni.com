<?php 
function redirect($sectionID, $exam) {
    header("Location: ../pages/exams/exam.php?sectionID=$sectionID&exam=$exam");
}
include("../../../db_connection.php");

$success = false;
$MCEDIT = false;
$TFEDIT = false;
$MWEDIT = false;
$NUMEDIT = false;

    if(isset($_POST['submit'])){
        if(isset($_POST['inputQuestionID'])){
            $questionID = $_POST['inputQuestionID'];
        }
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
            if(isset($_POST['inputQuestionMCEDIT'])){
                $question = $_POST['inputQuestionMCEDIT'];
                $trueMC = $_POST['inputTrueMCEDIT'];
                $falseMC1 = $_POST['inputFalseMC1EDIT'];
                $falseMC2 = $_POST['inputFalseMC2EDIT'];
                $falseMC3 = $_POST['inputFalseMC3EDIT'];
            
            } else {
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
            }
            
        } else if ($questionType == 'TF') {
            if(isset($_POST['inputQuestionTFEDIT'])){
                $question = $_POST['inputQuestionTFEDIT'];
                if(isset($_POST['inputTFEDIT'])){
                    $TF = $_POST['inputTFEDIT'];
                }
            } else {
                if(isset($_POST['inputQuestionTF'])){
                    $question = $_POST['inputQuestionTF'];
                }
                if(isset($_POST['inputTF'])){
                    $TF = $_POST['inputTF'];
                }
            }
            
        } else if ($questionType == 'MW') {
            if(isset($_POST['inputQuestionMWEDIT'])){
                $question = $_POST['inputQuestionMWEDIT'];
                $MW = $_POST['inputMWEDIT'];
            } else {
                if(isset($_POST['inputQuestionMW'])){
                    $question = $_POST['inputQuestionMW'];
                }
                if(isset($_POST['inputMW'])){
                    $MW = $_POST['inputMW'];
                }
            }
            
        } else if ($questionType == 'NUM') {
            if(isset($_POST['inputQuestionNUMEDIT'])){
                $question = $_POST['inputQuestionNUMEDIT'];
                $NUM = $_POST['inputNUMEDIT'];
            } else {
                if(isset($_POST['inputQuestionNUM'])){
                    $question = $_POST['inputQuestionNUM'];
                }
                if(isset($_POST['inputNUM'])){
                $NUM = $_POST['inputNUM'];
                }
            }
        }
    }
    
    if ($questionType == 'MC') {
        $sql = "UPDATE 
        exam 
        SET 
        question_type = '$questionType', 
        question = '$question', 
        mc_t = '$trueMC', 
        mc_f1 = '$falseMC1', 
        mc_f2 = '$falseMC2', 
        mc_f3 = '$falseMC3', 
        tf = NULL, 
        mw = NULL, 
        num = NULL 
        WHERE 
        question_id = $questionID";
        
    } else if ($questionType == 'TF') {
        $sql = "UPDATE 
        exam 
        SET 
        question_type = '$questionType', 
        question = '$question', 
        tf = '$TF', 
        mc_t = NULL, 
        mc_f1 = NULL, 
        mc_f2 = NULL, 
        mc_f3 = NULL, 
        mw = NULL, 
        num = NULL 
        WHERE 
        question_id = $questionID";
        
    } else if ($questionType == 'MW') {
        $sql = "UPDATE 
        exam 
        SET 
        question_type = '$questionType', 
        question = '$question', 
        mw = '$MW', 
        mc_t = NULL, 
        mc_f1 = NULL, 
        mc_f2 = NULL, 
        mc_f3 = NULL, 
        tf = NULL, 
        num = NULL 
        WHERE 
        question_id = $questionID";
        
    } else if ($questionType == 'NUM') {
        $sql = "UPDATE 
        exam 
        SET 
        question_type = '$questionType', 
        question = '$question', 
        num = '$NUM', 
        mc_t = NULL, 
        mc_f1 = NULL, 
        mc_f2 = NULL, 
        mc_f3 = NULL, 
        mw = NULL, 
        tf = NULL 
        WHERE 
        question_id = $questionID";
    }

    if ($mysqli->query($sql) === TRUE) {
        echo "| Record updated successfully |";
        $success = true;
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

$mysqli->close();

if ($success) {
    redirect($sectionID, $exam);
}
?>