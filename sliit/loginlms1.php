<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'functions/connection.php';
require 'functions/functions.php';

session_start();
if(isset($_SESSION['login_user'])){
?>
    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <title>Profile</title>

        <style>
            div{
                text-align: justify;
            }

            .navbar-custom{
                background-color:#008F77 ;
                border: none;
                color:floralwhite;
            }
            a:hover {background-color:#008F77;}

            a:nodec{background-color:none;}

            .navbar_top{
                margin-top: 10px;
            }

            body{
                background-color: white;



        </style>


    </head>
    <body style="background: url(images/imgscl.jpg); background-size: 100%; background-repeat: no-repeat;" >

    <div class="container" id="main">

        <!--navbar-->
        <?php include_once("includes/navbar.php"); ?>


        <div style="width:98%;align:center;">

            <div style="background-color:none;color:#663300;"><center>
            
                    <h1>My Profile</h1><hr><br></center>
                <label>First Name:</label>
                            <input type="text" class="form-control" name="fname" value=<?php  echo $_SESSION['f_name']  ?> disabled="true">
                            <br>
                            <label>Last Name:</label>
                            <input type="text" class="form-control" name="lname" value=<?php  echo $_SESSION['l_name']  ?> disabled="true">
                            <br>
                            <label>Address:</label>
                            <input type="text" class="form-control" name="index" value=<?php  echo $_SESSION['index_no']  ?> disabled="true">
                            <br>
                            <label>E Mail:</label>
                            <input type="email" class="form-control" name="email" value=<?php  echo $_SESSION['login_user']  ?> disabled="true">
                            <br>
                            
                            <label>Faculty:</label>
                            <input type="email" class="form-control" name="email" value=<?php  echo $_SESSION['faculty']  ?> disabled="true">
                            <br>
                            <label>Course:</label>
                            <input type="email" class="form-control" name="email" value=<?php  echo $_SESSION['course']  ?> disabled="true">
                            <br>
                            <label>Batch:</label>
                            <input type="email" class="form-control" name="email" value=<?php  echo $_SESSION['batch']  ?> disabled="true">
                            
                            <br>

                            
                        </form>

                <h4><a href="loginlms2.php" style="color:black;background-color:none;">My Courses</a></h4>
               <h4><a href="http://localhost:8080/sliit/sliit/loginlms4.php" style="color:black;background-color:none;">View Event</a></h4>
                <h4><a href="#" style="color:black;background-color:none;">Online HelpDesk</a></h4>
                <h4><a href="http://localhost:8080/sliit/sliit/loginlms5viewAssign.php"  style="color:black;background-color:none;">View Assignments</a></h4>
                <h4><a href="http://localhost:8080/sliit/sliit/loginlms6viewQuiz.php"  style="color:black;background-color:none;">View Quizes</a></h4>
                <h4><a href="#" style="color:black;background-color:none;">View Class TimeTable</a></h4>


                <br><br>
                </li>


            </div>



            <!--footer-->
            <center><?php include_once("includes/footer.php"); ?></center>

        </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
    </html>
<?php
}

else{
    header("location: login.php");
}
?>
