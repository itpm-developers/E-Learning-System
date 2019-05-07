<?php
include("functions/functions.php");
$user_id = $_GET["id"];
$status = delete_user($user_id);

if($status) {
    header("location: quizes.php");
}
?>