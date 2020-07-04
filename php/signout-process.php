<?php 
    session_start();

    function redirection() {
        header ("Location: ../index.php");
    }

    $_SESSION['user']['signedin'] = false;
?>

<?php
redirection();
exit;
?>