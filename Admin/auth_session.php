<?php
    session_start();
    if(!isset($_SESSION["name"])) {
        header("Location: C:\xampp\htdocs\Online-Voting-System\adminlogin.php");
        exit();
    }
?>