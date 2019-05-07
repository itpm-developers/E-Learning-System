<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<link type="text/css" rel="stylesheet" href="contact/contact.css">

    <title>Contact Us</title>

    <style>

        div{
            text-align: justify;
        }

        .navbar-custom{
            background-color:#008F77 ;
            border: none;
            color:floralwhite;
        }
        a:hover {background-color:none;}


        .navbar_top{
            margin-top: 10px;
        }

        body{
            background-color: white;
            /* background-image: url("images/hy_1.png");
             background-repeat: repeat;*/



        }
    </style>

</head>

<body style="background-color:azure;">

<div class="container" id="main">

    <!--navbar-->
    <?php include_once("includes/navbar.php"); ?>


    <div align="center">
        <h2 align="center"; style="font-size: 50px; color: darkblue">CONTACT US<b></b></h2><br/>
        <div align="center">
            NO:309, High Level road, Colombo 0500500<br/>
            Sri Lanka<br/>
            Phone   : +94 (11) 544 5000<br/>
            Fax     : +94 (11) 544 5009<br/>
            E-mail  : info@ABC.com<br/>
            website : <a href="www.ABC.com">www.ABC.com</a><br/><br/>
        </div>
        <h2 align="center">Follow Us On</h2>
        <div>
            <img src="images/contact.png";margin-left="100px";  width="350pa"; height="250pa">
        </div>

    </div>

        </div>





    <!--footer-->
    <center><?php include_once("includes/footer.php"); ?></center>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>