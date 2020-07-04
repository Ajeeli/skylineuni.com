<?php 

        // used for DB connection
        include("../../../db_connection.php");

        if(isset($_GET['key']) && $_GET['key'] !== ''){
            $key = $_GET['key'];
        }
        if(isset($_GET['id']) && $_GET['id'] !== ''){
            $id = $_GET['id'];
        }
        if(isset($_GET['table']) && $_GET['table'] !== ''){
            $table = $_GET['table'];
        }
    
        $sql="DELETE FROM $table WHERE $key = '$id'";

        if ($mysqli->query($sql) === TRUE) {
            ?>

            <h4 style = "color: green;">Record deleted successfully</h4>
        <?php
        } else {
            ?>
            <h4 style = "color: red;">Cannot delete record: Foreign key constraint</h4>
        <?php
        }

    $mysqli->close();
?>