<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="animate.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript">
        function checkedbox(element) {
            var checkboxes = document.getElementsByTagName('input');
            if (element.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    console.log(i)
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }

    </script>
    <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>
    <script type="text/javascript" src="date_time.js"></script>

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
                <h2>Bonam Venkata Chalamayya Engineering College,<br> Odalarevu</h2>
                <h3>Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997<br><br>

            </div>
            <div class="imageRight">
                <span id="date_time"></span>
                <script type="text/javascript">
                    window.onload = date_time('date_time');

                </script>
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
                    <li><a href="asd.php">Management</a>

                        <ul class="submenu">
                            <li><a href="founderchairman.php">Founder-Chairman</a></li>
                            <li><a href="secretary.php">Secretary</a></li>
                            <li><a href="chairman.php">Chairman</a></li>
                            <li><a href="vicechairman.php">Vice-Chairman</a></li>

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

                            <li><a href="civil.php">CE</a></li>
                            <li><a href="mech.php">ME</a></li>
                            <li><a href="eee.php">EEE</a></li>
                            <li><a href="ece.php">ECE</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Accredition</a>
                        <ul class="submenu">
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
                            <form class="navBar">
                                <nav id="navigationBar">
                                    <ul class="sideBar" style="margin-left:-25%;">
                                        <li><a href="acadamic.php">Academics</a></li>
                                        <li><a href="#">Administration</a></li>
                                        <li><a href="#">BVC News</a></li>
                                        <li><a href="#">Forthcoming Event</a></li>
                                        <li><a href="#">E-mail to students</a></li>
                                        <li><a href="#">SMS to Parents/Students</a></li>
                                        <li><a href="#">Recruitment</a></li>
                                        <li><a href="#">Professional Body</a></li>
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">Department Library</a></li>
                                        <li><a href="#">Training</a></li>
                                        <li><a href="#">Games And Sports</a></li>
                                        <li><a href="#">Placement</a></li>
                                <li><a href="feedback.php">Feedback to College</a></li>
                                        <li><a href="alumini.php">Alumini</a></li>
                                        <li><a href="#">Notices &amp; Circulars</a></li>
                                    </ul>
                                </nav>
                            </form>
                        </aside>
                    </div><br><br><br>
                    <div class="centralDiv" style="margin-left:5%;">
                        <?php 
                        
                        include('includes/config.php');

                        if(isset($_POST['check']) == true)
                        {

                            $subject = trim($_POST['subject']);
                            $message = trim($_POST['message']);
                            $from = 'pe.messh@gmail.com';
                            $reply = 'pe.messh@gmail.com';

                            foreach($_POST['check'] as $key => $value)
                            {
                                // Set content-type for sending HTML email
                                $headers = "BVC Engineering College" . "\r\n";
                                $headers .= "Odalarevu, Amalapuram" . "\r\n";
                                $headers .= "From: <".$from.">\r\n";
                                $headers .= "Reply-To: ".$reply."";
                                if(@mail($value,$subject,$message,$headers))
                                {
                                    echo '<div class="container-fluid" style="width:130%;">
                                          <div class="alert alert-success fade in">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
                                    echo '<strong>Success! </strong>';
                                    echo ' Mail has been Successfully sent to '.$value.'</br>';
                                    echo '</div></div>';
                                }
                            }
                        }

                        ?>
                        <div class="container-fluid" style="width:130%;">
                            <center>
                                <p>
                                    <h2>Please Select Students</h2>
                                </p><br><br>

                                <form method="post" action="">
                                    <?php

                            // Retrieve Email from Database
                            $getemail = mysql_query("SELECT * FROM profiles");

                            if (!$getemail) die('MySQL Error: ' . mysql_error());

                            echo '<table class="table table-bordered">';
                            echo "<thead>
                                  <tr>
                                  <th><input type='checkbox' onchange='checkedbox(this)' name='chk'/><h4> All</h4></th>
                                  <th><h4>Registration Number</h4></th>
                                  <th><h4>Student's Name</h4></th>
                                  <th><h4>E-mail</h4></th>
                                  </tr>
                                  </thead>";

                            if (mysql_num_rows($getemail) == 0) {
                            echo "<tbody><tr><td colspan='3'>No Data Avaialble</td></tr></tbody>";
                            }

                            while ($row = mysql_fetch_assoc($getemail)) {
                                echo "<tbody><tr><td><input value='".$row['email']."' type='checkbox' name='check[]'/></td>";
                                echo "<td >".$row['roll_no']."</td>";
                                echo "<td >".$row['name']."</td>";
                                echo "<td >".$row['email']."</td></tr></tbody>";
                            }
                            echo "</table>";
                            ?>
                                        <br><br>
                                        <p>Email Subject: <input type="text" name="subject" value="" class="form-control" /></p>
                                        <br><br>
                                        <p>Email Content: <textarea name="message" cols="40" rows="6"></textarea></p>
                                        <center><input type='submit' name='submit' value='Send Email Now' class="btn btn-primary btn-block" />
                                        </center>
                                        <br></form>
                        </div>
                    </div>
                </div>
                </center>
        </div>
        <footer id="footer">
            <h4 id="left">Copyright &copy; - <?php echo "20".date('y');?></h4>
            <h4 id="right">BVCEC</h4>
        </footer>
    </body>

</html>
