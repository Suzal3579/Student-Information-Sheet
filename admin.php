<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->

<!DOCTYPE html>
<html lang="en">
	<head>
	     <meta charset="UTF-8">
	    <title>
	        Student details information.
	    </title>
	    <link rel="stylesheet" href="styleadmin.css">
	    <link rel="stylesheet" href="animate.css">
	    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
	</head>
	<body>
		<header id="topHead" class="animated fadeInDown">
	        <a href="index.php"><h2 style = "margin-left : 30px">Student Information Sheet - BVCEC</h2></a>
	        <a href="index.php"><img id="home" src="download.png" style="width : 65px ; height : 65px;"></a>
	    </header>
		<div id="bodyMain">
			   <div id="bodyMain">
	            	<form id="importExcel" name="import" method="post" enctype="multipart/form-data">
	                	<p id="text">To insert data into database from Excel,<br> Click the browse button below and select the file you want to upload.<br></p>
	                	<input id="file" type="file" name="file" value="Choose a file"><br />
	                	<input id="submit" type="submit" name="submit" value="Insert">
	            	</form>
	            	<?php
					include "functions.php";
					import();
	            	?>
	                <form action="details_admin.php" method="POST" class="form form--login">
	                    <div class="form__fieldRoll">
	                        <div class="new">
	                            	<label class="fontawesome-user" for="login__username"><span class="hidden">Roll no</span></label></div>
	                        		<input id="login__rollno" type="text" class="form__input" placeholder="" name="roll_no" required> *
	                    </div>
	                    <div class="viewupdate animated bounce">
	                        <input type="submit" value="View/Update">
	                    </div>
	                </form>
	                <form action="stu_table.php" method="POST" class="form form--login">
	                    <div class="form__fieldRoll">
	                        <div class="studentlist animated bounce">
	                            <input type="submit" value="View student list">
	                        </div>
	                    </div>
	                </form>
	                <form action="admin_update.php" method="POST" class="form form--login">
	                    <p id="search"><br><br><u>Change username password</u></p>
	                    <div class="dibba">
	                        	<div class="new">
	                            	<label class="fontawesome-user" for="login__username"><span class="hidden">Current Username</span></label>
						</div>
	                        		<input id="login__rollno" type="text" class="form__input" placeholder="" name="cuname">
	                    </div>
	                    <div class="dibba">
	                        <div class="new">
	                            <label class="fontawesome-user" for="login__username"><span class="hidden">Current password</span></label></div>
	                        <input id="login__rollno" type="text" class="form__input" placeholder="" name="cpwd">
	                    </div>
	                    <div class="dibba">
	                        <div class="new">
	                            <label class="fontawesome-user" for="login__username"><span class="hidden">New Username</span></label></div>
	                        <input id="login__rollno" type="text" class="form__input" placeholder="" name="nuname">
	                    </div>
	                    <div class="dibba">
	                        <div class="new">
	                            <label class="fontawesome-user" for="login__username"><span class="hidden">New Password</span></label></div>
	                        <input id="login__rollno" type="text" class="form__input" placeholder="" name="npwd">
	                    </div>
	                    <div class="searchbottom animated bounce ">
	                        <input type="submit" value="submit">
	                    </div>
						</form>
	                    <form action="stu_table_criteria.php" method="POST" class="form form--login">
	                        <p id="search"><u>Advanced search</u></p>
	                        <div class="dibba">
	                            <div class="new">
	                                <label class="fontawesome-user" for="login__username"><span class="hidden">Percentage Greater Than</span></label></div>
	                            <input id="login__rollno" type="text" class="form__input" placeholder="" name="field_1">
	                        </div>
	                        <div class="searchbottom animated bounce ">
	                            <input type="submit" value="Search">
	                        </div>
						</form>
	        	</div>
	    	</div>
	</body>
</html>
