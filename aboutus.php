<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>


<!DOCTYPE html>
<html>

<head>
	<title>About Us - The Games Hub</title>
	<link rel='stylesheet' href='aboutus.css'>
	<style>
		body {
			background-image: url(forgetpasswordbackgroundimage.jpeg);
			background-size: cover;
			margin: 0;
			padding: 0;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}

		header {
			background-color: transparent;
			height: 50px;
			margin-bottom: 20px;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}

		nav li {
			float: left;
		}

		nav li a {
			display: block;
			color: black;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 18px;
			font-family: 'Times New Roman', Times, serif;
		}

		nav li a:hover {
			background-color: Black;
			color: whitesmoke;
		}

		.about-section {
			background-color: transparent;
			margin: 20px;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			color:whitesmoke;
		}

		h1 {
			font-size: 36px;
			margin-bottom: 20px;
		}

		p {
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 10px;
		}

		footer {
			background-color: #000000;
			color: #ffffff;
			padding: 10px;
			text-align: center;
		}

		a {
			color: whitesmoke;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<header>
		<nav>
			<ul>
				<li><a href='index.php'>Home</a></li>
				<li><a href='aboutus.php'>About Us</a></li>
				<li><a href="gamepage.php">Games</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class='about-section'>
			<h1>About Us</h1>
			<p>We are a team of passionate gamers who love to create and play games. Our mission is to provide the best gaming experience to our players and constantly improve our games to keep them engaged.</p>
			<p>Thank you for choosing The Games Hub as your go-to gaming destination. We hope you enjoy our games as much as we enjoy making them!</p>
		</section>
	</main>
	<footer>
		<p>Copyright &copy; THE GAMES HUB</p>
		<p>Contact us: thegameshub@gmail.com</p>
		<p>Instagram : <a href="https://www.instagram.com/mr.attitudeboi"> @mr.attitudeboi</a></p>
	</footer>

</html>