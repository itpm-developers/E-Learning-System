<?php
session_start();
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

    <title>Student Management</title>
</head>

<body>

<!--sidebar-->
<?php include_once("includes/sidebar.php"); ?>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>

        <div class="col-md-9">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#stud" data-toggle="tab" style="color:#337ab7;">Students</a> </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="stud"><br>
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Index Number</th>
                            <th>E mail</th>
                            <th>Faculty</th>
                            <th>Course</th>
                            <th>Batch</th>
                            <th>Signup Date</th>
                        </tr>
                        </thead>

                        <?php
                        $connection = mysqli_connect("localhost", "root", '', "sliit");
                        if($query = mysqli_query($connection, "select * from student_signup")){
                            $rows = mysqli_num_rows($query);
                            if ($rows) {
                                while($dataRow = mysqli_fetch_array($query)){
                                    echo "<tbody><tr><td>";
                                    echo $dataRow["id"];
                                    echo "</td>";
                                    echo "<td>".$dataRow["f_name"]." ".$dataRow["l_name"]."</td>";
                                    echo "<td>".$dataRow["index_no"]."</td>";
                                    echo "<td>".$dataRow["email"]."</td>";
                                    echo "<td>".$dataRow["faculty"]."</td>";
                                    echo "<td>".$dataRow["course"]."</td>";
                                    echo "<td>".$dataRow["batch"]."</td>";
                                    echo "<td>".$dataRow["date"]."</td>";

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
        </div>
    </div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>