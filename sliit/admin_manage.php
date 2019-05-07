<?php
    session_start();
    include("functions/functions.php");
    $isAdd = 1;
    $submit = $fname =$lname = $email = $password = $repass = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once("functions/connection.php");
        require_once("functions/functions.php");
        $submit=$_POST['submit'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $repass=$_POST['repass'];
        $isAdd = 1;
    }

    if($submit)
    {
        if($fname && $lname && $email && $password && $repass)
        {
            if(strlen($password)<6 || strlen($password)>20)
            {
                echo "<div style=color:red; font-weight: bold>Password Should Be 6-10 Characters</div>";
            }
            else
            {
                if($password == $repass)
                {
                    if(admin_exist($email)== false)
                    {
                        $password=md5($password);
                        $conn = CreateConnection();
                        //echo "INSERT INTO student_signup (f_name, l_name, email, password, faculty, course, batch, `index`, `date`, `active`) VALUES ('$fname', '$lname', '$email','$password','$faculty','$course','$batch','$index','$date',0)";
                        $action=mysqli_query($conn, "INSERT INTO users (f_name, l_name, email, user_group, password) VALUES ('$fname', '$lname', '$email', 1,'$password')");
                        echo "<div style=color:red; font-weight: bold>Sucessfully Register</div>";
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
            echo"<div style=color:red; font-weight: bold>Please Fill All The Fields</div>";
        }
    }

?>
<?php
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

    <title>Admin Management</title>
</head>
<body>

<!--sidebar-->
<?php include_once("includes/sidebar.php"); ?>

<div class="col-md-offset-4">
    <br>
    <br>
    <br>
    <ul class="nav nav-tabs">

        <li class="active"><a href="#admins" data-toggle="tab" style="color:#337ab7;">Admins</a></li>
        <li><a href="#add" data-toggle="tab"style="color:#337ab7;">Add new admin</a> </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="admins"><!-- Admin Information-->
            <div class="col-md-9"><br>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Admin ID</th>
                        <th>Admin Name</th>
                        <th>Email</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <?php
                        $connection = mysqli_connect("localhost", "root", '', "sliit");
                        if($query = mysqli_query($connection, "select * from users WHERE user_group = 1")){
                            $rows = mysqli_num_rows($query);
                            if ($rows) {
                                while($dataRow = mysqli_fetch_array($query)){
                                    echo "<tbody><tr><td>";
                                    echo $dataRow["id"];
                                    echo "</td>";
                                    echo "<td>".$dataRow["f_name"]." ".$dataRow["l_name"]."</td>";
                                    echo "<td>".$dataRow["email"]."</td>";
                                    echo "<td>";
                                    if($_SESSION["login_user"] != $dataRow["email"]) {
                                        echo "<a style='color: #122b40; text-decoration: dashed' onClick=\"javascript: return confirm('Please confirm deletion');\" href=delete_admin.php?id=" . $dataRow['id'] . ">Remove</a>";
                                    }
                                    echo "</td></tr></tbody>";
                                }
                            } else {
                                echo "<tbody><tr><td colspan='4'>No Admin Data</td></tr></tbody>";
                            }
                            mysqli_close($connection); // Closing Connection
                        }
                    ?>

                </table>
            </div>
        </div>

        <div class="tab-pane" id="add"><!-- Add New Admins-->
            <div class="col-md-8 col-md-offset-1"><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Add New Admin</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" role="form" action="">
                            <label>First Name:</label>
                            <input type="text" class="form-control" name="fname" required>

                            <label>Last Name:</label>
                            <input type="text" class="form-control" name="lname" required>

                            <label>E Mail:</label>
                            <input type="email" class="form-control" name="email" required>

                            <label>Password:</label>
                            <input type="password" class="form-control" name="pass" required>

                            <label>Repeat Password:</label>
                            <input type="password" class="form-control" name="repass"required>

                            `                              <br>
                            <input id="submit" type="submit" name="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>

<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            $('.nav-tabs a[href="#add"]').tab('show');
        })
    })

</script>

</body>
</html>
<?php
}

else{
    header("location: admin_login.php");
}
?>