<?php
include 'functions/connection.php';
include("functions/functions.php");
session_start();
if(isset($_SESSION['login_user'])){
    ?>
    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <title>Select Your Modules</title>

        <style>
            div{
                text-align: justify;
            }

            .navbar-custom{
                background-color:#008F77 ;
                border: none;
                color:floralwhite;
            }
            a:hover {background-color:#008F77;}

            a:nodec{background-color:none;}

            .navbar_top{
                margin-top: 10px;
            }

            body{
                background-color: white;


            .include a:nodec{
                text-decoration-color: none;
                text-decoration: underline;
                background-color: none;}


        </style>

    </head>

    <body style="background: url(images/imgscl.jpg); background-size: 100%; background-repeat: no-repeat;" >

    <div class="container" id="main">

        <!--navbar-->
        <?php include_once("includes/navbar.php"); ?>



        <div style="width:98%;align:center;">

            <div style="background-color:none;color:#663300;" class="include"><center>


                    <h1>Welcome To Our ABC</h1><hr><br></center>
                <h3><font color="#FFFFFF">Event Notices</font></h3><br><hr><br><br>


                <table style="width: 500px; background-color: #008F77" class="table table-bordered">
                    <thead>
                    <tr>
                        <th><div style=color:#ffffff>Event Name</div></th>
                        <th><div style=color:#ffffff>Picture</div></th>
                        <th><div style=color:#ffffff>Description</div></th>
                    </tr>
                    </thead>
                    <?php

                    $conn = CreateConnection();
                    if($query = mysqli_query($conn, "select * from add_events m")){
                        $rows = mysqli_num_rows($query);
                        if ($rows) {
                            while($dataRow = mysqli_fetch_array($query)){
                                echo "<tbody><tr><td>";
                                echo $dataRow["title"];
                                echo "</td>";
                                echo "<td>";
                                echo "<a style='color: #122b40; text-decoration: dashed' href='uploads/".$dataRow['file_name']."'>".$dataRow['file_name']."</a>";
                                echo "</td>";
                                echo "<td>";
                                echo $dataRow["description"];
                                echo "</td></tr></tbody>";
                            }
                        } else {
                            echo "<tbody><tr><td colspan='4'><div style=color:red; font-weight: bold>No Slides Uploaded</td></tr></tbody></div>";
                        }
                        mysqli_close($conn); // Closing Connection
                    }
                    ?>

                </table>


            </div>



            <!--footer-->
            <center><?php include_once("includes/footer.php"); ?></center>

        </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
    </html>
    <?php
}

else{
    header("location: login.php");
}
?>