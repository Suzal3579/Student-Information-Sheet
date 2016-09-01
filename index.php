<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <script src="script.js"></script>
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="animate.css">

</head>

<?php
		include "functions.php";
		create();
?>

    <body>
        <div class="topDiv">
            <div class="imageLeft">
                <img src="round.png" />
            </div>
            <div id="asideCont">
                <h1>बोनम  वेंकटा  चालामाया इंजीनियरिंग महाविध्यालय</h1>
                <h2>Bonam Venkata Chalamayya Engineering College,<br> Odalarevu</h2>
                <h3>Affiliated To  JNTUK, Kakinada</h3>
                <h5>Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997</h5>
                <?php
                //echo "Today's Date : ".date("Y/m/d")." And Time ".date("h:i")."<br><br>";
            ?>
            </div>
            <div class="imageRight">
                <img src="group.png" />
            </div>
        </div>
        <div class="clear"></div>

        <div id="main" role="main">
            <center>
                <ul class="menu">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="vision.php">Vision &amp; Mission</a></li>
                    <li><a href="#">Management</a>

                        <ul class="submenu">
                            <li><a href="founderchairman.php">Founder-Chairman</a></li>
                            <li><a href="secretary.php">Secretary</a></li>
                            <li><a href="chairman.php">Chairman</a></li>
                            <li><a href="vicechairman.php">Vice-Chairman</a></li>
                            <li><a href="dean.php">Dean</a></li>
                        </ul>
                    </li>
                    <li><a href="principal.php">Principal</a></li>
                    <li><a href="faculty.php">Faculty</a>
                        <ul class="submenu1">
                            <li><a href="#">CSE</a></li>
                            <li><a href="#">CE</a></li>
                            <li><a href="#">ME</a></li>
                            <li><a href="#">EEE</a></li>
                            <li><a href="#">ECE</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php">Students</a></li>
                    <li><a href="#"> Departments</a>
                        <ul class="submenu1">
                            <li><a href="Department.php">CSE</a></li>
                            <li><a href="#">CE</a></li>
                            <li><a href="#">ME</a></li>
                            <li><a href="#">EEE</a></li>
                            <li><a href="#">ECE</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Accredition</a>
                        <ul class="submenu1">
                            <li><a href="naac.php">NAAC</a></li>
                            <li><a href="nba.php">NBA</a></li>
                            <li><a href="pio.php">PIO</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Help</a></li>

                </ul>
                <div class="bodyDiv">
                    <div class="forAside">
                        <aside id="buttonsAside">
                            <nav id="navigationBar">
                                <ul class="sideBar" style="margin-left:-90px;">
                                    <li><a href="#">Academics</a></li>
                                    <li><a href="#">Administration</a></li>
                                    <li><a href="#">BVC News</a></li>
                                    <li><a href="#">Forthcoming Event</a></li>
                                    <li><a href="#">E-mail to students</a></li>
                                    <li><a href="#">SMS to Parents/Students</a></li>
                                    <li><a href="#">Professional Body</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">Department Library</a></li>
                                    <li><a href="#">Training</a></li>
                                    <li><a href="#">Recruitment</a></li>
                                    <li><a href="#">Placement</a></li>
                                    <li><a href="#">Games And Sports</a></li>
                                    <li><a href="#">Feedback to College</a></li>
                                    <li><a href="#">Alumini</a></li>
                                    <li><a href="#">Notices &amp; Circulars</a></li>
                                </ul>
                            </nav>
                        </aside>
                    </div>
                    <div class="centralDiv">
                        <br><br>
                        <h4>In the service of the society for last 20 years.<br> Our Motto Is to impart Quality Education.</h4><br>
                        <h2>The Department of Computer Science and Engineering.</h2>
                        <h3 class="page ">Welcome To The Student Portal.</h3>

                        <center>
                            <div class="loginForm">
                                <form action="details.php" method="POST" class="form form--login">
                                    <br>
                                    <h2>LOGIN </h2>
                                    <h4>Student <input type="radio" name="userType">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Admin <input type="radio" name="userType"></h4>
                                    <div class="form__field">
                                        <label>Username</label>
                                        <input id="login__username" type="text" class="form__input" placeholder="" name="uname" required>
                                    </div>

                                    <div class="form__field">
                                        <label>Password</label>
                                        <input id="login__password" type="password" class="form__input" placeholder="" name="pwd" required>
                                    </div>

                                    <div class="form__field__signup">
                                        <input type="submit" value="Sign In">
                                    </div>
                                </form>
                                <br>
                                <p class="text--center">New user?<a href="registrationPage.php" style="color:black;"> Please Register here ...  </a> <span class="fontawesome-arrow-right"></span></p>
                            </div>
                        </center>
                    </div>
                    <div class="asideRight">
                        <p></p>
                    </div>


                </div>
                <div id="bottom_part">
                    <p class="newFooter"> News<br><br><br>
                        <marquee behavior="scroll" scrollamount="5" direction="left" onmouseover="this.setAttribute('scrollamount',0);" onmouseout="this.setAttribute('scrollamount',5);">Fresher's Day at Sept 3
                        </marquee>
                        <br><br>
                        <marquee behavior="scroll" scrollamount="5" direction="left" onmouseover="this.setAttribute('scrollamount',0);" onmouseout="this.setAttribute('scrollamount',5);"> Monday College Closed.
                            <br><br>
                        </marquee>

                    </p>
                </div>
            </center>
        </div>
    </body>
    <footer id="footer">
        <h4 id="left">Copyright &copy; - <?php echo "20".date('y');?></h4>
        <h4 id="right">BVCEC</h4>
    </footer>

</html>
