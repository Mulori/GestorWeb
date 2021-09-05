<?php 
    $WebSiteURL = "http://192.168.0.114";

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['user_username'])) {
        header('location: '.$WebSiteURL.'/Views/Panel/Login/');
        exit();
    }
?>