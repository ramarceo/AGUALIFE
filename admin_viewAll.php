<?php
include_once 'dbfunctions.inc.php';
session_start();

if(isset($_SESSION['loggedUser'])) {
    $loggedUser = $_SESSION['loggedUser'];
    if($loggedUser['role_id'] != 0) {
        header("Location: admin_dashboard.php");
    }
} else {
    header("Location: admin_login.php");
}
?>