<html>
<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>

<head>
    <title> Games</title>
    <style>
        body {
            background-image: url(signuppagewallpaper.webp);
        }

        /* Style the header */
        .image {
            position: relative;
        }

        .image img {
            display: block;
            margin: auto;
        }

        .button {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .button button {
            background-color: #6ab04c;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }

        .button button:hover {
            background-color: #d32f2f;
        }

        /* Style the game frame */
        .frame {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        /* Style the game images */
        .game {
            display: flex;
            flex-wrap: wrap;
            margin: 20px;
        }

        .game div {
            flex: 1;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .game img {
            width: 100%;
            border-radius: 20px;
            transition: transform .2s;
        }

        .game img:hover {
            transform: scale(1.1);
        }

        /* Style the footer */
        footer {
            background-color: #000000;
            color: white;
            text-align: center;
            padding: 20px;
            bottom: 0;
            width: 100%;
        }

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

        nav li:last-child {
            float: right;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>



        </ul>
    </nav>
    <h3>Click the game you want to play!!</h3>
    <div class="game" style="display: flex; flex-wrap: wrap;">
        <div style="flex: 1;">
            <a href="game1info.php"><img src="Picsart_23-02-12_18-21-09-341.jpg" style="width: 100%; margin-right: 20px;"></a>
        </div>
        <div style="flex: 1;">
            <a href="game2info.php"><img src="Picsart_23-02-12_18-43-50-155.jpg" style="width: 100%; margin-right: 40px;"></a>
        </div>
        <div style="flex: 1;">
            <a href="game3info.php"><img src="Picsart_23-02-12_19-24-58-349.jpg" style="width: 100%;"></a>
        </div>
        <div style="flex: 1;">
            <img src="image4.jpg" style="width: 100%; margin-right: 20px;">
        </div>
        <div style="flex: 1;">
            <img src="image5.jpg" style="width: 100%;">
        </div>
    </div>
    <footer>
        <p>Copyright &copy; THE GAMES HUB</p>
        <p>Contact us: thegameshub@gmail.com</p>
        <p>Instagram : <a href="https://www.instagram.com/mr.attitudeboi"> @mr.attitudeboi</a></p>
    </footer>
</body>

</html>