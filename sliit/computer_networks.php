<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <title>Home Page</title>

    <style>
        /* body{
             background: url("images/macbook-2617705_960_720.jpg" );

         } */
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
<!--  <img src="images/gina-2000x800.jpg"> -->
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
    <!--3 coloums-->
    <!--
    <div style="width:100%;"><br>

        <div ><img src="images/a.jpg" width="100%" height="50%"><br></div>
    </div> <br>

    -->
    <!-- content-->

    <div class="pager">
        <div class="container" style="position: relative; text-align: center">
            <div class="top-left" style="position: absolute; font-family:Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 40px; color: #fdfdfe">

                <h1>Computer Networks</h1><br/>
                Learn all there is to know about IT networking,<br>
                network administration and network certification with Pluralsight.
                <br> Our networking authors draw on real-world experience <br>
                to help further your knowledge.
                <br> From CCNA certification courses to <br>
                the fundamentals of infrastructure networking,<br> we have the course you need.
            </div>
            <img src="images/macbook-2617705_960_720.jpg" width="1145" style="opacity: 0.5%">

        </div>
        <!-- <div class="row1" style=""> -->
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