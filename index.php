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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.im.js"></script>

        <body class="align">
			<img src=""/>
			<div id = "asideCont" class="animated fadeInUp">
					<u><h2 class = "page">BVC Engineering College, Odalarevu</h2></u>
					<h3 class = "page ">Welcome To The Student Portal Of The Department Of Computer Science And Engineering.</h3>
					<h4 class = "page ">Affiliated To : JNTUK, Kakinada</h4>
					<h4 class = "page ">And Accredited BY : NBA New Delhi And NAAC With 'A' Grade</h4>
					<h4 class = "page ">Approved By : AICTE, New Delhi</h4><br>
					<h2 class = "page ">Established In 1997</h2>
					<p class = "page ">In the service of the society for last 16 years. </p>
		 			<p class = "page ">Our Motto : Quality Education. </p>

			</div>


            <div class="site__container ">

                <div class="grid__container animated fadeInDown">

                    <h3 id="font-self"><a href="#"> The Student Information Sheet </a></h3>

                    <form action="details.php" method="POST" class="form form--login">

                        <div class="form__field">
                            <label class="fontawesome-user" for="login__username"><span class="hidden">Login ID</span></label>
                            <input id="login__username" type="text" class="form__input" placeholder="Username" name="uname" required>
                        </div>

                        <div class="form__field">
                            <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
                            <input id="login__password" type="password" class="form__input" placeholder="Password" name="pwd" required>
                        </div>

                        <div class="form__field__signup animated rubberBand">
                            <input type="submit" value="Sign In">
                        </div>
                    </form>

                    <p class="text--center">New user? <a href="registrationPage.php"> Register here ...  </a> <span class="fontawesome-arrow-right"></span></p>

                </div>

                <footer id="bottom-part">

                    <p class="newFooter"> Copyright &copy; -2016</p>
                    <p class="newFoot">developers@bvcgroup.in</p>


                </footer>
            </div>
        </body>


    </body>

</html>
