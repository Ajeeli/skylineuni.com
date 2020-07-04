<?php

if(isset($_SESSION['student']['id']) && !empty($_SESSION['student']['id'])) {
    include('../../../../db_connection.php');
    
    $userID = $_SESSION['student']['id'];
    $stdProgramID = $_SESSION['student']['programID'];
    
    $sql = "SELECT course.course_id, course.course_name, course.credits, course.prerequisite, course.course_fee, course_type.type_name
    FROM (course INNER JOIN course_type ON course.course_type = course_type.type_id) WHERE program_id = '$stdProgramID'";
    $CreditsSum = 0;
    $CourseFeeSum = 0;
    
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $CourseID = $row['course_id'];
            $CourseName = $row['course_name'];
            $Credits = $row['credits'];
            $Prerequisite = $row['prerequisite'];
            $PlanElement = $row['type_name'];
            $CourseFee = $row['course_fee'];
            
            $CreditsSum += $Credits;
            $CourseFeeSum += $CourseFee;
        ?>
    
        <tr>
            <td><?php echo $CourseID; ?></td>
            <td><?php echo $CourseName; ?></td>
            <td><?php echo $Credits; ?></td>
            <td><?php echo $Prerequisite; ?></td>
            <td><?php echo $PlanElement; ?></td>
            <td><?php echo '$' . $CourseFee; ?></td>
        </tr>

    <?php
        }
        ?>
        <tr style = "color: green; font-weight: 600;">
            <td>TOTAL</td>
            <td></td>
            <td><?php echo $CreditsSum; ?></td>
            <td></td>
            <td></td>
            <td><?php echo '$' . $CourseFeeSum; ?></td>
        </tr>
        <?php
        
    } else {
        ?>
            <tr>
                <td colspan = "6">No courses added to the program yet</td>
            </tr>
        <?php
    }
    
    // Free result set
    mysqli_free_result($result);
}

$mysqli->close();
?>