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

    <title>Session Management</title>
</head>

<body>

<!--sidebar-->
<?php include_once("includes/sidebar.php"); ?>

<div class="container">
    <div class="row">
        <br>
        <br>
        <br>
        <div class="col-md-3">


        </div>

        <div class="col-md-9">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#sesions" data-toggle="tab" style="color:#337ab7;">Sessions</a> </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="sessions"><br>
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>Session ID</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Login Time</th>
                            <th>Logout Time</th>
                            <th>Date</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
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