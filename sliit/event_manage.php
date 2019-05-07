<?php
session_start();
include 'functions/connection.php';
include("functions/functions.php");
$targetDir = $fileName = $targetFile = $ename = $desc1 ="";
$message = "";
$messageType = -1; // Default Message
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "uploads/"; //Upload Location
    $fileName = $_FILES["file"]["name"];
    $targetFile = $targetDir . basename($fileName);
    $ename = $_POST["mname"];
    $desc1 = $_POST["content"];


    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) { //Move File & Temp Name
        $message = "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        $messageType = 1;
    } else {
        $message = "Sorry, There Was An Error Uploading Your File.";
        $messageType = 0;
    }

    $conn = CreateConnection();




    $action=mysqli_query($conn, "INSERT INTO add_events (title,description, file_name) VALUES ('$ename','$desc1', '$fileName')");
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

    <title>Event Management</title>
</head>
<body>

<!--sidebar-->
<?php include_once("includes/sidebar.php"); ?>

<div class="col-md-offset-4">
    <br>
    <br>
    <br>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#admins" data-toggle="tab" style="color:#337ab7;">Event</a></li>
        <li><a href="#add" data-toggle="tab"style="color:#337ab7;">Add Event</a> </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="admins"> <!-- Event Information-->
            <div class="col-md-9"><br>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Description</th>
                        <th>File Name</th>
                        <th>Remove</th>

                    </tr>
                    </thead>
                    <?php

                    $conn = CreateConnection();
                    if($query = mysqli_query($conn, "select * from add_events")){
                        $rows = mysqli_num_rows($query);
                        if ($rows) {
                            while($dataRow = mysqli_fetch_array($query)){
                                echo "<tbody><tr><td>";
                                echo $dataRow["title"];
                                echo "</td>";
                                echo "<td>";
                                echo $dataRow["description"];
                                echo "</td>";
                                echo "<td>";
                                echo $dataRow["file_name"];
                                echo "</td>";
                                echo "<td>";


                                if($_SESSION["login_user"] != $dataRow["id"]) {
                                    echo "<a style='color: #122b40; text-decoration: dashed' onClick=\"javascript: return confirm('Please confirm deletion');\" href=delete_event.php?id=" . $dataRow['id'] . ">Remove</a>";
                                }
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

        <div class="tab-pane" id="add"><!-- Add Event-->
            <div class="col-md-8 col-md-offset-1"><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Add Event</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
                            <label>Event Name:</label>
                            <input type="text" class="form-control" name="mname" required>

                            <label>Event Description:</label>
                            <textarea class="form-control" rows="15" name="content" required></textarea>

                            <label>Upload Picture</label>
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