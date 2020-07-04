<?php 
include("../../../db_connection.php");
// Following variables are identified here as false to distinguish between different form submissions with if else statements, next we check the forms hidden inputs.
$collegesForm = false;
$sectionsForm = false;
$programsForm = false;
$coursesForm = false;
$salariesForm = false;
$executivesForm = false;
$professorsForm = false;
$studentsForm = false;
$staffForm = false;


if (isset($_POST['collegesForm'])){
    $collegesForm = true;
} else if (isset($_POST['sectionsForm'])){
    $sectionsForm = true;
} else if (isset($_POST['programsForm'])){
    $programsForm = true;
} else if(isset($_POST['coursesForm'])) {
    $coursesForm = true;
} else if(isset($_POST['executivesForm'])) {
    $executivesForm = true;
} else if(isset($_POST['professorsForm'])) {
    $professorsForm = true;
} else if(isset($_POST['studentsForm'])) {
    $studentsForm = true;
} else if(isset($_POST['staffForm'])) {
    $staffForm = true;
} else if(isset($_POST['salariesForm'])) {
    $salariesForm = true;
}


// Check program, salary Form Inputs first, if it exists, run program, salary Form code only and exit
        if($collegesForm || $programsForm || $sectionsForm || $salariesForm){
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
            if($collegesForm) {
                try {
                    $sql = "INSERT INTO college (college_id, dean_id, college_name, email, description) VALUES ('$collegeID', '$collegeDean', '$collegeName', '$email', '$description')";
                    $e = "Dean ID not found.";
                //catch exception
                } catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
            } else if($sectionsForm) {
                try{
                    $sql = "INSERT INTO section (section_id, course_id, tutor_id, start_date, semester, midterm_exam, final_exam) VALUES ('$sectionID', '$courseID', '$tutorID', '$startDate', '$semester', '$midtermExam', '$finalExam')";
                //catch exception
                } catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
            } else if($programsForm) {
                try{
                    $sql = "INSERT INTO program (program_id, college_id, degree_level_id, program_name, total_credits, duration, description) VALUES ('$programID', '$collegeID', '$degreeID', '$programName', '$totalCredits', '$duration', '$description')";
                    $e = "Program ID not found.";
                //catch exception
                } catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
            } else if($salariesForm){
                try{
                    $sql = "INSERT INTO salary (position, description, salary) VALUES ('$position', '$description', '$salary')";
                    $e = "Error.";
                //catch exception
                } catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
            }
            
            if ($mysqli->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
            
            $mysqli->close();
            exit();
        }
        // End of Program Form Inputs

    // Executive/Course/Tutor/Student Form Inputs
    if(isset($_POST['submit'])){
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
            if($executivesForm){
                $filename = '../pages/executives/img/no-img.png';
            } else if($professorsForm){
                $filename = '../../tis/pages/tutors/img/no-img.png';
            } else if ($studentsForm){
                $filename = '../../sis/pages/students/img/no-img.png';
            } else if ($staffForm){
                $filename = '../pages/staff/img/no-img.png';
            } else if ($coursesForm){
                $filename = '../pages/courses/img/no-img.png';
            }
        }

    } else {
        echo "| Error: Form Submittion |";
    }

        // File upload component
        $noError = 1;
        $uploaddir = '';

        if($executivesForm){
            $uploaddir = '../pages/executives/img/';
        } else if($professorsForm){
            $uploaddir = '../../tis/pages/tutors/img/';
        } else if ($studentsForm) {
            $uploaddir = '../../sis/pages/students/img/';
        } else if ($staffForm){
            $uploaddir = '../pages/staff/img/';
        } else if ($coursesForm){
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
            $filename = 'no-img.png';
        }
        // End of file upload component

    // TID auto incremented with SQL code ALTER TABLE `tutors` AUTO_INCREMENT=2019888001;
    // SID auto incremented with initial value 201911110001

    //inserting user information in DB

    if ($executivesForm){
        // Insert into executives table if $executivesForm = true
        $sql = "INSERT INTO executive (position, fname, lname, gender, DOB, email, password, phone_number, city, country, start_date, photo) VALUES ('$position', '$fName', '$lName', '$gender', '$DOB', '$email', '$password', '$mobile', '$city', '$country', '$joinDate', '$filename')";
        // Insert into professors table if $professorsForm = true
    } else if ($professorsForm){
        $sql = "INSERT INTO tutor (college_id, position, fname, lname, gender, DOB, email, password, phone_number, city, country, start_date, photo) VALUES ('$collegeID', '$position', '$fName', '$lName', '$gender', '$DOB', '$email', '$password', '$mobile', '$city', '$country', '$joinDate', '$filename')";
        // Insert into students table if $studentsForm = true
    } else if ($studentsForm){
        $sql = "INSERT INTO student (program_id, fname, lname, gender, DOB, email, password, phone_number, city, country, start_date, photo) VALUES ('$programID', '$fName', '$lName', '$gender', '$DOB', '$email', '$password', '$mobile', '$city', '$country', '$joinDate', '$filename')";
        // Insert into staff table if $staffForm = true
    } else if ($staffForm){
        $sql = "INSERT INTO staff (Name, Gender, DOB, Email, Password, Mobile, City, Country, Position, RegistrationDate, Photo) VALUES ('$name', '$gender', '$DOB', '$email', '$password', '$mobile', '$city', '$country', '$position', '$joinDate', '$filename')";
    } else if ($coursesForm){  
        $sql = "INSERT INTO course (course_id, program_id, course_type, prerequisite, course_name, credits, course_fee, launch_date, description, photo) VALUES ('$CourseID', '$ProgramID', '$CourseType', " . ($Prerequisite==NULL ? "NULL" : "'$Prerequisite'") . ", '$CourseName', '$Credits', " . ($CourseFee==NULL ? "NULL" : "'$CourseFee'") . ", " . ($LaunchDate==NULL ? "NULL" : "'$LaunchDate'") . ", '$Description', '$filename')";
    }

    if ($mysqli->query($sql) === TRUE) {
        echo "| New record created successfully |";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

$mysqli->close();
?>