<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'functions/connection.php';
require 'functions/functions.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <title>Question Form</title>

    <style>

        div{
            text-align: justify;
        }

        .navbar-custom{
            background-color:#008F77 ;
            border: none;
            color:floralwhite;
        }
        a:hover {background-color:none;}


        .navbar_top{
            margin-top: 10px;
        }

        body{
            background-color: white;
            /* background-image: url("images/hy_1.png");
             background-repeat: repeat;*/



        }
    </style>


</head>
<body style="background-color:azure;">

<div class="container" id="main">

    <!--navbar-->
    <?php include_once("includes/navbar.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"  style="background-color:#008F77;color:floralwhite;"><strong>Enter Question</strong></div>
                    <div class="panel-body" style="background-color:azure;">

                        <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            require_once("functions/connection.php");
                            $submit=$_POST['submit'];
                            $fname=$_POST['fname'];
                            $lname=$_POST['lname'];
                            $index=$_POST['index'];
                            $email=$_POST['email'];
                            $remail=$_POST['remail'];
                            $faculty=$_POST['faculty'];
                            $course=$_POST['course'];
                            $batch=$_POST['batch'];
                            $password=$_POST['pass'];
                            $repass=$_POST['repass'];
                            $date=date('Y-m-d');

                        }



                        if($submit)
                        {
                            if($fname && $lname && $index && $email && $remail && $faculty && $course && $batch && $password && $repass)
                            {
                                if($email == $remail)
                                {
                                    if(strlen($password)<6 || strlen($password)>20)
                                    {
                                        echo "<div style=color:red; font-weight: bold>Password Should Be 6-10 Characters</div>";
                                    }
                                    else
                                    {
                                        if($password == $repass)
                                        {
                                            if(user_exist($email)== false)
                                            {
                                                $password=md5($password);
                                                $conn = CreateConnection();

                                                $action=mysqli_query($conn, "INSERT INTO question(f_name, l_name, email, password, faculty, course, batch, `index_no`, `date`) VALUES ('$fname', '$lname', '$email','$password','$faculty','$course','$batch','$index','$date')");
                                                echo "<div style=color:red; font-weight: bold>Successfully Send</div>";
                                            }
                                            else
                                            {
                                                echo "<div style=color:red; font-weight: bold>User Already Exist</div>";
                                            }
                                        }
                                        else
                                        {
                                            echo "<div style=color:red; font-weight: bold>Passwords Do Not Match</div>";
                                        }
                                    }
                                }
                                else
                                {
                                    echo "<div style=color:red; font-weight: bold>E Mail Do Not Match</div>";
                                }
                            }

                            else
                            {
                                echo "<div style=color:red; font-weight: bold>Please Fill All The Fields</div>";
                            }
                        }

                        ?>

                        <form class="form-horizontal" method="post" role="form" action="question_form.php" >

                            <label> Name:</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter Your  Name" >
                            <br>
                            <label>ID Number:</label>
                            <input type="text" class="form-control" name="lname" placeholder="IT15017754" >
                            <br>
                            <label>Question:</label>
                            <input type="text" class="form-control" name="index"  >
                            <br>
                            <label>E Mail:</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your E Mail" >
                            <br>
                            <label>Re Enter E Mail:</label>
                            <input type="email" class="form-control" name="remail" placeholder="Re Enter Your E Mail" >
                            <br>
                            <label>Faculty:</label>
                            <select class="form-control"  name="faculty">
                                <option disabled selected> Choose The Faculty </option>
                                <option value="Faculty_of_Computing">Faculty of Computing</option>

                            </select>
                            <br>
                            <label>Course:</label>
                            <select class="form-control" required name="course">
                                <option disabled selected>Choose Your Course</option>
                                <option value="Web_Application Development">Web Apllication Development</option>
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="JAVA Course">JAVA Course</option>
                                <option value="Mobile Application Development">Mobile Application Development</option>
                                <option value="Computer Networks">Computer Networks</option>
                            </select>
                            <br>
                            <label>Year:</label>
                            <select class="form-control" name="batch">
                                <option disabled selected>Choose Your Year</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3nd Year</option>
                                <option value="4th Year">4th Year</option>
                            </select>
                            <br>
                            <label>Password:</label>
                            <input type="password" class="form-control" name="pass" placeholder="Enter Your Password" required>
                            <br>
                            <label>Re Enter Password:</label>
                            <input type="password" class="form-control" name="repass" placeholder="Re Enter Your Password" required>

                            <br>

                            <input type="submit" name="submit" value="Submit" class="btn btn-default"style="background-color:#008F77;color:floralwhite;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <center><?php include_once("includes/footer.php"); ?></center>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>