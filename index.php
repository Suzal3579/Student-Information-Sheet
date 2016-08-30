<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
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
                <h2>BVC Engineering College, Odalarevu</h2>
                <h3>Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997
            </div>
            <div class="imageRight">
                <img src="group.png" />
            </div>
        </div>
        <div id="clear"></div>
        <div class="navBarDiv">
            <nav class="navBar">
                <ul class="topnav">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="vision.php">Vision &amp; Mission</a></li>
                    <li><a href="asd.php">Management</a></li>
                    <li><a href="#">Principal</a></li>
                    <li><a href="#">Faculty</a></li>
                    <li><a href="#">Students</a></li>
                    <li><a href="Department.php">Departments</a></li>
                    <li><a href="#">Accredition</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </nav>
        </div>
        <div class="bodyDiv">
            <div class="forAside">
                <aside id="buttonsAside">
                    <form class="navBar">
                        <nav id="navigationBar">
                            <input type="submit" value="BVC News"><br><br>
                            <input type="submit" value="Forthcoming Event"><br><br>
                            <input type="submit" value="E-mail to students"><br><br>
                            <input type="submit" value="SMS to Parents/Students"><br><br>
                            <input type="submit" value="Feedback">
                        </nav>
                    </form>
                </aside>
            </div>
            <div class="centralDiv">
                <h4>In the service of the society for last 20 years.<br> Our Motto Is to impart Quality Education.</h4>
                <h2>The Department of Computer Science and Engineering.</h2>
                <h3 class="page ">Welcome To The Student Portal.</h3>

                <div class="loginForm">
                    <form action="details.php" method="POST" class="form form--login">
                        <br>
                        <h3><center>LOGIN </center></h3>
                        <h5>Student <input type="radio">
                            Admin <input type="radio"></h5>
                        <div class="form__field">
                            <h4>Username</h4>
                            <input id="login__username" type="text" class="form__input" placeholder="Username" name="uname" required>
                        </div>

                        <div class="form__field">
                            <h4>Password</h4>
                            <input id="login__password" type="password" class="form__input" placeholder="Password" name="pwd" required>
                        </div>

                        <div class="form__field__signup animated rubberBand">
                            <input type="submit" value="Sign In">
                        </div>
                    </form>

                    <p class="text--center">New user <a href="registrationPage.php" style="color:black;"> Please Register here ...  </a> <span class="fontawesome-arrow-right"></span></p>
                </div>
            </div>


            <footer id="bottom-part">

                <p class="newFooter"> Copyright &copy; -2016</p>
                <p class="newFoot">BVC Engineering College @ CSE</p>


            </footer>
        </div>

    </body>

</html>
