<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Jumble Word Game</title>
    <link rel='stylesheet' href='game1info.css'>
</head>
<body>
	<h1>Welcome to Jumble Word Game!</h1>
	<p>Jumble Word Game is a fun and challenging word game where you have to unscramble jumbled words to form meaningful words. It's a great way to improve your vocabulary and spelling skills.</p>
	<h2>How to Play:</h2>
	<p>When you start the game, you will be given a jumbled word. Your task is to unscramble the letters to form a meaningful word.</p>
	<h2>Ready to Play?</h2>
	<button onclick="location.href='game1.php'">Play Now!</button>
</body>
</html>
