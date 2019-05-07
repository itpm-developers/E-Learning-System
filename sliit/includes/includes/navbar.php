
    <nav class="navbar  navbar_top navbar-custom" style=" background-color:#008F77 ; border: none; color:floralwhite;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="main.php">ABC</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="main.php">Home</a></li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculties<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="school_of_computing.php">Add course Materials</a></li>
                                <li><a href="school_of_business.php">Add Assignments</a></li>
                                <li><a href="add_event.php">Add Events</a></li>
                            </ul>
                        </li>

                    <li><a href="news.php">News</a></li>
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