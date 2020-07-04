<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "ajeeqwrz_university");

// Establish a connection to the database
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if($mysqli->connect_error){
    echo 'Connection Failed!
          Error #' . $mysqli->connect_errno
          . ': ' . $mysqli->connect_error;
    exit(0);
}
else {
    $mysqli->set_charset('utf8');
}

?>
