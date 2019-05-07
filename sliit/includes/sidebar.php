<?php
$user_role = get_user_role($_SESSION["login_user"]); //Session For User
?>

<div class="nav-side-menu">
    <div class="brand">Admin Control</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">

            <?php
                if($user_role == 1 && $user_role != 0) { //Check User Level Admin Or Lecturer
                    ?>
                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="admin_panel.php"><i class="fa fa-globe fa-lg"></i>Admin Home<span
                                class="glyphicon glyphicon-arrow-right"></span></a>
                    </li>

                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="admin_manage.php"><i class="fa fa-globe fa-lg"></i>Admin Management<span
                                class="glyphicon glyphicon-arrow-right"></span></a>
                    </li>

                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="lecturer_manage.php"><i class="fa fa-globe fa-lg"></i>Lecturer Management<span
                                class="glyphicon glyphicon-arrow-right"></span></a>
                    </li>

                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="student_manage.php"><i class="fa fa-globe fa-lg"></i>Student Management<span
                                class="glyphicon glyphicon-arrow-right"></span></a>
                    </li>

                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="session_manage.php"><i class="fa fa-globe fa-lg"></i>Session Management<span
                                class="glyphicon glyphicon-arrow-right"></span></a>
                    </li>

                    <!--li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="faculty_manage.php"><i class="fa fa-globe fa-lg"></i>Faculty Management<span
                                class="glyphicon glyphicon-arrow-right"></span></a>
                    </li>-->

                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="course_manage.php"><i class="fa fa-globe fa-lg"></i>Course Management<span
                                class="glyphicon glyphicon-arrow-right"></span></a>
                    </li>
               <?php
                }

                if($user_role == 0 ){ //Check User Level For Lecturer
            ?><!--
            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="module_manage.php"><i class="fa fa-globe fa-lg"></i>Module Management<span class="glyphicon glyphicon-arrow-right" ></span></a>
            </li>-->
            <?php
                }
                if($user_role == 1 && $user_role != 0) {
                    ?>

                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="batch_manage.php"><i class="fa fa-globe fa-lg"></i>Batch Management<span
                                class="glyphicon glyphicon-arrow-right"></span></a>
                    </li>

                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="news_manage.php"><i class="fa fa-globe fa-lg"></i>News Management<span
                                class="glyphicon glyphicon-arrow-right"></span></a>
                    </li>
                <?php
                }
            ?>
                    <li>
                        <a href="admin_logout.php">
                            <strong>
                                <center>Log Out</center>
                            </strong>
                        </a>
                    </li>

            <li>
                <a href="http://localhost:8080/sliit/sliit/course_manage.php">
                    <strong>

                        <center>Add New Courses</center>

                    </strong>
                </a>
            </li>

            <li>
                <a href="http://localhost:8080/sliit/sliit/module_manage.php">
                    <strong>

                        <center>Add Course Materials</center>

                    </strong>
                </a>
            </li>

            <li>
                <a href="">
                    <strong>

                        <center>Add Assignments</center>
                    </strong>
                </a>
            </li>

            <li>
            <!--<li>
                <a href="http://localhost:8080/sliit/sliit/index1.php">
                    <strong>

                        <center>Add Event</center>


                    </strong>
                </a>
            </li>-->

            <li>
                <a href="http://localhost:8080/sliit/sliit/event_manage.php">
                    <strong>

                        <center>Add Event</center>


                    </strong>
                </a>
            </li>
            <li>
                <a href="#">
                    <strong>

                        <center>Add Answers</center>


                    </strong>
                </a>
            </li>
            <li>
                <a href="http://localhost:8080/sliit/sliit/lecturer_manage.php">
                    <strong>

                        <center>Add Lectures</center>

                </a>

                    </strong>
            </li>
            </li>
            <li>
                <a href="http://localhost:8080/sliit/sliit/student_manage.php">
                    <strong>

                        <center>Student Profile</center>


                    </strong>
                </a>
            </li>
            <li>
                <a href="http://localhost:8080/sliit/sliit/admin_manage.php">
                    <strong>

                        <center>View Admin Panel</center>


                    </strong>
                </a>
            </li>

        </ul>
    </div>
</div>
