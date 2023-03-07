<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Math Game</title>
    <link rel='stylesheet' href='game1info.css'>
</head>
<body>
	<h1>Welcome to General Knowledge Game!</h1>
	<p>GK is a fun and challenging game where you have to use your general knowledge to answer the questions. It's a great way to improve your General knowledge skills.</p>
	<h2>How to Play:</h2>
	<p>When you start the game, you will be given a General Knowledge questions on CARS. Your task is to select the correct options from all the options.</p>
	<h2>Ready to Play?</h2>
	<button onclick="location.href='game3.php'">Play Now!</button>
</body>
</html>
