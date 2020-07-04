<?php
session_start();
include("../../../db_connection.php");
    
$stdID = $_SESSION['student']['id'];
    
if(isset($_POST['submit'])){

    if(isset($_POST['inputSectionID'])){
        $SectionID = $_POST['inputSectionID'];
    }
    if(isset($_POST['inputAssignmentID'])){
        $AssignmentID = $_POST['inputAssignmentID'];
    }
    if(isset($_POST['uploadFile'])){
        $filename = $_POST['uploadFile'];
    }
}

// File upload component
$noError = 1;

$uploaddir = '../pages/assignments/files/';
$uploadfile = $uploaddir . basename($_FILES['uploadFile']['name']);

// Check file size
if ($_FILES["uploadFile"]["size"] > 5000000) {
    echo "<p style = 'color: red; font-weight: bolder;'> Sorry, your file is too large (5MB Max) </p>";
    $noError = 0;
}

// Allow certain file formats
$allowed = array('jpg','jpeg','png','gif','docx','doc','pdf','txt');
$filename = $_FILES['uploadFile']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) ) {
    echo "<p style = 'color: red; font-weight: bolder;'> No file uploaded </p>";
    $noError = 0;
}

if ($noError === 1) {
    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadfile)) {
        //echo "<p style = 'color: green; font-weight: bolder;'> File is valid, and was successfully uploaded </p>";
    } else {
        $noError = 0;
    }
} else {
        $filename = $_POST['fileName'];
    }
// End of file upload component

if ($AssignmentID == 1) {
    $sql = "UPDATE 
    enrollment 
    SET assignment1 = '$filename' 
    WHERE 
    section_id = '$SectionID' 
    AND 
    student_id = $stdID";
} else if ($AssignmentID == 2) {
    $sql = "UPDATE 
    enrollment 
    SET assignment2 = '$filename' 
    WHERE 
    section_id = '$SectionID' 
    AND 
    student_id = $stdID";
}

if ($mysqli->query($sql) === TRUE) {
    echo "<p style = 'color: #fff; font-weight: bolder;'> Successful </p>";
} else {
    echo "<p style = 'color: red; font-weight: bolder;'>Error: " . $sql . "<br>" . $mysqli->error . "</p>";
}

$mysqli->close();
?>