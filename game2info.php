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
	<h1>Welcome to Math Game!</h1>
	<p>Math Game is a fun and challenging game where you have to solve the given problem. It's a great way to improve your Math's skills.</p>
	<h2>How to Play:</h2>
	<p>When you start the game, you will be given a maths problem. Your task is to solve it and give correct answer.</p>
	<h2>Ready to Play?</h2>
	<button onclick="location.href='game2.php'">Play Now!</button>
</body>
</html>
