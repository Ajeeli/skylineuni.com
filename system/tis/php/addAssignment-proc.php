<?php 
include("../../../db_connection.php");

    if(isset($_POST['submit'])){

        if(isset($_POST['inputAssignmentID'])){
            $AssignmentID = $_POST['inputAssignmentID'];
        }
        if(isset($_POST['inputSectionID'])){
            $SectionID = $_POST['inputSectionID'];
        }
        if(isset($_POST['inputStartDate'])){
            $StartDate = $_POST['inputStartDate'];
        }
        if(isset($_POST['inputDeadline'])){
            $Deadline = $_POST['inputDeadline'];
        }
        if(isset($_POST['inputDescription'])){
            $Description = $_POST['inputDescription'];
        }
        if(isset($_POST['uploadFile'])){
            $File = $_POST['uploadFile'];
        }
    }
    // File upload component
    $noError = 1;

    $uploaddir = '../pages/assignments/files/';
    $uploadfile = $uploaddir . basename($_FILES['uploadFile']['name']);

    // Check file size
    if ($_FILES["uploadFile"]["size"] > 5000000) {
        echo "| Sorry, your file is too large |";
        $noError = 0;
    }

    // Allow certain file formats
    $allowed = array('jpg','jpeg','png','gif','docx','doc','pdf','txt');
    $filename = $_FILES['uploadFile']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$allowed) ) {
        echo '| No file uploaded |';
        $noError = 0;
    }

    if ($noError === 1) {
        if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadfile)) {
            echo "| File is valid, and was successfully uploaded |";
        } else {
            $noError = 0;
        }
    }
    // End of file upload component

    $sql = "INSERT INTO assignment (assignment_id, section_id, start_date, deadline, description, file) VALUES ('$AssignmentID', '$SectionID', '$StartDate', '$Deadline', '$Description', " . ($filename==NULL ? "NULL" : "'$filename'") . ")";

    if ($mysqli->query($sql) === TRUE) {
        echo "| New record created successfully |";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

$mysqli->close();
?>