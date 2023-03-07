<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Esports News</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-image: url(adminloginbackground.jpeg);
		}

		.header {
			background-color: grey;
      margin: 20px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 20px;
		}

		.article {
			background-color: grey;
			border-radius: 5px;
			box-shadow: 0 2px 2px rgba(0,0,0,0.3);
			padding: 20px;
			max-width: 800px;
			width: 100%;
			margin-bottom: 20px;
			display: flex;
			flex-direction: row;
			align-items: center;
		}

		.article img {
			max-width: 300px;
			width: 100%;
			border-radius: 5px;
			margin-right: 20px;
			margin-left: 20px;
		}

		.article.right img {
			margin-right: 0;
			margin-left: 20px;
			order: 2;
		}

		.article h2 {
			font-size: 24px;
			margin-top: 0;
			margin-bottom: 10px;
		}

		.article p {
			font-size: 16px;
			line-height: 1.5;
			margin-top: 0;
			margin-bottom: 10px;
		}

		.article a {
			font-weight: bold;
			color: #333;
			text-decoration: none;
		}

		.article a:hover {
			text-decoration: underline;
		}

        footer {
      background-color: #000000;
      color: #ffffff;
      text-align: center;
      padding: 20px;
      font-size: 14px;
    }

    footer a {
      color: #ffffff;
    }
    h2{
        font-family: 'Times New Roman', Times, serif;
    }
    nav {
      background-color: black;
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
      color: whitesmoke;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 18px;
      font-family: 'Times New Roman', Times, serif;
    }

    nav li a:hover {
      background-color: white;
      color: black;
    }

    nav li:last-child {
      float: right;
    }

	</style>
</head>
<body>
<nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="gamepage.php">Games</a></li>

    </ul>
  </nav>
	<header class="header">
		<h1>Esports News</h1>
	</header>

	<div class="container">
		<div class="article right">
			<img src="news1.jpg" alt="Image 1">
			<div>
				<h2>Have the abilities of the newest VALORANT agent been leaked?</h2>
				<p>According to popular VALORANT twitter account ValorLeaks, the abilities of the newest agent have been leaked.</p>
				<a href="https://www.esports.com/en/have-the-abilities-of-the-newest-valorant-agent-been-leaked-339651" onclick="return confirm('You will be redirected to esport.com to read the full news')">Read More</a>
			</div>
		</div>

		<div class="article">
			<img src="news2.jpg" alt="Image 2">
			<div>
				<h2>Riot plans mid-scope updates for both Taliyah and Olaf</h2>
				<p>League of Legends developers have talked about some possible updates to Taliyah and Olaf which should be released in a couple of months.</p>
				<a href="https://www.esports.com/en/riot-plans-mid-scope-updates-for-both-taliyah-and-olaf-339636" onclick="return confirm('You will be redirected to esport.com to read the full news')">Read More</a>
			</div>
		</div>

        <div class="article right">
			<img src="news3.jpg" alt="Image 1">
			<div>
				<h2>Esports organization Team Spirit to leave Russia and relocate to Serbia</h2>
				<p>Esports organization Team Spirit has announced that they’ll be relocating from Russia to Serbia as a result of the current invasion of Ukraine.</p>
				<a href="https://www.esports.com/en/esports-organization-team-spirit-to-leave-russia-and-relocate-to-serbia-338748" onclick="return confirm('You will be redirected to esport.com to read the full news')">Read More</a>
			</div>
		</div>

    </div>

	<footer>
    <p>Copyright &copy; THE GAMES HUB</p>
    <p>Contact us: thegameshub@gmail.com</p>
    <p>Instagram : <a href="https://www.instagram.com/mr.attitudeboi"> @mr.attitudeboi</a></p>
  </footer>
</body>
</html>
