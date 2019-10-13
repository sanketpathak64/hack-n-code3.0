<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once './view/profile.php';
    include './databaseconnect.php';
} else {
    require_once './view/login-form.php';
}
?>