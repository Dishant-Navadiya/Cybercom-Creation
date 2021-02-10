<?php 
    session_start();
    require_once "./connection/connection.php";
    $obj = new Database();
    $obj->LogoutEntry($_SESSION['uid']);
    session_destroy();
    header('location:login.php');
?>