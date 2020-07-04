<?php 
    // Count results component

    // Dashboard DB connection
    if($attribute5 == "dashboardStudents") { // used for dashboard DB connection
        include("../../../db_connection.php");
    } else {
    // All pages DB connection
        include("../../../../db_connection.php");
    }

        $sql="SELECT $attribute FROM $table";

        if ($result=mysqli_query($mysqli,$sql))
        {
            // Return the number of rows in result set
            $rowcount=mysqli_num_rows($result);
            if($rowcount == 0)
                printf("<p class = 'result-count result-count-none'>Total: %d </p>",$rowcount);
            else
                printf("<p class = 'result-count result-count-many'>Total: %d </p>",$rowcount);
            // Free result set
            mysqli_free_result($result);
        }
    $mysqli->close();
?>