<?php
session_start();
include 'functions/connection.php';
include("functions/functions.php");
$targetDir = $description = $targetFile = $new_course = "";
$message = "";
$messageType = -1; // Default Message

                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            require_once("functions/connection.php");
                            $new_course=$_POST['cname'];
                            $description=$_POST['content'];


                        }
                            $conn = CreateConnection();
                            $user_details = user_details($_SESSION["login_user"]);
                            $userFName = "";
                            $userId =0;
                            $userLName = "";
                            if($user_details){
                                while($row = mysqli_fetch_array($user_details)){
                                    $userId = $row["id"];
                                    $userFName = $row["f_name"];
                                    $userLName = $row["l_name"];
                                }
                            }


                        $action=mysqli_query($conn, "INSERT INTO add_new (new_course,description,add_user) VALUES ('$new_course', '$description','$userId')");
                         $message =  "Sucessfully Uploaded";



?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

    <title>Course Management</title>
</head>
<body>

<!--sidebar-->
<?php include_once("includes/sidebar.php"); ?>

<div class="col-md-offset-4">
    <br>
    <br>
    <br>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#admins" data-toggle="tab" style="color:#337ab7;">Courses</a></li>
        <li><a href="#add" data-toggle="tab"style="color:#337ab7;">Add new Courses</a> </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="admins"><!-- Course Information-->
            <div class="col-md-9"><br>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>

                        <th>Course Name</th>
                        <th>Description</th>

                    </tr>
                    </thead>
                    <?php

                    $conn = CreateConnection();
                    if($query = mysqli_query($conn, "select * from add_new")){
                        $rows = mysqli_num_rows($query);
                        if ($rows) {
                            while($dataRow = mysqli_fetch_array($query)){
                                echo "<tbody><tr><td>";
                                echo $dataRow["new_course"];
                                echo "</td>";
                                echo "<td>";
                                echo $dataRow['description'];

                            echo "</td></tr></tbody>";
                            }
                        }
                        mysqli_close($conn); // Closing Connection
                    }
                    ?>

                    <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane" id="add"><!-- Add New Course-->
            <div class="col-md-8 col-md-offset-1"><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Add New Course</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" role="form" action="">
                            <label>Course Name:</label>
                            <input type="text" class="form-control" name="cname" required>

                            <label>Course Description:</label>
                            <textarea class="form-control" rows="5" name="content" required></textarea>

                                                          <br>
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <?php
                            if($messageType > -1){
                                if($messageType == 1){
                                    echo "<div style='color: #008200'>".$message."</div>";
                                }
                                else{
                                    echo "<div style='color: red'>".$message."</div>";
                                }
                            }
                            ?>
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