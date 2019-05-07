<?php
session_start();
if(isset($_SESSION['login_user'])){
    unset($_SESSION['login_user']);  //Delete Session
    header("Location: admin_login.php"); // Redirecting
}
?>