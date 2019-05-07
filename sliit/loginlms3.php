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

            <!--?php
                    if(isset ($_GET['notif'])) {
                        $n_id= $_GET['notif'];
                        $pdo->query("update notification set read_n='0' where id='$n_id'");
                        header("location: loginlms3.php");
                    }
                    $data = $pdo->query("select * from notification");
                    $new_data = $pdo->query("select * from notification where read_n='1'");
                    $count = $new_data-> rowcount();
                    ?-->
            <div class="dropdown" id="notification" >
                <button class="btn-btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="border:#008F77;margin-left: 1200px; background-color: #008F77; color: white">Notification<?php if($count>0){echo "(".$count.")";}?>
                    <span class="caret" ></span></button>

                <ul class="dropdown-menu">
                    <!--?php foreach ($data as $value){?-->
                    <!--?php if($value['read_n']=='1'){?-->
                    <li class="alert-danger"><a href="?nof<!--?php echo $value['id']?-->"><!--?php echo $value["title"];?--></li>
                    <!--?php }else{?-->
                    <li><a><!--?php echo $value["title"];?--></a></li>
                    <!--?php }
}?-->
                    <!--?php }?-->
                </ul>
            </div>


        <div style="width:98%;align:center;">
            
            <div style="background-color:none;color:#663300;" class="include"><center>
                  
                <h1>Welcome To Our ABC</h1><hr><br></center>
                <h3><font color="#FFFFFF">Select Your Modules To Download</font></h3><br><hr><br><br>


                    <table style="width: 500px; background-color: #008F77" class="table table-bordered">
                        <thead>
                        <tr>
                            <th><div style=color:#ffffff>Module</div></th>
                            <th><div style=color:#ffffff>File Name</div></th>
                            <th><div style=color:#ffffff>Uploaded By</div></th>
                        </tr>
                        </thead>
                        <?php

                        $conn = CreateConnection();
                        if($query = mysqli_query($conn, "select * from module_slide m, users u WHERE m.add_user = u.id")){
                            $rows = mysqli_num_rows($query);
                            if ($rows) {
                                while($dataRow = mysqli_fetch_array($query)){
                                    echo "<tbody><tr><td>";
                                    echo $dataRow["module"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo "<a style='color: #122b40; text-decoration: dashed' href='uploads/".$dataRow['file_name']."'>".$dataRow['file_name']."</a>";
                                    echo "</td>";
                                    echo "<td>".$dataRow["f_name"]." ".$dataRow["l_name"];
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