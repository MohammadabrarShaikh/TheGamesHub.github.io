<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>

<!DOCTYPE html>
<html>

<head>
  <title>The Games Hub</title>
  <style>
    /* General Styles */

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-image: url(signuppagewallpaper.webp);
      background-size: cover;
    }

    h1,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman', Times, serif;
      text-align: center;

    }

    h2 {
      padding-left: 2%;
      margin: 0;
      font-weight: bold;
      color: #000000;
      font-family: 'Times New Roman', Times, serif;
    }

    a {
      color: #4CAF50;
      text-decoration: none;
    }

    ul,
    ol {
      margin: 0;
      padding: 0;
    }

    /* Navigation Styles */

    nav {
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
      color: Black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 18px;
      font-family: 'Times New Roman', Times, serif;
    }

    nav li a:hover {
      background-color: black;
      color: whitesmoke;
    }

    nav li:last-child {
      float: right;
    }

    /* Header Styles */

    .image {
      position: relative;
      height: 200px;
      overflow: hidden;
    }

    .image img {
      width: 100%;
    }

    .button {
      position: absolute;
      bottom: 0;
      right: 0;
      margin: 10px;
    }

    .button button {
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    .button button:hover {
      background-color: #3e8e41;
    }

    .frame {
      background-color: #ffffff;
      margin: 20px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    /* About Section Styles */

    .about-section {
      background-color: transparent;
      margin: 20px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .about-section p {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 10px;
      color: white;
    }

    /* Footer Styles */

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
  </style>

</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="gamepage.php">Games</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="signout.php">Log Out</a></li>

    </ul>
  </nav>
 
  <div class="frame">
    <h1>Welcome to The Games Hub</h1>
  </div>
  <h2><?php echo $user_data['uName']; ?>
  </h2>
  <main>
    <section class='about-section'>
      <p>Hey <?php echo $user_data['uName']; ?>, Welcome to Games Hub We're excited to have you here and can't wait for you to explore all the fun and exciting games we have to offer.</p>
      <p>Our website is designed with players in mind, so you'll find that everything is easy to navigate and the games are organized in a way that makes it simple to find exactly what you're looking for. Plus, we're constantly updating our selection of games, so there's always something new and fresh to try.</p>
      <p>So what are you waiting for? Start playing today and see why our website is the go-to destination for gamers everywhere. Thanks for choosing us as your gaming partner, and happy gaming!</p>
    </section>
  </main>
  <footer>
    <p>Copyright &copy; THE GAMES HUB</p>
    <p>Contact us: thegameshub@gmail.com</p>
    <p>Instagram : <a href="https://www.instagram.com/mr.attitudeboi"> @mr.attitudeboi</a></p>
  </footer>
</body>

</html>