<?php
session_start();
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

    <title>Faculty Management</title>
</head>
<body>

<!--sidebar-->
<?php include_once("includes/sidebar.php"); ?>

<div class="col-md-offset-4">
    <br>
    <br>
    <br>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#admins" data-toggle="tab" style="color:#337ab7;">Faculties</a></li>
        <li><a href="#add" data-toggle="tab"style="color:#337ab7;">Add New</a> </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="admins"><!-- Faculty Information-->
            <div class="col-md-9"><br>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Faculty ID</th>
                        <th>Faculty Name</th>
                        <th>Remove</th>
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

        <div class="tab-pane" id="add"><!-- Add New Faculty-->
            <div class="col-md-8 col-md-offset-1"><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Add New Faculty</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" role="form" action="">
                            <label>Faculty Name:</label>
                            <input type="text" class="form-control" name="fname">

                            <label>Faculty Description:</label>
                            <textarea class="form-control" rows="15" name="content"></textarea>

                            <label>Faculty Picture:</label>
                            <input type="file" class="form-control" name="pic">
                            `                              <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
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