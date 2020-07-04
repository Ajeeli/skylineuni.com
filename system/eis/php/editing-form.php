<?php 
include("../../../db_connection.php");

// Following variables are identified here as false to distinguish between different form submissions with if else statements, next we check the forms hidden inputs.
$collegesFormEdit = false;
$sectionsFormEdit = false;
$programsFormEdit = false;
$coursesFormEdit = false;
$salariesFormEdit = false;
$executivesFormEdit = false;
$professorsFormEdit = false;
$studentsFormEdit = false;
$staffForm = false;
$materialFormEdit = false;

if (isset($_POST['collegesFormEdit'])){
    $collegesFormEdit = true;
} else if (isset($_POST['sectionsFormEdit'])){
    $sectionsFormEdit = true;
} else if (isset($_POST['programsFormEdit'])){
    $programsFormEdit = true;
} else if(isset($_POST['coursesFormEdit'])) {
    $coursesFormEdit = true;
} else if(isset($_POST['executivesFormEdit'])) {
    $executivesFormEdit = true;
} else if(isset($_POST['professorsFormEdit'])) {
    $professorsFormEdit = true;
} else if(isset($_POST['studentsFormEdit'])) {
    $studentsFormEdit = true;
} else if(isset($_POST['staffForm'])) {
    $staffForm = true;
} else if(isset($_POST['salariesFormEdit'])) {
    $salariesFormEdit = true;
} else if(isset($_POST['materialFormEdit'])) {
    $materialFormEdit = true;
}

// Check program, salary Form Inputs first, if it exists, run program, salary Form code only and exit
        if($collegesFormEdit || $programsFormEdit || $sectionsFormEdit || $salariesFormEdit || $materialFormEdit){
            // Colleges Form Inputs
            if(isset($_POST['inputCollegeID'])){
                $collegeID = $_POST['inputCollegeID'];
            }
            if(isset($_POST['inputCollegeDean'])){
                $collegeDean = $_POST['inputCollegeDean'];
            }
            if(isset($_POST['inputCollegeName'])){
                $collegeName = $_POST['inputCollegeName'];
            }
            if(isset($_POST['inputCollegeEmail'])){
                $email = $_POST['inputCollegeEmail'];
            }
            if(isset($_POST['inputDescription'])){
                $description = $_POST['inputDescription'];
            }
            // End of Colleges Form Inputs
        
            // Sections Form Inputs
            if(isset($_POST['inputSectionID'])){
                $sectionID = $_POST['inputSectionID'];
            }
            if(isset($_POST['inputCourseID'])){
                $courseID = $_POST['inputCourseID'];
            }
            if(isset($_POST['inputTutorID'])){
                $tutorID = $_POST['inputTutorID'];
            }
            if(isset($_POST['startDate'])){
                $startDate = $_POST['startDate'];
            }
            if(isset($_POST['semester'])){
                $semester = $_POST['semester'];
            }
            if(isset($_POST['midtermExam'])){
                $midtermExam = $_POST['midtermExam'];
            }
            if(isset($_POST['finalExam'])){
                $finalExam = $_POST['finalExam'];
            }
            // End of Sections Form Inputs
            
            // Material Form Inputs
            if(isset($_POST['inputLectureID'])){
                $lectureID = $_POST['inputLectureID'];
            }
            if(isset($_POST['inputCourseID'])){
                $courseID = $_POST['inputCourseID'];
            }
            if(isset($_POST['inputLectureName'])){
                $lectureName = $_POST['inputLectureName'];
            }
            if(isset($_POST['inputLectureType'])){
                $lectureType = $_POST['inputLectureType'];
            }
            if(isset($_POST['inputLecturePath'])){
                $lecturePath = $_POST['inputLecturePath'];
            }
            if(isset($_POST['inputDescription'])){
                $description = $_POST['inputDescription'];
            }
            // End of Material Form Inputs
            
            // Programs Form Inputs
            if(isset($_POST['inputProgramID'])){
                $programID = $_POST['inputProgramID'];
            }
            if(isset($_POST['inputProgramName'])){
                $programName = $_POST['inputProgramName'];
            }
            if(isset($_POST['inputCollegeID'])){
                $collegeID = $_POST['inputCollegeID'];
            }
            if(isset($_POST['inputDegreeID'])){
                $degreeID = $_POST['inputDegreeID'];
            }
            if(isset($_POST['inputTotalCredits'])){
                $totalCredits = $_POST['inputTotalCredits'];
            }
            if(isset($_POST['inputDuration'])){
                $duration = $_POST['inputDuration'];
            }
            if(isset($_POST['inputDescription'])){
                $description = $_POST['inputDescription'];
            }
            // End of Programs Form Inputs
            
            // Salaries Form Inputs
            if(isset($_POST['inputPosition'])){
                $position = $_POST['inputPosition'];
            }
            if(isset($_POST['inputSalary'])){
                $salary = $_POST['inputSalary'];
            }
            if(isset($_POST['inputDescription'])){
                $description = $_POST['inputDescription'];
            }
            
            // End of Salaries Form Inputs
            if($collegesFormEdit) {
                try {
                    $sql = "UPDATE college 
                    SET dean_id = '$collegeDean', college_name = '$collegeName', email = '$email', description = '$description' 
                    WHERE college_id = '$collegeID'";
                    $e = "Dean ID not found.";
                //catch exception
                } catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
            } else if($sectionsFormEdit) {
                try{
                    $sql = "UPDATE section 
                    SET course_id = '$courseID', tutor_id = '$tutorID', start_date = '$startDate', semester = '$semester', midterm_exam = '$midtermExam', final_exam = '$finalExam' 
                    WHERE section_id = '$sectionID'";
                //catch exception
                } catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
            } else if($materialFormEdit) {
                try{
                    $sql = "UPDATE course_lecture 
                    SET course_id = '$courseID', lecture_name = '$lectureName', lecture_type = '$lectureType', lecture_path = '$lecturePath', description = '$description' 
                    WHERE lecture_id = $lectureID";
                //catch exception
                } catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
            } else if($programsFormEdit) {
                try{
                    $sql = "UPDATE program
                    SET college_id = '$collegeID', degree_level_id = '$degreeID', program_name = '$programName', total_credits = '$totalCredits', duration = '$duration', description = '$description'
                    WHERE program_id = '$programID'";
                    $e = "Program ID not found.";
                //catch exception
                } catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
            } else if($salariesFormEdit){
                try{
                    $sql = "UPDATE salary 
                    SET description = '$description', salary = '$salary' 
                    WHERE position = '$position'";
                    $e = "Error.";
                //catch exception
                } catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
            }
            
            if ($mysqli->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
            
            $mysqli->close();
            exit();
        }
        // End of Program Form Inputs

    // Executive/Courses/Tutor/Student Form Inputs
    if(isset($_POST['submit'])){
        if(isset($_POST['executiveID'])){
            $executiveID = $_POST['executiveID'];
        }
        if(isset($_POST['tutorID'])){
            $tutorID = $_POST['tutorID'];
        }
        if(isset($_POST['studentID'])){
            $studentID = $_POST['studentID'];
        }
        if(isset($_POST['inputFName'])){
            $fName = $_POST['inputFName'];
        }
        if(isset($_POST['inputLName'])){
            $lName = $_POST['inputLName'];
        }
        if(isset($_POST['inputGender'])){
            $gender = $_POST['inputGender'];
        }
        if(isset($_POST['inputDOB'])){
            $DOB = $_POST['inputDOB'];
        }
        if(isset($_POST['inputMobile'])){
            $mobile = $_POST['inputMobile'];
        }
        if(isset($_POST['inputEmail'])){
            $email = $_POST['inputEmail'];
        }
        if(isset($_POST['inputPassword'])){
            $password = $_POST['inputPassword'];
        }
        if(isset($_POST['inputConfirmPassword'])){
            $confPass = $_POST['inputConfirmPassword'];
        }
        if(isset($_POST['inputCity'])){
            $city = $_POST['inputCity'];
        }
        if(isset($_POST['inputCountry'])){
            $country = $_POST['inputCountry'];
        }
        if(isset($_POST['inputProgramID'])){
            $programID = $_POST['inputProgramID'];
        }
        if(isset($_POST['inputPosition'])){
            $position = $_POST['inputPosition'];
        }
        if(isset($_POST['inputProgram'])){
            $program = $_POST['inputProgram'];
        }
        if(isset($_POST['inputCollegeID'])){
            $collegeID = $_POST['inputCollegeID'];
        }
        if(isset($_POST['inputJoiningDate'])){
            $joinDate = $_POST['inputJoiningDate'];
        }
        // End of Executive Form Inputs
        // Courses Form Inputs
        if(isset($_POST['inputCourseID'])){
            $CourseID = $_POST['inputCourseID'];
        }
        if(isset($_POST['inputCourseName'])){
            $CourseName = $_POST['inputCourseName'];
        }
        if(isset($_POST['inputCredits'])){
            $Credits = $_POST['inputCredits'];
        }
        if(isset($_POST['inputPrerequisite'])){
            $Prerequisite = $_POST['inputPrerequisite'];
        }
        if(isset($_POST['inputCourseFee'])){
            $CourseFee = $_POST['inputCourseFee'];
        }
        if(isset($_POST['inputCourseType'])){
            $CourseType = $_POST['inputCourseType'];
        }
        if(isset($_POST['inputProgramID'])){
            $ProgramID = $_POST['inputProgramID'];
        }
        if(isset($_POST['inputLaunchDate'])){
            $LaunchDate = $_POST['inputLaunchDate'];
        }
        if(isset($_POST['inputDescription'])){
            $Description = $_POST['inputDescription'];
        }
        // End of Courses Form Inputs
        if(isset($_POST['uploadImage'])){
            $filename = $_POST['uploadImage'];
        } else {
            if($executivesFormEdit){
                $filename = '../pages/executives/img/no-img.png';
            } else if($professorsFormEdit){
                $filename = '../../tis/pages/tutors/img/no-img.png';
            } else if ($studentsFormEdit){
                $filename = '../../sis/pages/students/img/no-img.png';
            } else if ($staffForm){
                $filename = '../pages/staff/img/no-img.png';
            } else if ($coursesFormEdit){
                $filename = '../pages/courses/img/no-img.png';
            }
        }

    } else {
        echo "| Error: Form Submittion |";
    }

        // File upload component
        $noError = 1;
        $uploaddir = '';

        if($executivesFormEdit){
            $uploaddir = '../pages/executives/img/';
        } else if($professorsFormEdit){
            $uploaddir = '../../tis/pages/tutors/img/';
        } else if ($studentsFormEdit) {
            $uploaddir = '../../sis/pages/students/img/';
        } else if ($staffForm){
            $uploaddir = '../pages/staff/img/';
        } else if ($coursesFormEdit){
            $uploaddir = '../pages/courses/img/';
        }
        $uploadfile = $uploaddir . basename($_FILES['uploadImage']['name']);

        // Check if file already exists
        /*
        if (file_exists($uploadfile)) {
            echo "Sorry, file already exists.";
            $noError = 0;
        }*/
        
        // Check file size
        if ($_FILES["uploadImage"]["size"] > 5000000) {
            echo "| Sorry, your file is too large |";
            $noError = 0;
        }
        
        // Allow certain file formats
        $allowed = array('jpg','jpeg','png','gif');
        $filename = $_FILES['uploadImage']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            echo '| No image uploaded |';
            $noError = 0;
        }
        
        if ($noError === 1) {
            if (move_uploaded_file($_FILES['uploadImage']['tmp_name'], $uploadfile)) {
                echo "| File is valid, and was successfully uploaded |";
            } else {
                $noError = 0;
            }
        } else {
            $filename = $_POST['imageName'];
        }
        // End of file upload component

    // TID auto incremented with SQL code ALTER TABLE `tutors` AUTO_INCREMENT=2019888001;
    // SID auto incremented with initial value 201911110001

    //inserting user information in DB

    if ($executivesFormEdit){
        // Insert into executives table if $executivesForm = true
        $sql = "UPDATE executive 
        SET position = '$position', fname = '$fName', lname = '$lName', gender = '$gender', DOB = '$DOB', email = '$email', password = '$password', phone_number = '$mobile', city = '$city', country = '$country', start_date = '$joinDate', photo = '$filename' 
        WHERE executive_id = '$executiveID'";
        // Insert into professors table if $professorsForm = true
    } else if ($professorsFormEdit){
        $sql = "UPDATE tutor 
        SET college_id = '$collegeID', position = '$position', fname = '$fName', lname = '$lName', gender = '$gender', DOB = '$DOB', email = '$email', password = '$password', phone_number = '$mobile', city = '$city', country = '$country', start_date = '$joinDate', photo = '$filename' 
        WHERE tutor_id = '$tutorID'";

        // Insert into students table if $studentsForm = true
    } else if ($studentsFormEdit){
        $sql = "UPDATE student 
        SET program_id = '$programID', fname = '$fName', lname = '$lName', gender = '$gender', DOB = '$DOB', email = '$email', password = '$password', phone_number = '$mobile', city = '$city', country = '$country', start_date = '$joinDate', photo = '$filename' 
        WHERE student_id = '$studentID'";
        // Insert into staff table if $staffForm = true
    } else if ($staffForm){
        $sql = "INSERT INTO staff (Name, Gender, DOB, Email, Password, Mobile, City, Country, Position, RegistrationDate, Photo) VALUES ('$name', '$gender', '$DOB', '$email', '$password', '$mobile', '$city', '$country', '$position', '$joinDate', '$filename')";
    } else if ($coursesFormEdit){
        $sql = "UPDATE course 
        SET program_id = '$ProgramID', course_type = '$CourseType', prerequisite = " . ($Prerequisite==NULL ? "NULL" : "'$Prerequisite'") . ", course_name = '$CourseName', credits = '$Credits', course_fee = " . ($CourseFee==NULL ? "NULL" : "'$CourseFee'") . ", launch_date = " . ($LaunchDate==NULL ? "NULL" : "'$LaunchDate'") . ", description = '$Description', photo = '$filename'
        WHERE course_id = '$CourseID'";
    }

    if ($mysqli->query($sql) === TRUE) {
        echo "| Record updated successfully |";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

$mysqli->close();
?>