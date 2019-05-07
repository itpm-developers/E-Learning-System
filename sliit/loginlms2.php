<?php
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

    <title>Select Your Academic Year</title>

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

         
      
 </style>

</head>
    
<body style="background: url(images/imgscl.jpg); background-size: 100%; background-repeat: no-repeat;" >

        <div class="container" id="main">

            <!--navbar-->
            <?php include_once("includes/navbar.php"); ?>


        <div style="width:98%;align:center;">
            
            <div style="background-color:none;color:#663300;"><center>
                  
                <h1>Welcome To Our ABC</h1><hr><br></center>
                <h3><font color="#FFFFFF">My Courses</font></h3><br><hr><br><br>
                 
                <h4><a href="loginlms3.php" style="color:#FFFFFF;background-color:none;">Course Materials</a></h4><br><br/>
                 
                  
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
