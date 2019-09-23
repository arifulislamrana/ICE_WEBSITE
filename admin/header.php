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
							<li><a href="allstudents.php">All Students</a></li>
							<li><a href="addteacher.php">Add Teacher</a></li>
							<li><a href="upload.php">Add Students</a></li>
							<li><a href="#">Update</a></li>
							<li><a href="delete.php">Delete</a></li>
							<li><a href="#">Serach</a></li>
							<li><a href="<?php echo ROOT_URL; ?>">Logout</a></li>
						</ul>
					</nav>
				</header>
			</div>
		</div>