<?php
session_start();
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>SPU CODERS</title>
			<link rel="stylesheet" type="text/css" href="assets/styles/styledefault.css">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
	  <body>

	  <div class="header">
		  <div class="container">
		    <div class="navbar">
			    <div class="logo">
				    <a href="index.php"><img class="logo" src="assets/images/spuco images/spuco_logo.jpg" alt="Snow" width="170px" height="170px" align="left"></a>
			    </div>
			    <nav>
					<ul id="MenuItems" style="background: whitesmoke;">
						<li id="nav-exit"style="visibility: collapse" onclick="menutoggle()" style="margin-right: 30px; color: black;">X</li>
						<li><a href="index.php" style="color: green;"><img src="assets/images/icons/home_icon.png" alt="Snow" style="width: 25px; height: 25px">Home</a></li>
						<li><a href="about.php" style="color: green;"><img src="assets/images/icons/about_icon.png" alt="Snow" style="width: 25px; height: 25px">About Us</a></li>
						<li><a href="contact.php" style="color: green;"><img src="assets/images/icons/contact_icon.png" alt="Snow" style="width: 25px; height: 25px">Contact Us</a></li>
						<li><a href="#" style="color: green;"><img src="assets/images/icons/events_icon.jpg" alt="Snow" style="width: 35px; height: 35px">Events & Competitions</a></li>
						<li><a href="#" style="color: green;"><img src="assets/images/icons/membership_icon.jpg" alt="Snow" style="width: 35px; height: 35px">Memberships</a></li>
						<li><a href="#" style="color: green;"><img src="assets/images/icons/courses_icon.jpg" alt="Snow" style="width: 35px; height: 35px">Courses</a></li>
				    </ul>
				</nav>

				<!----------js for toggle menu----------->
				<script>
					var MenuItems = document.getElementById("MenuItems");

					MenuItems.style.maxHeight = "0px";

					function menutoggle(){
						if(MenuItems.style.maxHeight == "0px")
						{
							MenuItems.style.maxHeight = "200px"
							document.getElementById("nav-exit").style.visibility = "";
						}
						else
						{
								MenuItems.style.maxHeight = "0px"
								document.getElementById("nav-exit").style.visibility = "collapse";	
						}
					}
				</script>
