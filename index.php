<?php 
session_start();
echo $_SESSION['user_id'];
if($_SESSION['user_email']==true){ 
	}
	else{
		header('location: login.php');
	}

// include ('./login.php');
// echo $user_id1;
include ("includes/db.php");
include ("functions/functions.php");
?>

<html>
<head>
	<title>MyGym | Index</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
</head>
<body>

	<!-- Main Container Start -->
	<div class="main_wrapper">
		
		<!-- Header Start -->
		<div class="header_wrapper">
			<a href="index.php"><img src="images/logo.jpg"></a>
		</div>
		<!-- Header End -->
		
		<!-- NavBar Start -->
		<div id="navbar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="my_account.php">My Account</a></li>
				<li><a href="index.php">Contact Us</a></li>
			</ul>

			<div id="login-btn-signup">
					<li><a href="logout.php">Logout</a></li>
			</div>
		</div>
		<!-- NavBar End -->
		
		<!-- Content Start -->
		<div class="content_wrapper">
			<div id="left_sidebar">
				<div id="sidebar_title">Days</div>
				<ul id="days">
					<?php  
						getDays();
					?>
				</ul>

				<div id="sidebar_title">Exercises</div>
				<ul id="days">
					<?php 
						getExercise($_SESSION['user_id']);
					?>
				</ul>
			</div>
			<div id="right_content">
				<div id="headline">
					<div id="headline_content">
						<h1 style="color: RED; text-align:center;"><center>:No Pain No Gain:</center></h1>
					</div>
				</div>
					<!-- Product Display Box Start -->
					<div id="products_box" style="background-image: url(images/bg2.jpg)">
						<?php
							get_All_Exercises($_SESSION['user_id']);
							get_Day_Exercises($_SESSION['user_id']);
							get_Exer_Exercises();
						?>
					</div>
					<!-- Product Display Box End -->
			</div>
		</div>
		<!-- Content End -->

		<!-- footer Start -->
		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2020 all rights reserved | Developed By: Salik,Aadarsh,Imran and Hammad </a></h5>
		</div>
		<!-- Footer End -->

	</div>
	<!-- Main Container End -->
</body>
</html>