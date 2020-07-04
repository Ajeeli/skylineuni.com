<?php 
session_start();

redirection(){
    header ("Location: ../index.php");
}

unset($_SESSION['user']['signedin']);

redirection();
?>