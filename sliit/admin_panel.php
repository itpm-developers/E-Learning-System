<?php
session_start();
include("functions/functions.php");
if(isset($_SESSION['login_user'])){
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

    <title>Admin Panel</title>
</head>
<body>



    <!--sidebar-->
    <?php include_once("includes/sidebar.php"); ?>

    <div class="p">

        <a href="http://localhost:8080/sliit/sliit/course_manage.php">Add New Courses</a>
        <a href="http://localhost:8080/sliit/sliit/module_manage.php">Add course Materials</a>
        <a href="http://localhost:8080/sliit/sliit/assignments.php">Add Assignments</a>
        <a href="http://localhost:8080/sliit/sliit/quizes.php">Add Quizes</a>
        <a href="http://localhost:8080/sliit/sliit/index1.php">Add Event</a>
        <a href="">Add ClassTimeTables</a>
        <a href="">Online Helpdesk</a>





    </div>


</body>

<div class="col-md-offset-4">
    <br>
    <br>
    <br>


</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
}

else{
    header("location: admin_login.php");
}
?>