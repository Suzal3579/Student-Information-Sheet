<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Student Details Information.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleDetails.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />


</head>

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
    <div class="clear"></div>
    <div class="navBarDiv">
        <nav class="navBar">
            <ul class="topnav">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="vision.php">Vision &amp; Mission</a></li>
                <li><a href="asd.php">Management</a></li>
                <li><a href="#">Principal</a></li>
                <li><a href="faculty.php">Faculty</a></li>
                <li><a href="#">Students</a></li>
                <li><a href="Department.php"> Departments</a>
                    <ul class="submenu">

                    </ul>
                </li>
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
                        <ul class="sideBar">
                            <li><a href="#">Academics</a></li>
                            <li><a href="#">Administration</a></li>
                            <li><a href="#">BVC News</a></li>
                            <li><a href="#">Forthcoming Event</a></li>
                            <li><a href="#">E-mail to students</a></li>
                            <li><a href="#">SMS to Parents/Students</a></li>
                            <li><a href="#">Professional Body</a></li>
                            <li><a href="#">Training</a></li>
                            <li><a href="#">Recruitment</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Department Library</a></li>
                            <li><a href="#">Placement</a></li>
                            <li><a href="#">Games And Sports</a></li>
                            <li><a href="#">Alumini</a></li>
                            <li><a href="#">Feedback to College</a></li>
                            <li><a href="#">Notices &amp; Circulars</a></li>
                        </ul>
                    </nav>
                </form>
            </aside>
        </div>
        <div id="bodyMain">
            <br>
            <br>
            <form action="registrationPage.php" method="POST" class="form form--login">
                <?php
            	include "functions.php";
				details();
            ?>
            </form>
        </div>
    </div>
</body>

</html>
