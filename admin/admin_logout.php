<?php
include_once 'dbfunctions.inc.php';
session_start();

if(isset($_SESSION['loggedUser'])) {
    $loggedUser = $_SESSION['loggedUser'];
    logoutAdmin($loggedUser['id'], $loggedUser['email']);
}

session_destroy();
header("Location: admin_login.php");
