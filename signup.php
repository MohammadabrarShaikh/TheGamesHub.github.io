<!DOCTYPE html>
<html>

<head>
	<title>SIGN UP</title>

	<style>
		body {
			background-image: url(signuppagewallpaper.webp);
			background-size: cover;
		}

		#box {
  margin: auto;
  margin-top: 50px;
  max-width: 400px;
  padding: 20px;
  background-color: transparent;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
}

		form {
			margin-top: 20px;
			background-color: transparent;

		}

		.title {
			font-size: 30px;
			color: black;
			margin-bottom: 20px;
			font-family: 'Times New Roman', Times, serif;
			font-style: bold;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
			padding: 10px;
			border-radius: 5px;
			border: bold;
			background-color: #45423d;
			margin-bottom: 10px;
			width: 100%;
			box-sizing: border-box;
		}

		#button {
			background-color: #FFA500;
			color: #FFFFFF;
			padding: 10px;
			border: none;
			border-radius: 5px;
			width: 100%;
			cursor: pointer;
			font-weight: bold;

		}

		.buttona button {
			padding: 10px;
			background-color: #ff9900;
			border: none;
			color: #fff;
			font-weight: bold;
			border-radius: 5px;
			cursor: pointer;
			width: 100%;
			margin-top: 10px;
		}

		.placeholder {
			color: white;
		}
	</style>




</head>

<body>

	<div id="box">

		<form method="post">
			<div class="title">SIGN UP</div>
			Enter Name:
			<input id="text" type="text" name="name" placeholder="Enter your Name"><br>
			Enter Email:
			<input id="text" type="email" name="email" placeholder="Email your Email"><br>
			Enter Username:
			<input id="text" type="text" name="user_name" placeholder="Enter the Username"><br>
			Enter Password:
			<input id="text" type="password" name="password" placeholder="Enter the Password"><br><br>

			<input id="button" type="submit" value="Signup"><br>

			<div class="buttona">
				<button onclick="location.href='signin.php'" type="button">Sign In</button><br><br>
			</div>
		</form>
	</div>


	<?php
	session_start();

	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$email = $_POST['email'];

		$check_email_query = "SELECT * FROM user_details WHERE email = '$email'";
		$check_email_result = mysqli_query($con, $check_email_query);

		if (mysqli_num_rows($check_email_result) > 0) {
			// Show error message to the user
			echo "The Email is already linked with an Account!";
		} else {

			$check_uName_query = "SELECT * FROM user_details WHERE uName = '$user_name'";
			$check_uName_result = mysqli_query($con, $check_uName_query);

			if (mysqli_num_rows($check_uName_result) > 0) {
				echo "User Name Not Available";
			} else {

				if (!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($name) && !empty($email)) {

					//save to database

					$query = "insert into user_details values (null, '$name','$email','$user_name','$password')";

					$res = mysqli_query($con, $query);

					if ($res) {
						header("Location:signin.php");
					} else {

	?>

						<script>
							alert("dATA NOT INSERTED");
						</script>


	<?php

					}


					die;
				} else {
					echo "Please enter some valid information!";
				}
			}
		}
	}
	?>


</body>

</html>