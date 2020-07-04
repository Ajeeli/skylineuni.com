<?php 
include("../../../db_connection.php");

    if(isset($_POST['submit'])){

        if(isset($_POST['inputCourseID'])){
            $CourseID = $_POST['inputCourseID'];
        }
        if(isset($_POST['inputLectureName'])){
            $LectureName = $_POST['inputLectureName'];
        }
        if(isset($_POST['inputLectureType'])){
            $LectureType = $_POST['inputLectureType'];
        }
        if(isset($_POST['inputLecturePath'])){
            $LecturePath = $_POST['inputLecturePath'];
        }
        if(isset($_POST['inputDescription'])){
            $Description = $_POST['inputDescription'];
        }
    }
    
    $sql = "INSERT INTO course_lecture (course_id, lecture_name, lecture_type, lecture_path, description) VALUES ('$CourseID', '$LectureName', '$LectureType', '$LecturePath', '$Description')";   

    if ($mysqli->query($sql) === TRUE) {
        echo "| New record created successfully |";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

$mysqli->close();
?>