<?php
    session_start(); // Starting Session
    $error=''; // Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $error = "Username or Password is Invalid";
        }
        else
        {
// $username and $password
            $email=$_POST['email'];
            $password=$_POST['password'];
// Connection start
            $connection = mysqli_connect("localhost", "root", '', "sliit");
// SQL injection Protect
            $email = stripslashes($email);
            $password = stripslashes($password);
            $email = mysqli_real_escape_string($connection, $email);
            $password = mysqli_real_escape_string($connection, $password);
            $encryptPassword = md5($password);
//Query For Find Users

            if($query = mysqli_query($connection, "select * from student_signup where password='$encryptPassword' AND email='$email'")){
                $rows = mysqli_num_rows($query);
                if ($rows) {
                    $_SESSION['login_user']=$email; // Session

                    if($query2 = mysqli_query($connection, "select * from student_signup where password='$encryptPassword' AND email='$email'")){
                        while($row = mysqli_fetch_array($query2)){
                            $_SESSION['f_name'] = $row['f_name'] ;
                            $_SESSION['l_name'] = $row['l_name'] ;
                            $_SESSION['faculty'] = $row['faculty'];
                            $_SESSION['course'] = $row['course'] ;
                            $_SESSION['batch'] = $row['batch'] ;
                            $_SESSION['index_no'] = $row['index_no'] ;
                            
                        }
                    }

                    header("location: loginlms1.php"); // Redirecting
                } else {
                    $error = "Username or Password is Invalid";
                }
                mysqli_close($connection); // Closing Connection
            }

        }
    }
    ?>

    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <title>Login</title>

        <style>

            div {
                text-align: justify;
            }

            .navbar-custom {
                background-color: #008F77;
                border: none;
                color: floralwhite;
            }

            a:hover {
                background-color: none;
            }

            .navbar_top {
                margin-top: 10px;
            }

            body {
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
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="background-color:#008F77;color:floralwhite;">Log In</div>
                        <div class="panel-body" style="background-color:azure;">
                            <form class="form-horizontal" method="post" role="form" name="myform">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Your E Mail">
                                <br>
                                <label>Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Your Password">

                                <!--<label>
                                    <input type="checkbox">Remember Me
                                </label>--><br>

                                <button type="submit" class="btn btn-default" name="submit"
                                        style="background-color:#008F77;color:floralwhite;">Log In
                                </button>
                                <br><br>

                                <!--<a href="" style="color:#008F77;">Forgot Password?</a><br><br>-->

                                <?php echo '<div style="color:red; font-weight: bold">' . $error . '</div>'; ?> <!-- Error Message-->
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
