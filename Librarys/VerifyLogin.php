<?php 
    $WebSiteURL = "http://localhost";

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['user_cnpj'])) {
        header('location: '.$WebSiteURL.'/Views/Panel/Login/');
        exit();
    } else {
        header('location: '.$WebSiteURL.'/Views/Panel/');
        exit();
    }
?>