<?php session_start(); ?>
<?php
    if (isset($_SESSION['user'])) {
        include_once("loggedNav.php");
    }else{
        include_once("guestNav.php");
    }
    
    include_once("indexCode.php");
?>