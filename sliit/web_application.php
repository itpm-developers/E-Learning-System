<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <title>Home Page</title>

    <style>
        div{
            text-align: justify;
        }

        .navbar-custom{
            background-color:chocolate ;
            border: none;
            color:floralwhite;
        }
        a:hover {background-color:none;}


        .navbar_top{
            margin-top: 10px;
        }


        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
            height:60%;

        }

        }

    </style>

</head>
<body style="background-color:azure;">

<div class="container" id="main">

    <!--navbar-->
    <?php include_once("includes/navbar.php"); ?>


    <!--slides-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="2"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li> -->
        </ol>





        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--3 columns-->
    <!--
    <div style="width:100%;"><br>

        <div ><img src="images/a.jpg" width="100%" height="50%"><br></div>
    </div> <br>

    -->
    <!-- content-->

    <div class="pager">
        <div class="container" style="position: relative; text-align: center">
            <div class="top-left" style="position: absolute; font-family:Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 27px; color: #16158f">
                <h1>Web Application Development</h1>
                The <span> web world </span>  expanding speedily with <br>the growing number of the internet users across the world.<br>With
                the  growing importance of the web media,<br> the expectations and aspiration are also growing.<br> Bussiness now intend to gain more
                result from <br>their investment in the <span> web application development</span>.<br> And this is bringing more <br>challenges while
                out sourcing web application development.

            </div>
            <img src="images/web-application-development.jpg" width="1145">

        </div>
        <div class="box1"  >
            <ul>
                <h2>Key Features</h2>
                <li>To deliver an acceptable level of English proficiency</li><br>
                <li>To enhance self confidence and learning orientation of participants</li> <br>
                <li>To develop knowledge and understanding of participants on specified subject areas to pursue undergraduate studies</li>
            </ul>

        </div>

        <div class="box2" >
            <ul>
                <h2>Entry Requirments</h2>
                <li>GCE OL 6 passes including Mathematics and English. Cambridge or Edexcel 5 Passes including Mathematics and English</li>
            </ul>
        </div>
        <div class="box">
            <ul>
                <h2>Fees & Funding</h2>
                <li>Duration : 3 months </li><br>
                <li>Program Fee : LKR 30000.00 </li> <br>
                <li>Registration Fee : LKR 7500.00 </li> <br>
                <li>Library Fee : LKR 3000.00 </li>
            </ul>
        </div>
    </div>

    <!--footer-->
    <center><?php include_once("includes/footer.php"); ?></center>


</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>