<?php
require('db.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ICE</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />	
		<link href="font/font.css" rel="stylesheet" type="text/css" />
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="container_full header_bg">
			<div class="fix container">
				<header id="header">
					<div class="logo floatleft">
						<h1><b><i>Information and Communication Engineering</i></b></h1>
					</div>
					<nav class="menu floatright">
						<ul>
							<li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
							<li><a href="teachers.php">Teachers</a></li>
							<li><a href="login.php">Student Profile</a></li>
							<li><a href="syllabus.php">Courses</a></li>
							<li><a href="gallary.php">Gallary</a></li>
							<li><a href="adminlogin.php">Admin</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</header>
			</div>
		</div>