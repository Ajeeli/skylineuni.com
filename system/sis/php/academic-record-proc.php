<?php

if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
    include('../../../dbconn.php');
    
    $userID = $_SESSION['student']['id'];
    
    $sql = "SELECT SID FROM course-enrollment WHERE course-enrollment.SectionID = sections.SectionID";
    //$sql = "SELECT CourseID, CourseName, Credits, FinalGrade, GradeSymbol FROM course-enrollment, courses, sections WHERE course-enrollment.SID = $userID AND course-enrollment.SectionID = sections.SectionID";
    //SELECT students.Name, B.List_Of_columns  FROM Table1 AS A   INNER
    //JOIN Table2 as B   ON A.ID=B.ID (Here Id is Common in both table).
    
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $name = $row['CourseID'];
            $gender = $row['CourseID'];
            $department = '-';
            $programID = $row['CourseID'];
            $academicAdvisor = '-';
            $academicState = "Studying";
            $graduating = "No";
    
        ?>
    <tr>
        <th scope = "row">Student Name</th>
        <td><?php echo CourseID; ?></td>
    </tr>
    <tr>
        <th scope = "row">Gender</th>
        <td><?php echo CourseID; ?></td>
    </tr>
    <tr>
        <th scope = "row">Program ID</th>
        <td><?php echo CourseID; ?></td>
    </tr>
    <tr>
        <th scope = "row">Academic Advisor</th>
        <td><?php echo CourseID; ?></td>
    </tr>
    <tr>
        <th scope = "row">Academic State</th>
        <td><?php echo CourseID; ?></td>
    </tr>
    <tr>
        <th scope = "row">Graduating</th>
        <td><?php echo CourseID; ?></td>
    </tr>

    <?php
        }
    }
    // Free result set
    mysqli_free_result($result);
}

$mysqli->close();
?>