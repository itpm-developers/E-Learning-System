<?php
session_start(); // Starting Session
$error=''; // Error Message

if (isset($_POST['submit'])) {

    if (empty($_POST['email']) || empty($_POST['pass'])) {
        $error = "Username or Password is Invalid";
    }
    else
    {
// $username and $password
        $email=$_POST['email'];
        $password=$_POST['pass'];
// Connection start
        $connection = mysqli_connect("localhost", "root", "", "sliit");
// SQL injection Protect
        $email = stripslashes($email);
        $password = stripslashes($password);
        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);
        $encryptPassword = md5($password);
//Query For Find Users

        if($query = mysqli_query($connection, "select * from users where password='$encryptPassword' AND email='$email'")){
            $rows = mysqli_num_rows($query);
            if ($rows) {
                $_SESSION['login_user']=$email;
                header("location: admin_panel.php");
            } else {
                $error = "Username or Password is Invalid";
            }
            mysqli_close($connection);
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

    <title>Admin Login</title>

</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container" id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Admin Log In</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" role="form" action="<?php echo $_SERVER["PHP_SELF"]?>">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your E Mail">
                            <br>
                            <label>Password:</label>
                            <input type="password" class="form-control" name="pass" placeholder="Enter Your Password">

                          <br>

                            <input type="submit" name="submit" class="btn btn-primary" value="Log In"><br><br>

                            <?php echo '<div style="color:red; font-weight: bold">' . $error . '</div>'; ?> <!-- Error Message-->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>