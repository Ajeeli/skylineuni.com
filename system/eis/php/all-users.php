<?php   // This code must be changed to OOP
include("../../../../db_connection.php");

if ($table == "salary") {
    $sql = "SELECT $attribute1, $attribute2, $attribute3 FROM $table";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute1"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "../salaries/editSalary.php?position=<?php echo $row["$attribute1"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/deleteRecord.php?key=<?php echo "$attribute1"; ?>&id=<?php echo $row["$attribute1"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>

<?php
        }
    }

} else if ($table == "executive") {

    define('IMAGE_DIR','img/'); // define the path to executive image(img/) as IMAGE_DIR

    $sql = "select $attribute1, $attribute2, $attribute3, $attribute4, $attribute5, $attribute6, $attribute7, $attribute8 from $table";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><img src = '<?php echo IMAGE_DIR . $row["$attribute1"]; ?>' class = "table-result-img"></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?> <?php echo $row["$attribute4"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute5"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute6"]; ?></td>
        <td rowspan = "1" colspan = "1"><a href = "tel:<?php echo $row["$attribute7"]; ?>"><?php echo $row["$attribute7"]; ?></a></td>
        <td rowspan = "1" colspan = "1"><a href = "mailto:<?php echo $row["$attribute8"]; ?>"><?php echo $row["$attribute8"]; ?></a></td>
        <td rowspan = "1" colspan = "1">
            <a href = "../executives/editExecutive.php?executiveID=<?php echo $row["$attribute2"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/deleteRecord.php?key=<?php echo "$attribute2"; ?>&id=<?php echo $row["$attribute2"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>


<?php

        }
    }
} else if ($table == "tutor") {
    define('IMAGE_DIR','../../../tis/pages/tutors/img/'); // define the path to tutor image(img/) as IMAGE_DIR

    $sql = "SELECT $attribute1, $attribute2, $attribute3, $attribute4, $attribute5, $attribute6, $attribute7, $table.$attribute8, $attribute9, $table.$attribute10, $attribute11 FROM $table, $table2 WHERE $table.$attribute10 = $table2.$attribute10";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><img src = '<?php echo IMAGE_DIR . $row["$attribute1"]; ?>' class = "table-result-img"></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"];?> <?php echo $row["$attribute4"];?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute6"]; ?></td>
        <td rowspan = "1" colspan = "1"><a href = "tel:<?php echo $row["$attribute7"]; ?>"><?php echo $row["$attribute7"]; ?></a></td>
        <td rowspan = "1" colspan = "1"><a href = "mailto:<?php echo $row["$attribute8"]; ?>"><?php echo $row["$attribute8"]; ?></a></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute9"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute11"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "../professors/editProfessor.php?tutorID=<?php echo $row["$attribute2"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/deleteRecord.php?key=<?php echo "$attribute2"; ?>&id=<?php echo $row["$attribute2"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>

<?php

        }
    }
} else if ($table == "student") {
    define('IMAGE_DIR','../../../sis/pages/students/img/'); // define the path to student image(img/) as IMAGE_DIR

    $sql = "SELECT $attribute1, $attribute2, $attribute3, $attribute4, $table.$attribute5, $attribute6, $attribute7, $attribute8, $attribute9, $attribute10 FROM $table, $table2 WHERE $table.$attribute5 = $table2.$attribute5";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><img src = '<?php echo IMAGE_DIR . $row["$attribute1"]; ?>' class = "table-result-img"></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"];?> <?php echo $row["$attribute4"];?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute6"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute7"]; ?></td>
        <td rowspan = "1" colspan = "1"><a href = "tel:<?php echo $row["$attribute8"]; ?>"><?php echo $row["$attribute8"]; ?></a></td>
        <td rowspan = "1" colspan = "1"><a href = "mailto:<?php echo $row["$attribute9"]; ?>"><?php echo $row["$attribute9"]; ?></a></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute10"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "../students/editStudent.php?studentID=<?php echo $row["$attribute2"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/deleteRecord.php?key=<?php echo "$attribute2"; ?>&id=<?php echo $row["$attribute2"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>

<?php

        }
    }
} else if ($table == "course") {
    $sql = "SELECT $attribute1, $attribute2, $attribute3, $attribute4, $attribute5, $attribute6 FROM $table, $table2 WHERE $table.$attribute7 = $table2.$attribute7";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute1"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute4"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute5"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute6"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "../courses/editCourse.php?courseID=<?php echo $row["$attribute1"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/deleteRecord.php?key=<?php echo "$attribute1"; ?>&id=<?php echo $row["$attribute1"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>

<?php
        }
    }
} else if ($table == "course_lecture") {
    $sql = "SELECT $table.$attribute1, $attribute2, $attribute3, $attribute5, $table.$attribute6, $attribute8 FROM $table, $table2 WHERE $table.$attribute1 = $table2.$attribute1";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute5"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "edit-material.php?lectureID=<?php echo $row["$attribute8"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/deleteRecord.php?key=<?php echo "$attribute8"; ?>&id=<?php echo $row["$attribute8"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>

<?php
        }
    }
} else if ($table == "program"){
   
        $sql = "SELECT $attribute1, $attribute2, $attribute3, $table.$attribute4, $attribute5, $table.$attribute6, $attribute7, $attribute8 FROM $table, $table2, $table3 WHERE $table.$attribute4 = $table2.$attribute4 AND $table.$attribute6 = $table3.$attribute6";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute8"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute5"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute7"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "../programs/editProgram.php?programID=<?php echo $row["$attribute1"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/deleteRecord.php?key=<?php echo "$attribute1"; ?>&id=<?php echo $row["$attribute1"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>
<?php
        }
    }
} else if ($table == "college"){
   
    /*
        $sql = "SELECT $attribute1, $attribute2, $table.$attribute3, $attribute4, $attribute6, $attribute7 FROM $table, $table2 WHERE $attribute1 = $attribute7";
    */
    $sql = "SELECT $table.$attribute, $attribute1, $attribute2, $table.$attribute3 FROM $table";
    
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><a href = "mailto: <?php echo $row["$attribute3"]; ?>"><?php echo $row["$attribute3"]; ?></a></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute1"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "../colleges/editCollege.php?collegeID=<?php echo $row["$attribute"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/deleteRecord.php?key=<?php echo "$attribute"; ?>&id=<?php echo $row["$attribute"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>
<?php
        }
    }
} else if ($table == "section"){
   
        $sql = "SELECT $attribute1, $table.$attribute2, $attribute3, $table.$attribute4, $attribute5, $table.$attribute6, $attribute7, $attribute8, $attribute9, $attribute10, $attribute11 FROM $table, $table2, $table3 WHERE $table.$attribute4 = $table2.$attribute4 AND $table.$attribute6 = $table3.$attribute6";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute1"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute4"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute5"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute7"]; ?> <?php echo $row["$attribute8"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute9"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute10"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute11"]; ?></td>
        <td rowspan = "1" colspan = "1">
            <a href = "../sections/editSection.php?sectionID=<?php echo $row["$attribute1"]; ?>" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "../../php/deleteRecord.php?key=<?php echo "$attribute1"; ?>&id=<?php echo $row["$attribute1"]; ?>&table=<?php echo "$table"; ?>" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>
<?php
        }
    }
} else {

    define('IMAGE_DIR','img/'); // define the path to user images(img/) as IMAGE_DIR

    $sql = "select $attribute1, $attribute2, $attribute3, $attribute4, $attribute5, $attribute6, $attribute7, $attribute8 from $table";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr role = "row">
        <td rowspan = "1" colspan = "1"><img src = '<?php echo IMAGE_DIR . $row["$attribute1"]; ?>' class = "table-result-img"></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute2"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute3"]; ?> <?php echo $row["$attribute4"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute5"]; ?></td>
        <td rowspan = "1" colspan = "1"><?php echo $row["$attribute6"]; ?></td>
        <td rowspan = "1" colspan = "1"><a href = "tel:<?php echo $row["$attribute7"]; ?>"><?php echo $row["$attribute7"]; ?></a></td>
        <td rowspan = "1" colspan = "1"><a href = "mailto:<?php echo $row["$attribute8"]; ?>"><?php echo $row["$attribute8"]; ?></a></td>
        <td rowspan = "1" colspan = "1">
            <a href = "" class = "btn btn-outline-primary waves-effect" role = "button"><i class="fas fa-edit"></i></a>
            <a href = "" class = "btn btn-outline-danger waves-effect" role = "button"><i class="fas fa-minus-circle"></i></a>
        </td>
    </tr>

<?php

        }
    }
}

$mysqli->close();
?>