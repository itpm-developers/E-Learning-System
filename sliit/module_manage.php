<?php
session_start();
include 'functions/connection.php';
include("functions/functions.php");
$targetDir = $fileName = $targetFile = $moduleName = "";
$message = "";
$messageType = -1; // Default Message
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $targetDir = "uploads/"; //Upload Location
    $fileName = $_FILES["file"]["name"];
    $targetFile = $targetDir . basename($fileName);
    $moduleName = $_POST["mname"];

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) { //Move File & Temp Name
        $message = "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        $messageType = 1;
    } else {
        $message = "Sorry, There Was An Error Uploading Your File.";
        $messageType = 0;
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

    $action=mysqli_query($conn, "INSERT INTO module_slide (module, file_name, add_user) VALUES ('$moduleName', '$fileName', '$userId')");
    $message =  "Sucessfully Uploaded";

}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

    <title>Module Management</title>
</head>
<body>

<!--sidebar-->
<?php include_once("includes/sidebar.php"); ?>

<div class="col-md-offset-4">
    <br>
    <br>
    <br>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#admins" data-toggle="tab" style="color:#337ab7;">Course Materials</a></li>
        <li><a href="#add" data-toggle="tab"style="color:#337ab7;">Add Course Materials</a> </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="admins"> <!-- Module Information-->
            <div class="col-md-9"><br>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>File Name</th>

                    </tr>
                    </thead>
                    <?php

                    $conn = CreateConnection();
                    if($query = mysqli_query($conn, "select * from module_slide")){
                        $rows = mysqli_num_rows($query);
                        if ($rows) {
                            while($dataRow = mysqli_fetch_array($query)){
                                echo "<tbody><tr><td>";
                                echo $dataRow["module"];
                                echo "</td>";
                                echo "<td>";
                                echo $dataRow['file_name'];


                                echo "</td></tr></tbody>";
                            }
                        } else {
                            echo "<tbody><tr><td colspan='4'>No Slides Uploaded</td></tr></tbody>";
                        }
                        mysqli_close($conn); // Closing Connection
                    }
                    ?>
                </table>
            </div>
        </div>

        <div class="tab-pane" id="add"><!-- Add New Course Material-->
            <div class="col-md-8 col-md-offset-1"><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Add Course Materials</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
                            <label>Course Name:</label>
                            <input type="text" class="form-control" name="mname" required>

                            <label>Upload Course Materials</label>
                            <input type="file" class="form-control" name="file" id="file" required>
                            `                              <br>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

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