<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once './view/status_of_waste.php';
} else {
    require_once './view/login-form.php';
}
?>