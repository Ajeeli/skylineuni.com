<?php

if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
    include('../../../db_connection.php');
    
    $stdID = $_SESSION['student']['id'];
    
    $sql = "SELECT fname, lname, gender, student.email, college_name, program_name, duration, total_credits, student.start_date 
    FROM 
    ((student INNER JOIN program ON student.program_id = program.program_id) 
    INNER JOIN college ON program.college_id = college.college_id) 
    WHERE student_id = $stdID";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $name = $row['fname'] . ' ' . $row['lname'];
            $gender = $row['gender'];
            $email = $row['email'];
            $collegeName = $row['college_name'];
            $programName = $row['program_name'];
            $studyDuration = $row['duration'];
            $totalCredits = $row['total_credits'];
            $enrollmentDate = $row['start_date'];
        }
    }
        ?>
    <tr>
        <th scope = "row">Student ID</th>
        <td><?php echo $stdID; ?></td>
    </tr>
    <tr>
        <th scope = "row">Name</th>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <th scope = "row">Gender</th>
        <td><?php
            if($gender == 'M')
                echo 'Male';
            else
                echo 'Female';
            ?>
        </td>
    </tr>
    <tr>
        <th scope = "row">Email</th>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <th scope = "row">College</th>
        <td><?php echo $collegeName; ?></td>
    </tr>
    <tr>
        <th scope = "row">Program</th>
        <td><?php echo $programName; ?></td>
    </tr>
    <tr>
        <th scope = "row">Study Duration</th>
        <td><?php echo $studyDuration; ?></td>
    </tr>
    <tr>
        <th scope = "row">Enrollment Date</th>
        <td><?php echo $enrollmentDate; ?></td>
    </tr>
    <!--
    <tr>
        <th scope = "row">Graduating</th>
        <td>
        </td>
    </tr>
    -->

<?php
    
    }
    /*
    $sql = "SELECT * FROM section WHERE SectionState = 'Open' LIMIT 1";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $enrollmentInitialDate = $row['InitialDate'];
            $enrollmentFinalDate = date('Y-m-d', strtotime($enrollmentInitialDate. ' + 30 days'));
            $AddDropInitialDate = date('Y-m-d', strtotime($enrollmentInitialDate. ' + 20 days'));
            $AddDropFinalDate = date('Y-m-d', strtotime($enrollmentInitialDate. ' + 27 days'));
        }
    }

?>
    <tr>
        <th scope = "row">Enrollment Initial Date</th>
        <td><?php echo $enrollmentInitialDate; ?></td>
    </tr>
    <tr>
        <th scope = "row">Enrollment Final Date</th>
        <td><?php echo $enrollmentFinalDate; ?></td>
    </tr>
    <tr>
        <th scope = "row">Add &amp; Drop Initial Date</th>
        <td><?php echo $AddDropInitialDate; ?></td>
    </tr>
    <tr>
        <th scope = "row">Add &amp; Drop Final Date</th>
        <td><?php echo $AddDropFinalDate; ?></td>
    </tr>

    <?php
    
    // Free result set
    mysqli_free_result($result);
}
*/
$mysqli->close();
?>