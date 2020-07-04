<?php 
    // Count results component
if ($table1 == "section" && $table2 == "tutor"){
    include("../../../../db_connection.php");
    $tutorID = $_SESSION['tutor']['id'];

    $sql="SELECT 
    $attribute1 
    FROM 
    ($table1 INNER JOIN $table2 ON $table1.$attribute2 = $table2.$attribute2) 
    WHERE 
    $table1.$attribute2 = $tutorID 
    AND 
    $attribute13 = 'Open'";

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
    
} else if ($table1 == "section" && $table2 == "enrollment"){
    include("../../../../db_connection.php");
    $tutorID = $_SESSION['tutor']['id'];

    $sql="SELECT 
    $table1.$attribute1 
    FROM 
    (($table1 INNER JOIN $table2 ON $table2.$attribute1 = $table1.$attribute1) 
    INNER JOIN $table3 ON $table2.$attribute3 = $table3.$attribute3) 
    WHERE 
    $table1.$attribute2 = $tutorID 
    AND 
    $attribute4 = 'Open'";
    
    
    if ($result=mysqli_query($mysqli,$sql)) {
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
    
} else if ($table1 == "exam"){
    include("../../../../db_connection.php");
    $tutorID = $_SESSION['tutor']['id'];

    $sql="SELECT 
    $attribute1 
    FROM 
    $table1
    WHERE 
    $attribute1 = '$sectionID' 
    AND 
    $table1 = '$exam'";
    
    
    if ($result=mysqli_query($mysqli,$sql)) {
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
}
?>