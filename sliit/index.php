<?php

include 'functions/connection.php';

?>

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
            background-color:#008F77 ;
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
       
    </style>

</head>
<body style="background-color:azure;">
    
    <div class="container" id="main">

    <!--navbar-->
    <?php include_once("includes/navbar.php"); ?>


    <!--slides-->

                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                        </ol>


                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="images/slider/s2.jpg" alt="Chania" width="460" height="345">
                                                
                                            </div>

                                            <div class="item">
                                                <img src="images/slider/slide5.jpg" alt="Chania" width="460" height="345">
                                                
                                            </div>

                                            <div class="item">
                                                <img src="images/slider/s4.jpg" alt="Flower" width="460" height="345">
                                                
                                            </div>

                                            <div class="item">
                                                <img src="images/slider/s3.jpg" alt="Flower" width="460" height="345">
                                                
                                            </div>
                                        </div>


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
                <div style="width:100%;"><br>

                    <div class="row" style="width:100%;margin:auto;align:center;">
                        <div class="col-sm-4 " style="background-color:none;color:#008F77;" ><img src="images/maxresdefault.jpg" width="100%" height="40%" > <h3 align="center" style="color: #008F77 ">Web Application Development </h3><hr color="#008F77"><p><font color="#008F77">A course on web programming, in one form or another, has been lectured
                                    at the ABC institute since the late 2015s. From time to time larger changes were made in its contents but for a few years the course has been given in the same form. For the academic year 2010, however, changes were made that, hopefully, better enable to students to understand how the Web works and how it should be programmed. At the time of the writing, the first instance of the new course has just been completed. In this paper we report our motivation for the changes, our reasoning behind the content on the course and lessons learned from the first implementation.</font> </p>
                            <button type="button" class="btn btn-primary" style=" background-color:#008F77; border:none;"><a href="web_application.php" style="text-decoration:none; color:white;">Read More>></a></button></div>

                        <div class="col-sm-4 " style="background-color:none;color:#008F77;"><img src="images/BS-computer-sci.jpg"width="100%" height="40%"> <h3 align="center" style="color:#008F77 " align="center">Mobile Application Development</h3><hr><p><font color="#008F77">Students learn how to develop applications for mobile devices, including smartphones and tablets. Students are introduced to the survey of current mobile platforms, mobile application development environments, mobile device input methods, as well as developing applications for two popular mobile platforms. Students will design and build a variety of Apps throughout the course to reinforce learning and to develop real competency.</font></p>
                             <button type="button" class="btn btn-primary"style=" background-color: #008F77; border:none;"><a href="Mobile_application.php" style="text-decoration:none; color:white;">Read More>></a></button></div>

                        <div class="col-sm-4 " style="background-color:none; color:#008F77;"><img src="images/highschool-students-workshop.jpg"width="100%" height="40%"> <h3 align="center" style="color:#008F77">Software Engineering</h3><hr><p><font color="#008F77">The course provides a solid foundation in software engineering theory and practice to develop professional software systems. It provides career pathways in software engineering , web application programming,
                                    software designing / analysis or website designing / programming. .....</font> </p>
                            <button type="button" class="btn btn-primary"style=" background-color:#008F77; border:none;"><a href="Software_eng.php" style="text-decoration:none; color:white;">Read More>></a></button></div>
                     </div>
                </div> <br>


 <!--footer-->
    <center><?php include_once("includes/footer.php"); ?></center>


</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>