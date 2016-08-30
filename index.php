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

        <ul class="topnav" id="myTopnav">
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

        <body class="align">
            <img src="round.png" class="group " />
            <img src="group.png" class="round " />


            <div id="asideCont">
                <h2 class="page">BVC Engineering College, Odalarevu</h2>
                <h3 class="page">Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997<br>
                <br><br><br><br><br>
                <h4>In the service of the society for last 20 years.<br> Our Motto Is to impart Quality Education.</h4>
                <h2>The Department of Computer Science and Engineering.</h2>
                <h3 class="page ">Welcome To The Student Portal.</h3>

            </div>
            <aside id="buttonsAside">
                <form class="navBar">
                    <nav>
                        <input type="submit" value="BVC News"><br><br>
                        <input type="submit" value="Forthcoming Event"><br><br>
                        <input type="submit" value="E-mail to students"><br><br>
                        <input type="submit" value="SMS to Parents/Students"><br><br>
                        <input type="submit" value="Feedback">
                    </nav>
                </form>
            </aside>

            <div id="mainBody">

                <div class="site__container ">

                    <div class="grid__container ">


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
                <hr>
                <!--
                <footer id="bottom-part">

                    <p class="newFooter"> Copyright &copy; -2016</p>
                    <p class="newFoot">BVC Engineering College @ CSE</p>


                </footer>-->
            </div>

        </body>


    </body>

</html>
