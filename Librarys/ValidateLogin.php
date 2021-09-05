<?php
session_start();
include('../Librarys/Connection.php');

if(empty($_POST['cnpj']) || empty($_POST['username']) || empty($_POST['password'])) {
    header('Location: ../Panel/Login/');
    exit();
}

$cnpj = pg_escape_string($_POST['cnpj']);
$username = pg_escape_string($_POST['username']);
$password = pg_escape_string($_POST['password']);

$ssql = "select user_username from tb_user where user_cnpj = '{$cnpj}' and user_username = '{$username}' and user_password = md5('{$password}')";
$result = pg_query($bdconexao, $ssql);
$row = pg_num_rows($result);

if ($row > 0) {
    $_SESSION['user_username'] = $username;
    header('location: ../Views/Panel/');
    exit();
    
} else {
    $_SESSION['not_authorized'] = true;
    header('location: ../Views/Panel/Login/');
    exit();
}