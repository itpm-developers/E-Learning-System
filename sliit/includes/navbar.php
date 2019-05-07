
    <nav class="navbar  navbar_top navbar-custom" style=" background-color:#008F77 ; border: none; color:floralwhite;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">ABC</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="web_application.php">Web Application Development</a></li>
                            <li><a href="Mobile_application.php">Mobile Application Development</a></li>
                            <li><a href="Software_eng.php">Software Engineering</a></li>
                            <li><a href="java_course.php">JAVA Course</a></li>
                            <li><a href="computer_networks.php">Computer Networks</a></li>
                        </ul>
                    </li>
                    <li><a href="news.php">News & Events</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <?php if(isset($_SESSION["login_user"])){?>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php } else {?>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>